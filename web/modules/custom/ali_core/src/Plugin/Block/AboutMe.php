<?php

namespace Drupal\ali_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'AboutMe' block.
 *
 * @Block(
 *  id = "about_me",
 *  admin_label = @Translation("About me"),
 * )
 */
class AboutMe extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['about_me']['#markup'] = '
    <div class="row">
        <div class="col-md-7">Hey</div>
        <div class="col-md-3">Ypa</div>
        <div class="col-md-2">Last</div>
    </div>
    ';

    return $build;
  }

}
