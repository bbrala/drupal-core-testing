<?php

namespace Drupal\action_test\Plugin\Action;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Action\ActionBase;
use Drupal\Core\Session\AccountInterface;

/**
 * Provides an operation with no type specified.
 */
#[\Drupal\Core\Action\Attribute\Action(id: 'action_test_no_type', label: new Drupal\Core\StringTranslation\TranslatableMarkup('An operation with no type specified'))]
class NoType extends ActionBase {

  /**
   * {@inheritdoc}
   */
  public function execute($entity = NULL) {
  }

  /**
   * {@inheritdoc}
   */
  public function access($object, AccountInterface $account = NULL, $return_as_object = FALSE) {
    $result = AccessResult::allowed();
    return $return_as_object ? $result : $result->isAllowed();
  }

}
