<?php

/**
 * Template part for displaying Intro section.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
// TODO: add variables
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
<section class="intro <?php if ($background_color == 'dark') {
                        echo 'has-background-primary pb-31vw-desktop';
                      }; ?>">
  <div class=" container content-wrapper column is-6">
    <div class="has-text-centered">
      <h3 data-aos="fade-right" class="italic-subtitle is-capitalized has-text-info-light">
        <?php echo $intro_subheadline ?>
      </h3>
      <h2 data-aos="fade-right" id="dark-h2"><?php echo $intro_title ?></h2>
      <p data-aos="fade-left"><?php echo $intro_content ?></p>
      <a data-aos="fade-right" class="button is-uppercase is-primary" href="<?php echo $intro_button_link ?>">
        <?php echo $intro_button_label ?>
      </a>
    </div>
    <?php
    if ($intro_graphic) {
    ?>
    <div data-aos="fade-left" class="intro-graphic
    <?php if ($graphic_orientation == 'left') {
        echo 'left';
      } ?>
    ">
      <?php get_template_part('template-parts/graphic/mountain'); ?>
    </div>
    <?php }; ?>
  </div>

</section><!-- .intro -->