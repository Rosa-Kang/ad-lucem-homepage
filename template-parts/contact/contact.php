<?php

/**
 * Template part for displaying the content inside Contact Page.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
$post_id = get_field('business_info_id', 'option');
$phone = get_field('tell', $post_id);
$email = get_field('email', $post_id);
$address = get_field('site_address_label', $post_id);
$address_link = get_field('site_address_link', $post_id);
$page_decoration = get_field('page_decoration', $post_id);

if ($page_decoration) {
  $deco_url = $page_decoration['url'];
  $deco_alt = $page_decoration['alt'];
}
?>
<section class="content-wrapper container">
  <div class="contact-info">
    <a href="tel:<?php echo $phone; ?>">
      <?php echo $phone; ?>
    </a>
    <a href="mailto:<?php echo $email; ?>" target="_blank" rel="noopener noreferrer"><?php echo $email; ?></a>
    <a href="<?= $address_link; ?>"><?php echo $address ?>
  </div>
  <div class="contact-form-contact-page">
    <?php echo do_shortcode($shortcode); ?>
  </div>
  <div class="graphic-contact-page">
    <img src="<?= $deco_url; ?>" alt="<?= $deco_alt; ?>">
  </div>
</section>