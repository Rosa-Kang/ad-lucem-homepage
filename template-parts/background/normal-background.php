<?php

/**
 * Template part for displaying normal-background with image.
 *
 * @package White_Canvas_Design_Theme
 */
?>

<?php
$background = get_field('normal_background');

if ($background) {
  $norm_url = $background['url'];
  $norm_alt = $background['alt'];
}
?>

<section class="normal-background bg-image" style="background-image: url('<?php echo $norm_url; ?>')" role="img"
  aria-label="<?php echo $norm_alt; ?>
  ">

</section>