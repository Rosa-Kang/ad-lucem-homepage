<?php

/**
 * Template part for displaying hero - top.
 *
 * @package White_Canvas_Design_Theme
 */

?>


<?php
$title = get_field('hero_headline');
$image = get_field('hero_image');
$subheadline = get_field('hero_subheadline');

if (is_home()) {
  $page_id = get_queried_object_id();
  $subheadline = get_field('hero_subheadline', $page_id);
  $title = get_field('hero_headline', $page_id);
  $image = get_field('hero_image', $page_id);
  $text = get_field('hero_text', $page_id);
}

if ($image) {
  $image_url = $image['url'];
  $image_alt = $image['alt'];
}
?>

<div class="fixed-header"></div>
<section data-aos="fade-in" data-aos-offset="300" data-aos-easing="ease-in-sine" class="hero bg-image"
  style="background-image: url('<?php echo $image_url; ?>');" role="img" aria-label="<?php echo $image_alt; ?>">
  <div class="hero-body pb-0 pt-6 content-wrapper">
    <div class="colum is-full-width" style="height:10vw;"></div>
    <div class="container">
      <div class="column py-6">
        <div class="text-container">
          <h3 data-aos="fade-right" data-aos-duration="1000" class="subheadline is-capitalized">
            <span><?php echo $subheadline; ?></span>
          </h3>
          <h1 data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500" class="my-3">
            <span><?php echo $title; ?></span>
          </h1>
        </div>
      </div>
      <div class="column is-5-desktop is-6-widescreen">
      </div>
    </div>
  </div>
</section><!-- .hero -->