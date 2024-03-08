<?php

namespace Drupal\node\Plugin\Action;

use Drupal\Core\Field\FieldUpdateActionBase;
use Drupal\node\NodeInterface;

/**
 * Promotes a node.
 */
#[\Drupal\Core\Action\Attribute\Action(id: 'node_promote_action', label: new Drupal\Core\StringTranslation\TranslatableMarkup('Promote selected content to front page'), type: 'node')]
class PromoteNode extends FieldUpdateActionBase {

  /**
   * {@inheritdoc}
   */
  protected function getFieldsToUpdate() {
    return ['promote' => NodeInterface::PROMOTED];
  }

}
