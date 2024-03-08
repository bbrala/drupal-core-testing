<?php

namespace Drupal\system\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\MainContentBlockPluginInterface;

/**
 * Provides a 'Main page content' block.
 */
#[\Drupal\Core\Block\Attribute\Block(id: 'system_main_block', admin_label: new Drupal\Core\StringTranslation\TranslatableMarkup('Main page content'), forms: ['settings_tray' => false])]
class SystemMainBlock extends BlockBase implements MainContentBlockPluginInterface {

  /**
   * The render array representing the main page content.
   *
   * @var array
   */
  protected $mainContent;

  /**
   * {@inheritdoc}
   */
  public function setMainContent(array $main_content) {
    $this->mainContent = $main_content;
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    return $this->mainContent;
  }

}
