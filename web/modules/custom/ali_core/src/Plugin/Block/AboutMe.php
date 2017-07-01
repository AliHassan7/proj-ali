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
    <div class="row intro hideme">
        <div class="col-md-6 col-md-offset-1 about">
            <span class="about-title">About</span>
            <br><h3 class="intro-text">Hi, I\'m Ali. A Drupal Developer, Photographer, Traveler, Videographer, and Nature Enthusiast.</h3><br>
            <div class="skill-icons">
                <i class="fa fa-drupal fa-5x" aria-hidden="true"></i>
                <i class="fa fa-wordpress fa-5x" aria-hidden="true"></i>
                <i class="fa fa-camera-retro fa-5x" aria-hidden="true"></i>
                <i class="fa fa-video-camera fa-5x" aria-hidden="true"></i>
            </div>
        </div>

        <div class="col-md-3 my-pic"><img src="../../../../../../themes/custom/alitheme/images/candid-ali.png" alt="Image of Ali" class="img-responsive"></div>

    </div>

    <div class="row skills hideme">
        <div class="col-md-3 col-md-offset-1"><span class="about-title">Services/Skills</span><br>
            <ul>
                <li>Drupal 7/8 Development</li>
                <li>Wordpress Development</li>
                <li>HTML/CSS/SASS</li>
                <li>PHP/jQuery/JavaScript</li>
                <li>Drupal Training</li>
                <li>Photography</li>
                <li>Videography</li>
            </ul>
        </div>
        <div class="col-md-7">
            <span class="about-title">Meet the Dev</span><br>
            <p>I\'m currently an Acquia-Certified Drupal Developer. Previously, I was an Environmental Scientist! After graduating from GMU with a bachelor\'s degree in Environmental Science and working in the field for a year, I decided to learn programming and web development. I’ve been a Drupal Developer ever since and have worked on many Drupal 7, Drupal 8, and even WordPress websites. My transition into the software/web development field from an Environmental Science background is representative of the fact that I’m a very fast learner. I may not know how to do a task, but I will find out how. I bring energy and enthusiasm to every task I\'m assigned. I have lived in 3 different countries and experienced many different cultures and that has allowed me to develop great interpersonal communication skills. I love talking to people, working in a team environment, and turning client requirements into solutions. I love Drupal because it allows to make an impact on many causes around the world from the comforts of Northern Virginia. Thank you for taking the time to read this.</p>
        </div>
    </div>
    ';

    return $build;
  }

}
