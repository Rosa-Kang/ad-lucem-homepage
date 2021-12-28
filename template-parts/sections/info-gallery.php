<?php

/**
 * Template part for displaying info-gallery.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
$subtitle = get_field('info_subtitle');
$title = get_field('info_title');
$graphic = get_field('info_graphic');

if ($graphic) {
  $graphic_url = $graphic['url'];
  $graphic_alt = $graphic['alt'];
}
?>
<section class="info-gallery">
  <div class="container content-wrapper">
    <div class="columns">
      <div class="column is-full-mobile is-7-desktop info-container">
        <h3 class="italic-subtitle is-capitalized has-text-info-light">
          <?php echo $subtitle ?></h3>
        <h2><?php echo $title ?></h2>
        <div class="columns is-flex-wrap-wrap is-justify-content-center p-2">
          <?php
          // Check rows exists.
          if (have_rows('info_content')) :
            // Loop through rows.
            while (have_rows('info_content')) : the_row();
              // Load sub field value.
              $gallery_title = get_sub_field('info_gallery_title');
              $gallery_paragraph = get_sub_field('info_gallery_description');
              $gallery_subtitle = get_sub_field('info_gallery_subtitle');
              $gallery_photo = get_sub_field('info_gallery_photo');
              if ($gallery_photo) {
                $logo_url = $gallery_photo['url'];
                $logo_alt = $gallery_photo['alt'];
              }
              // Do something...
          ?>
          <div class="column is-6">
            <img width="72px" src="<?= $logo_url ?>" alt="<?= $logo_alt ?>">
            <h3 class="titled is-capitalized mb-3"><?php echo $gallery_title; ?></h3>
            <h4><?= $gallery_subtitle; ?></h4>
            <p class="min-height-260"><?php echo $gallery_paragraph; ?></p>
          </div>
          <?php
            // End loop.
            endwhile;
          // No value.
          else :
          // Do something...
          endif; ?>
        </div>
        <div class="info-gallery-graphic column is-5">
          <img src="<?= $graphic_url; ?>" alt="<?= $graphic_alt; ?>">
        </div>
      </div>
      <!--info-container -->
    </div>
  </div>

</section>