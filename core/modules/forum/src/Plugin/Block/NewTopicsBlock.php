<?php

namespace Drupal\forum\Plugin\Block;

use Drupal\Core\Database\Database;

/**
 * Provides a 'New forum topics' block.
 */
#[\Drupal\Core\Block\Attribute\Block(id: 'forum_new_block', admin_label: new Drupal\Core\StringTranslation\TranslatableMarkup('New forum topics'), category: new Drupal\Core\StringTranslation\TranslatableMarkup('Lists (Views)'))]
class NewTopicsBlock extends ForumBlockBase {

  /**
   * {@inheritdoc}
   */
  protected function buildForumQuery() {
    return Database::getConnection()->select('forum_index', 'f')
      ->fields('f')
      ->addTag('node_access')
      ->addMetaData('base_table', 'forum_index')
      ->orderBy('f.created', 'DESC')
      ->range(0, $this->configuration['block_count']);
  }

}
