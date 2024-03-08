<?php

namespace Drupal\layout_builder_form_block_test\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block containing inline template with <form> tag.
 *
 * For use in Layout Builder tests.
 */
#[\Drupal\Core\Block\Attribute\Block(id: 'layout_builder_form_block_test_inline_template_form_block', admin_label: new Drupal\Core\StringTranslation\TranslatableMarkup('Layout Builder form block test inline template form block'), category: new Drupal\Core\StringTranslation\TranslatableMarkup('Layout Builder form block test'))]
class TestInlineTemplateFormBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['form'] = [
      '#type' => 'inline_template',
      '#template' => '<form method="POST"><label>{{ "Keywords"|t }}<input name="keyword" type="text" required /></label><input name="submit" type="submit" value="{{ "Submit"|t }}" /></form>',
    ];

    return $build;
  }

}
