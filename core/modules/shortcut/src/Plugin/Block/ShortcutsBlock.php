<?php

namespace Drupal\shortcut\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;

/**
 * Provides a 'Shortcut' block.
 */
#[\Drupal\Core\Block\Attribute\Block(id: 'shortcuts', admin_label: new Drupal\Core\StringTranslation\TranslatableMarkup('Shortcuts'), category: new Drupal\Core\StringTranslation\TranslatableMarkup('Menus'))]
class ShortcutsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      shortcut_renderable_links(shortcut_current_displayed_set()),
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function blockAccess(AccountInterface $account) {
    return AccessResult::allowedIfHasPermission($account, 'access shortcuts');
  }

}
