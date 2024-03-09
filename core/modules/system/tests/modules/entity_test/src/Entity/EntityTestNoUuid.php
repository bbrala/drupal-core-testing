<?php

namespace Drupal\entity_test\Entity;

/**
 * Test entity class with revisions but without UUIDs.
 */
#[\Drupal\Core\Entity\Attribute\ContentEntityType(id: 'entity_test_no_uuid', label: new Drupal\Core\StringTranslation\TranslatableMarkup('Test entity without UUID'), handlers: ['access' => 'Drupal\entity_test\EntityTestAccessControlHandler'], base_table: 'entity_test_no_uuid', revision_table: 'entity_test_no_uuid_revision', admin_permission: 'administer entity_test content', persistent_cache: false, entity_keys: ['id' => 'id', 'revision' => 'vid', 'bundle' => 'type', 'label' => 'name', 'langcode' => 'langcode'])]
class EntityTestNoUuid extends EntityTest {

}
