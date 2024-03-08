<?php

namespace Drupal\forum\Plugin\Block;

use Drupal\Core\Database\Database;

/**
 * Provides an 'Active forum topics' block.
 */
#[\Drupal\Core\Block\Attribute\Block(id: 'forum_active_block', admin_label: new Drupal\Core\StringTranslation\TranslatableMarkup('Active forum topics'), category: new Drupal\Core\StringTranslation\TranslatableMarkup('Lists (Views)'))]
class ActiveTopicsBlock extends ForumBlockBase {

  /**
   * {@inheritdoc}
   */
  protected function buildForumQuery() {
    return Database::getConnection()->select('forum_index', 'f')
      ->fields('f')
      ->addTag('node_access')
      ->addMetaData('base_table', 'forum_index')
      ->orderBy('f.last_comment_timestamp', 'DESC')
      ->range(0, $this->configuration['block_count']);
  }

}
