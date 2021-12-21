<?php

/**
 * Template for Top-Bar
 */
?>
<?php
$post_id = get_field('business_info_id', 'option');
$email  = get_field('email', $post_id);
$tell  = get_field('tell', $post_id);
$site_icon = get_field('site_icon', $post_id);

if ($site_icon) {
  $site_url = $site_icon['url'];
  $site_alt = $site_icon['alt'];
}
?>
<div class="top-bar">
  <div class="is-flex top-bar-inner container content-wrapper py-0">
    <div class="column top-bar-left is-flex is-flex-direction-row is-align-items-center px-0">
      <img class="maple-icon" src="<?= $site_url; ?>" alt="<?= $site_alt; ?>" width="22.54" height="24.76">
      <a class="top-bar-text px-3" href="tel:<?php echo $tell; ?>"><?php echo $tell; ?></a>
      <a class="top-bar-text" href="mailto:<?php echo $email; ?>" class="footer-text"><?php echo $email; ?></a>
    </div>
    <div class="column top-bar-right is-flex is-flex-direction-row is-align-items-center px-0">
      <a class="top-bar-text" href="/faq">FAQ</a>
      <?php get_template_part('template-parts/icon/icons-social'); ?>
    </div>
  </div>
</div>