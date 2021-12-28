<?php

/**
 * Template part for displaying Intro section.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
// TODO: add variables
$pb_extra = get_field('special_spacing');
$intro_subheadline = get_field('intro_subheadline');
$intro_title = get_field('intro_headline');
$intro_content = get_field('intro_content');
$intro_button_link = get_field('intro_button_link');
$intro_button_label = get_field('intro_button');
$intro_graphic = get_field('intro_graphic');
$background_color = get_field('bg_color');
$graphic_orientation = get_field('graphic_orientation');

if ($intro_graphic) {
  $url = $intro_graphic['url'];
  $alt = $intro_graphic['alt'];
}
?>
<section class="intro <?= $pb_extra; ?> <?php if ($background_color == 'dark') {
                                          echo 'has-background-primary';
                                        }; ?>">
  <div class=" container content-wrapper column is-8-widescreen is-7-desktop">
    <div class="has-text-centered mb-6">
      <h3 class="italic-subtitle is-capitalized has-text-info-light">
        <?php echo $intro_subheadline ?>
      </h3>
      <h2 id="dark-h2"><?php echo $intro_title ?></h2>
      <p class="has-text-left px-4">
        <?php echo $intro_content ?></p>
      <a data-aos="fade-right" class="button is-uppercase is-primary" href="<?php echo $intro_button_link ?>">
        <?php echo $intro_button_label ?>
      </a>
    </div>
    <div data-aos="fade-left" class="intro-graphic
    <?php if ($graphic_orientation == 'left') {
      echo 'left';
    } ?>
    ">
      <?php if ($intro_graphic) : ?>
      <img src="<?= $url; ?>" alt="<? $alt; ?>">
      <?php else : ?> <?php get_template_part("template-parts/graphic/mountain"); ?>
      <?php endif; ?>
    </div>
  </div>

</section><!-- .intro -->