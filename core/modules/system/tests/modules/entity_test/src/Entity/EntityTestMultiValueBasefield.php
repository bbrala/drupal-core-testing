<?php

namespace Drupal\entity_test\Entity;

use Drupal\Core\Entity\EntityTypeInterface;

/**
 * Defines an entity type with a multivalue base field.
 */
#[\Drupal\Core\Entity\Attribute\ContentEntityType(id: 'entity_test_multivalue_basefield', label: new Drupal\Core\StringTranslation\TranslatableMarkup('Entity Test with a multivalue base field'), base_table: 'entity_test_multivalue_basefield', data_table: 'entity_test_multivalue_basefield_field_data', handlers: ['views_data' => 'Drupal\views\EntityViewsData'], entity_keys: ['id' => 'id', 'uuid' => 'uuid', 'bundle' => 'type', 'label' => 'name', 'langcode' => 'langcode'])]
class EntityTestMultiValueBasefield extends EntityTest {

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    $fields = parent::baseFieldDefinitions($entity_type);
    $fields['name']->setCardinality(2);

    return $fields;
  }

}
