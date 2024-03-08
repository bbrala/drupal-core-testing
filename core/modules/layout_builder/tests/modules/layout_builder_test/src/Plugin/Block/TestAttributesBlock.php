<?php

namespace Drupal\layout_builder_test\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'TestAttributes' block.
 */
#[\Drupal\Core\Block\Attribute\Block(id: 'layout_builder_test_test_attributes', admin_label: new Drupal\Core\StringTranslation\TranslatableMarkup('Test Attributes'), category: new Drupal\Core\StringTranslation\TranslatableMarkup('Test'))]
class TestAttributesBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [
      '#attributes' => [
        'class' => ['attribute-test-class'],
        'custom-attribute' => 'test',
      ],
      '#markup' => $this->t('Example block providing its own attributes.'),
      '#contextual_links' => [
        'layout_builder_test' => ['route_parameters' => []],
      ],
    ];
    return $build;
  }

}
