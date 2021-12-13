<?php

/**
 * Template part for displaying sticky-background with image.
 *
 * @package White_Canvas_Design_Theme
 */
?>

<?php
$background = get_field('sticky_background');

if ($background) {
  $bg_url = $background['url'];
  $bg_alt = $background['alt'];
}
?>

<section class="sticky-background bg-image" style="background-image: url('<?php echo $bg_url; ?>')" role="img"
  aria-label="<?php echo $bg_alt; ?>
  ">

</section>