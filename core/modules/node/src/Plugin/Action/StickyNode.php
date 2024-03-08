<?php

namespace Drupal\node\Plugin\Action;

use Drupal\Core\Field\FieldUpdateActionBase;
use Drupal\node\NodeInterface;

/**
 * Makes a node sticky.
 */
#[\Drupal\Core\Action\Attribute\Action(id: 'node_make_sticky_action', label: new Drupal\Core\StringTranslation\TranslatableMarkup('Make selected content sticky'), type: 'node')]
class StickyNode extends FieldUpdateActionBase {

  /**
   * {@inheritdoc}
   */
  protected function getFieldsToUpdate() {
    return ['sticky' => NodeInterface::STICKY];
  }

}
