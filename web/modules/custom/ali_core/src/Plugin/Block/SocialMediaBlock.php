<?php

namespace Drupal\ali_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'SocialMediaBlock' block.
 *
 * @Block(
 *  id = "social_media_block",
 *  admin_label = @Translation("Social media block"),
 * )
 */
class SocialMediaBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['social_media_block']['#markup'] = '
          <div>
              <ul>
                  <li><i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></li>
                  <li><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></li>
                  <li><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></li>
              </ul>
          </div>
    ';

    return $build;
  }

}
