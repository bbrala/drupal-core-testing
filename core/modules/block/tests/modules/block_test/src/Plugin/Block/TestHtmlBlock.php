<?php

namespace Drupal\block_test\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block to test HTML.
 */
#[\Drupal\Core\Block\Attribute\Block(id: 'test_html', admin_label: new Drupal\Core\StringTranslation\TranslatableMarkup('Test HTML block'))]
class TestHtmlBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#attributes' => \Drupal::state()->get('block_test.attributes'),
      '#children' => \Drupal::state()->get('block_test.content'),
    ];
  }

}
