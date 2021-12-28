<?php

/**
 * Template part for displaying callout-bottom with image.
 *
 * @package White_Canvas_Design_Theme
 */
?>

<?php
$title = get_field('cb_title');
$subtitle = get_field('cb_subtitle');
$content = get_field('cb_content');
$background = get_field('background_image');

if ($background) {
  $bg_url = $background['url'];
}
?>
<section class="callout-bottom has-background-primary bg-image"
  style="background-image: url('<?php echo $bg_url; ?>');">
  <div class="container content-wrapper">
    <div class="columns">
      <div class="column is-7">
        <h3 class="py-2 italic-subtitle is-capitalized has-text-info-light">
          <?php echo $subtitle ?></h3>
        <h2 class="py-2" id="dark-h2">
          <?php echo $title ?></h2>
        <p class="py-2"><?php echo $content ?></p>
      </div>
      <div class="column is-5">

      </div>

    </div>
  </div>
</section>