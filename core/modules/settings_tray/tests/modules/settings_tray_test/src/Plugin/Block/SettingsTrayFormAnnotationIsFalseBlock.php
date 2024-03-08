<?php

namespace Drupal\settings_tray_test\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Block that explicitly provides no "settings_tray" form, thus opting out.
 */
#[\Drupal\Core\Block\Attribute\Block(id: 'settings_tray_test_false', admin_label: 'Settings Tray test block: forms[settings_tray]=FALSE', forms: ['settings_tray' => false])]
class SettingsTrayFormAnnotationIsFalseBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return ['#markup' => '<span>FALSE</span>'];
  }

}
