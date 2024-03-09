<?php

namespace Drupal\entity_test\Entity;

/**
 * Test entity class.
 */
#[\Drupal\Core\Entity\Attribute\ContentEntityType(id: 'entity_test_label', label: new Drupal\Core\StringTranslation\TranslatableMarkup('Entity Test label'), handlers: ['access' => 'Drupal\entity_test\EntityTestAccessControlHandler', 'view_builder' => 'Drupal\entity_test\EntityTestViewBuilder'], base_table: 'entity_test_label', render_cache: false, entity_keys: ['uuid' => 'uuid', 'id' => 'id', 'label' => 'name', 'bundle' => 'type', 'langcode' => 'langcode'])]
class EntityTestLabel extends EntityTest {

}
