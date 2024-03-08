<?php

namespace Drupal\block_test\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block to test caching.
 */
#[\Drupal\Core\Block\Attribute\Block(id: 'test_form_in_block', admin_label: new Drupal\Core\StringTranslation\TranslatableMarkup('Test form block caching'))]
class TestFormBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return \Drupal::formBuilder()->getForm('Drupal\block_test\Form\TestForm');
  }

}
