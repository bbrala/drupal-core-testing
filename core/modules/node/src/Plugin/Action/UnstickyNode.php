<?php

namespace Drupal\node\Plugin\Action;

use Drupal\Core\Field\FieldUpdateActionBase;
use Drupal\node\NodeInterface;

/**
 * Makes a node not sticky.
 */
#[\Drupal\Core\Action\Attribute\Action(id: 'node_make_unsticky_action', label: new Drupal\Core\StringTranslation\TranslatableMarkup('Make selected content not sticky'), type: 'node')]
class UnstickyNode extends FieldUpdateActionBase {

  /**
   * {@inheritdoc}
   */
  protected function getFieldsToUpdate() {
    return ['sticky' => NodeInterface::NOT_STICKY];
  }

}
