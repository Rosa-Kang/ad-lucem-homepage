<?php

/**
 * Template part for displaying section-light with image.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
// TODO: add variables
$sl_subheadline = get_field('sl_subheadline');
$sl_title = get_field('sl_headline');
$sl_content = get_field('sl_content');
$sl_button_link = get_field('sl_button_link');
$sl_button_label = get_field('sl_button');
$sl_graphic = get_field('sl_graphic');
$sl_image = get_field('sl_image');

if ($sl_graphic) {
  $sl_url = $sl_graphic['url'];
  $sl_alt = $sl_graphic['alt'];
}

if ($sl_image) {
  $sl_img_url = $sl_image['url'];
  $sl_img_alt = $sl_image['alt'];
}

?>
<section id="about" class="section-light">
  <div class="container content-wrapper">
    <div class="columns">
      <div class="column is-7-desktop is-6-widescreen">
        <img src="<?php echo $sl_img_url; ?>" alt="<?php echo $sl_img_alt; ?>">
      </div>
      <div class="column is-5-desktop is-6-widescreen">
        <h4 class="is-capitalized"><?php echo $sl_subheadline ?></h4>
        <h2><?php echo $sl_title ?></h2>
        <p><?php echo $sl_content ?></p>
        <a class="button is-uppercase is-primary" href="<?php echo $sl_button_link ?>">
          <?php echo $sl_button_label ?>
        </a>
      </div>
    </div>
    <div class="section-light-graphic">
      <?php get_template_part('template-parts/graphic/mountain'); ?>
    </div>
  </div>
</section><!-- .section-light -->