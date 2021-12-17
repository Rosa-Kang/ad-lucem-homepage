<?php

/**
 * Template part for displaying section-orientation.
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
$sl_bg_image = get_field('sl_bg_image');
$sl_orientation = get_field('sl_orientation');

if ($sl_graphic) {
  $sl_url = $sl_graphic['url'];
  $sl_alt = $sl_graphic['alt'];
}

if ($sl_image) {
  $sl_img_url = $sl_image['url'];
  $sl_img_alt = $sl_image['alt'];
}

if ($sl_bg_image) {
  $sl_bg_image_url = $sl_bg_image['url'];
  $sl_bg_image_alt = $sl_bg_image['alt'];
}
?>
<section id="orientation" style="background-image: url('<?php echo $sl_bg_image_url; ?>');"
  class="section-orientation <?php if ($sl_bg_image_url) {
                                                                                                                          echo 'bg-image';
                                                                                                                        } else {
                                                                                                                          echo '';
                                                                                                                        } ?> ">
  <div class="container content-wrapper">
    <div class="columns is-flex">

      <div class="column text-container <?php echo $sl_orientation; ?>">
        <h3 data-aos="fade-right" data-aos-duration="1000" class="italic-subtitle is-capitalized has-text-info-light">
          <?php echo $sl_subheadline ?></h3>
        <h2 data-aos="fade-right" data-aos-duration="2000"><?php echo $sl_title ?></h2>
        <p data-aos="fade-up" data-aos-delay="400" data-aos-offset="300" data-aos-easing="ease-in-sine">
          <?php echo $sl_content; ?></p>
        <?php if ($sl_button_label) { ?>
        <a data-aos="fade-right" class="is-uppercase <?php if ($sl_bg_image_url) {
                                                          echo 'card-anchor show-modal-btn';
                                                        } else {
                                                          echo 'button is-primary';
                                                        } ?> " href="<?php if ($sl_bg_image_url) {
                                                                        echo "#";
                                                                      } else {
                                                                        echo $sl_button_link;
                                                                      } ?>">
          <?php echo $sl_button_label ?>
        </a>
        <?php } ?>
      </div>
      <div class="column  image-container <?php if ($sl_orientation == 'left') {
                                            echo 'right';
                                          } else {
                                            echo 'left';
                                          } ?>" data-aos="fade-left" data-aos-delay="400" data-aos-duration="3000">
        <img src="<?php echo $sl_img_url; ?>" alt="<?php echo $sl_img_alt; ?>">
      </div>
    </div>
    <?php if ($sl_graphic) { ?>
    <div data-aos="fade-up" class="stl-graphic">
      <?php get_template_part('template-parts/graphic/mountain'); ?>
    </div>
    <?php } ?>
  </div>
</section><!-- .section-text-left -->