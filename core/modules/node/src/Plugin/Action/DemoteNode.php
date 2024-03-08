<?php

namespace Drupal\node\Plugin\Action;

use Drupal\Core\Field\FieldUpdateActionBase;
use Drupal\node\NodeInterface;

/**
 * Demotes a node.
 */
#[\Drupal\Core\Action\Attribute\Action(id: 'node_unpromote_action', label: new Drupal\Core\StringTranslation\TranslatableMarkup('Demote selected content from front page'), type: 'node')]
class DemoteNode extends FieldUpdateActionBase {

  /**
   * {@inheritdoc}
   */
  protected function getFieldsToUpdate() {
    return ['promote' => NodeInterface::NOT_PROMOTED];
  }

}
