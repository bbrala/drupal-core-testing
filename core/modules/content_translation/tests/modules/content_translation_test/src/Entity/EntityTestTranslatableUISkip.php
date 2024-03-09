<?php

namespace Drupal\content_translation_test\Entity;

use Drupal\entity_test\Entity\EntityTest;

/**
 * Defines the test entity class.
 */
#[\Drupal\Core\Entity\Attribute\ContentEntityType(id: 'entity_test_translatable_UI_skip', label: new Drupal\Core\StringTranslation\TranslatableMarkup('Test entity - Translatable skip UI check'), base_table: 'entity_test_mul', data_table: 'entity_test_mul_property_data', entity_keys: ['id' => 'id', 'uuid' => 'uuid', 'bundle' => 'type', 'label' => 'name', 'langcode' => 'langcode'], translatable: true, content_translation_ui_skip: true)]
class EntityTestTranslatableUISkip extends EntityTest {

}
