<?php

namespace Drupal\entity_test\Entity;

/**
 * Test entity class.
 */
#[\Drupal\Core\Entity\Attribute\ContentEntityType(id: 'entity_test_no_label', label: new Drupal\Core\StringTranslation\TranslatableMarkup('Entity Test without label'), internal: true, persistent_cache: false, base_table: 'entity_test_no_label', handlers: ['access' => 'Drupal\entity_test\EntityTestAccessControlHandler'], entity_keys: ['id' => 'id', 'uuid' => 'uuid', 'bundle' => 'type'])]
class EntityTestNoLabel extends EntityTest {

  /**
   * {@inheritdoc}
   */
  public function label() {
    return $this->getName();
  }

}
