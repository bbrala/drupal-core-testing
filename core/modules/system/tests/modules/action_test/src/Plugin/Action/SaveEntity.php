<?php

namespace Drupal\action_test\Plugin\Action;

use Drupal\Core\Action\ActionBase;
use Drupal\Core\Session\AccountInterface;

/**
 * Provides an operation to save user entities.
 */
#[\Drupal\Core\Action\Attribute\Action(id: 'action_test_save_entity', label: new Drupal\Core\StringTranslation\TranslatableMarkup('Saves entities'), type: 'user')]
class SaveEntity extends ActionBase {

  /**
   * {@inheritdoc}
   */
  public function execute($entity = NULL) {
    $entity->save();
  }

  /**
   * {@inheritdoc}
   */
  public function access($object, AccountInterface $account = NULL, $return_as_object = FALSE) {
    /** @var \Drupal\Core\Entity\EntityInterface $object */
    return $object->access('update', $account, $return_as_object);
  }

}
