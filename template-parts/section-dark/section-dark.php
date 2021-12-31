<?php

/**
 * Template part for displaying section-dark with image.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
// TODO: add variables
$sd_subheadline = get_field('sd_subheadline');
$sd_title = get_field('sd_headline');
$sd_content = get_field('sd_content');
$sd_button_link = get_field('sd_button_link');
$sd_button_label = get_field('sd_button');
$sd_graphic = get_field('sd_graphic');

if ($sd_graphic) {
  $url = $sd_graphic['url'];
  $alt = $sd_graphic['alt'];
}
?>
<section class="section-dark has-background-primary">
  <div class="container content-wrapper column is-6">
    <div class="has-text-centered">
      <h4 class="is-capitalized"><?php echo $sd_subheadline ?></h4>
      <h2 id="dark-h2"><?php echo $sd_title ?></h2>
      <p><?php echo $sd_content ?></p>
      <a class="button is-uppercase is-primary" href="<?php echo $sd_button_link ?>">
        <?php echo $sd_button_label ?>
      </a>
    </div>
    <div class="section-dark-graphic">
      <?php get_template_part('template-parts/graphic/mountain'); ?>
      <!-- <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"> -->
    </div>
  </div>

</section><!-- .section-dark -->