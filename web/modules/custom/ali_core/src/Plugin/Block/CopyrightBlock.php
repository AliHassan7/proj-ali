<?php

namespace Drupal\ali_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'CopyrightBlock' block.
 *
 * @Block(
 *  id = "copyright_block",
 *  admin_label = @Translation("Copyright block"),
 * )
 */
class CopyrightBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    print "<p><span>© " . date('Y') . " </span> Ali Hassan All Rights Reserved</p>";
    $build = [];
    $build['copyright_block']['#markup'] = '';

    return $build;
  }

}