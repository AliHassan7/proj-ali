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
                  <li><a href="https://www.linkedin.com/in/llalihassanll/" target="_blank"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a></li>
                  <li><a href="https://twitter.com/JustDrupaling" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
                  <li><a href="https://www.instagram.com/loyaltyisfirst" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
              </ul>
          </div>
    ';

    return $build;
  }

}
