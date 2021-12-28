<?php

/**
 * The template for displaying the footer.
 *
 * @package White_Canvas_Design_Theme
 *
 */
?>

<?php
$post_id = get_field('business_info_id', 'option');
$logo = get_field('footer_logo', $post_id);
$email  = get_field('email', $post_id);
$tell  = get_field('tell', $post_id);
$site_icon = get_field('site_icon', $post_id);

if ($site_icon) {
  $site_url = $site_icon['url'];
  $site_alt = $site_icon['alt'];
}

if ($logo) {
  $logo_url = $logo['url'];
  $logo_alt = $logo['alt'];
}
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="footer-wrapper container content-wrapper">
    <div class="column is-2 footer-logo-wrapper">
      <img src="<?php echo $logo_url; ?>" alt="<?php echo $logo_alt; ?>">
    </div>
    <div class="column is-7">
      <div class="footer-contact-wrapper is-align-items-center is-flex is-flex-direction-column">
        <a href="mailto:<?php echo $email; ?>" class=" mb-0"><?php echo $email; ?></a>
        <div class="site-icon-phone mt-2 mb-0">
          <img class="maple-icon" src="<?= $site_url; ?>" alt="<?= $site_alt; ?>">
          <a href="tel:<?php echo $tell; ?>"><?php echo $tell; ?></a>
        </div>
        <?php get_template_part('template-parts/icon/icons-social'); ?>
      </div>
      <div class="copyright-wrapper has-text-center mt-4">
        <p class="footer-text is-capitalized"><a href="privacy-policy">Privacy
            Policy</a></p>
        <div class="copyright-text is-capitalized">
          <a href="">Copyright 2021 Ad Lucem Corporation</a>
          <p class="hide-on-mobile">|</p> <a href="https://whitecanvasdesign.ca" target="_blank"
            rel="noopener noreferrer">Website by White Canvas Design</a>
        </div>
        </p>
      </div>
    </div>
    <div class="column is-2 empty-space"></div>
  </div><!-- .footer-wrapper -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php get_template_part('template-parts/footer/footer-scripts'); ?>

</body>

</html>