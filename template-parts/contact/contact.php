<?php

/**
 * Template part for displaying the content inside Contact Page.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
$contact_title = get_field('contact_title');
$contact_subtitle = get_field('contact_subtitle');
$shortcode = get_field('contact_form_shortcode');
$post_id = get_field('business_info_id', 'option');
$contact_info_title = get_field('contact_info_title', $post_id);
$phone = get_field('tell', $post_id);
$email = get_field('email', $post_id);
$address = get_field('site_address_label', $post_id);
$address_link = get_field('site_address_link', $post_id);
$page_decoration = get_field('page_decoration', $post_id);
$map = get_field('google_maps_embed_link', $post_id);

if ($page_decoration) {
  $deco_url = $page_decoration['url'];
  $deco_alt = $page_decoration['alt'];
}
?>
<section class="section-contact container">
  <div class="content-wrapper  columns">
    <div class="column is-6 contact-info">
      <h3 class="titled is-capitalized mb-4"><?= $contact_info_title; ?></h3>
      <p data-aos="fade-up-right">
        <a href="tel:<?php echo $phone; ?>">
          <?php get_template_part('template-parts/icon/icon-phone'); ?>
          <span class="ml-4"><?php echo $phone; ?></span>
        </a>
      </p>
      <p data-aos="fade-up-right">
        <a href="mailto:<?php echo $email; ?>" target="_blank" rel="noopener noreferrer">
          <?php get_template_part('template-parts/icon/icon-email'); ?>
          <span class="ml-4"><?php echo $email; ?></span>
        </a>
      </p>
      <p data-aos="fade-up-right">
        <a href="<?= $address_link; ?>">
          <?php get_template_part('template-parts/icon/icon-pin'); ?>
          <span class="ml-4 address"><?php echo $address ?></span>
        </a>
      </p>
      <div data-aos="zoom-in" data-aos-delay="400" data-aos-easing="ease-out-cubic" data-aos-duration="2000"
        class="graphic-contact-page">
        <img src="<?= $deco_url; ?>" alt="<?= $deco_alt; ?>">
      </div>
    </div>
    <div class="column is-6 contact-form-contact-page">
      <h2 class="subtitled is-capitalized"><?= $contact_subtitle; ?></h2>
      <h3 class="titled is-capitalized"><?= $contact_title; ?></h3>
      <div data-aos="fade-up"><?php echo do_shortcode($shortcode); ?></div>
    </div>
  </div>
</section>
<div class="map">
  <?= $map; ?>
</div>