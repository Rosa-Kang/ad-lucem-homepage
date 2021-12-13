<?php

/**
 * Template part for displaying contact form.
 *
 * @package White_Canvas_Design_Theme
 */

?>



<?php
// TODO: add variables
$title = get_field('contact_title');
$shortcode = get_field('contact_form_shortcode');
$graphic = get_field('contact_graphic');

if ($graphic) {
  $graphic_url = $graphic['url'];
  $graphic_alt = $graphic['alt'];
}
?>
<section id="contact" class="contact-form wrapper py-6 px-5 has-background-dusk">
  <div class="container-sm pt-4 pb-6 has-text-centered">
    <h2 data-aos="fade-up" class="mb-4"><?php echo $title; ?></h2>
    <div data-aos="fade-up"><?php echo do_shortcode($shortcode); ?></div>
    <div class="form-graphic">
      <?php get_template_part('template-parts/graphic/peacock'); ?>
    </div>
  </div>
</section><!-- .contact-form -->