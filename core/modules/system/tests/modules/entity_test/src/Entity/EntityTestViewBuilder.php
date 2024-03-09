<?php

namespace Drupal\entity_test\Entity;

/**
 * Test entity class for testing a view builder.
 */
#[\Drupal\Core\Entity\Attribute\ContentEntityType(id: 'entity_test_view_builder', label: new Drupal\Core\StringTranslation\TranslatableMarkup('Entity Test view builder'), handlers: ['access' => 'Drupal\entity_test\EntityTestAccessControlHandler', 'view_builder' => 'Drupal\entity_test\EntityTestViewBuilderOverriddenView'], base_table: 'entity_test_view_builder', render_cache: false, entity_keys: ['id' => 'id', 'uuid' => 'uuid', 'label' => 'name', 'bundle' => 'type', 'langcode' => 'langcode'])]
class EntityTestViewBuilder extends EntityTest {

}
