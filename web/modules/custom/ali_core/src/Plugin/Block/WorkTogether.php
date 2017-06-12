<?php

namespace Drupal\ali_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'WorkTogether' block.
 *
 * @Block(
 *  id = "work_together",
 *  admin_label = @Translation("Work together"),
 * )
 */
class WorkTogether extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['work_together']['#markup'] = '
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-1"><h3>Interested in working together?</h3></div>
        <div class="col-md-3"><a class="btn btn-default" href="/contact" role="button">Let\'s build something awesome</a></div>
    </div>
  </div>

    ';

    return $build;
  }

}
