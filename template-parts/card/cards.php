<?php

/**
 * Template part for displaying cards.
 *
 * @package White_Canvas_Design_Theme
 */
?>

<?php
// TODO: add variables
$card_graphic = get_field('card_graphic');
$card_title = get_field('card_title');
$card_image = get_field('card_image');

if ($card_graphic) {
  $graphic_url = $card_graphic['url'];
  $graphic_alt = $card_graphic['alt'];
}

if ($card_image) {
  $card_url = $card_image['url'];
  $card_alt = $card_image['alt'];
}

?>
<section id="services" class="cards bg-image pb-extra-sm" style="background-image: url('<?php echo $card_url; ?>');">
  <div data-aos="fade-up" class="container content-wrapper has-text-centered">
    <div class="card-title">
      <div>
        <?php get_template_part('template-parts/graphic/circle'); ?>
      </div>
      <h2 class="italic-subtitle is-capitalized color-odd mb-6 has-text-info-light">
        <?php echo $card_title;  ?></h2>
    </div>
    <div class="columns is-justify-content-center">
      <?php
      // Check rows exists.
      if (have_rows('card_content')) :
        // Loop through rows.
        while (have_rows('card_content')) : the_row();
          // Load sub field value.
          $content_title = get_sub_field('content_title');
          $content_paragraph = get_sub_field('content_paragraph');
          $content_button = get_sub_field('content_button');
          $content_link = get_sub_field('content_btn_link');
          // Do something...
      ?>
      <div class="column is-4 has-background-secondary m-3 text-overflow">
        <h3 class="on-card is-capitalized mb-3"><?php echo $content_title; ?></h3>
        <p class="min-height-260"><?php echo $content_paragraph; ?></p>
        <a class="is-uppercase card-anchor" href="<?php echo $content_link; ?>"><?php echo $content_button; ?></a>
      </div>
      <?php
        // End loop.
        endwhile;
      // No value.
      else :
      // Do something...
      endif; ?>
    </div>
  </div>
</section><!-- .cards -->