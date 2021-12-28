<?php

/**
 * Template part for displaying section-list with image.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
// TODO: add variables
$lg_subtitle = get_field('lg_subtitle');
$lg_title = get_field('lg_title');
$lg_graphic = get_field('lg_graphic');

if ($lg_graphic) {
  $lg_url = $lg_graphic['url'];
  $lg_alt = $lg_graphic['alt'];
}
?>

<section class="section-list-graphic container content-wrapper">
  <div class="columns">
    <div class="column is-5-desktop">
      <h3 class="italic-subtitle has-text-info-light is-capitalized">
        <?php echo $lg_subtitle; ?></h3>
      <h2><?php echo $lg_title; ?></h2>
    </div>
    <div class="column is-7-desktop">
      <ul class="lg-items">
        <?php
        // Check rows exists.
        if (have_rows('lg_content')) :
          // Loop through rows.
          while (have_rows('lg_content')) : the_row();
            $list = get_sub_field('lg_content_item');
        ?>
        <li><?= $list; ?></li>
        <?php
          endwhile;
        else :

        endif; ?>
      </ul>
    </div>
  </div>
  <div data-aos="fade-right" class="lg-graphic <?php if ($lg_graphic) {
                                                  echo "";
                                                } else {
                                                  echo "mountain";
                                                } ?> ">
    <?php if ($lg_graphic) : ?>
    <img src="<?= $lg_url; ?>" alt="<? $lg_alt; ?>">
    <?php else : ?> <?php get_template_part("template-parts/graphic/mountain"); ?>
    <?php endif; ?>
  </div>

</section>