<?php

namespace Drupal\system\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Powered by Drupal' block.
 */
#[\Drupal\Core\Block\Attribute\Block(id: 'system_powered_by_block', admin_label: new Drupal\Core\StringTranslation\TranslatableMarkup('Powered by Drupal'))]
class SystemPoweredByBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return ['label_display' => FALSE];
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    return ['#markup' => '<span>' . $this->t('Powered by <a href=":poweredby">Drupal</a>', [':poweredby' => 'https://www.drupal.org']) . '</span>'];
  }

}
