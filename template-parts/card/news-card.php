<?php

/**
 * Template part for displaying news-cards.
 *
 * @package White_Canvas_Design_Theme
 */
?>

<?php
// TODO: add variables
if (is_home()) {
  $page_id = get_queried_object_id();
  $subheadline = get_field('section_subheadline', $page_id);
  $headline = get_field('section_headline', $page_id);
}
?>

<section id="news-cards">
  <div class="container is-multiline content-wrapper ">
    <h3 data-aos="fade-up" class="italic-subtitle is-capitalized has-text-info-light">
      <?php echo $subheadline ?></h3>
    <h2 data-aos="fade-right" data-aos-duration="2000"><?php echo $headline ?></h2>
    <div class="is-flex is-flex-wrap-wrap is-justify-content-center">

      <?php if (have_rows('news_cards', $page_id)) :
        while (have_rows('news_cards', $page_id)) : the_row();
          $thumbnail = get_sub_field('ns_thumbnail');
          $url = $thumbnail['url'];
          $alt = $thumbnail['alt'];
          $ns_title = get_sub_field('ns_title');
          $ns_subheadline = get_sub_field('ns_subheadline');
          $ns_excerpt = get_sub_field('ns_excerpt');
          $ns_button_label = get_sub_field('ns_button_label');
          $ns_button_link = get_sub_field('ns_button_link');
      ?>

      <div data-aos="fade-up"
        class="column news-card-article is-5 is-full-mobile has-background-secondary m-4 text-overflow">
        <img width="110px" src="<?= $url; ?>" alt="<?= $alt; ?>">
        <h4 class="italic-subtitle is-capitalized"><?= $ns_subheadline; ?></h4>
        <h3 class="on-card is-capitalized mb-3"><?php echo $ns_title ?></h3>
        <p class="min-height-260"><?php echo $ns_excerpt; ?></p>
        <a class="is-uppercase" href="<?php echo $ns_button_link; ?>"><?php echo $ns_button_label; ?></a>
      </div>
      <?php
        endwhile;
      else :
        echo '<p data-aos="fade-up">No content found</p>';

      endif;
      ?>
      <div class="show-more has-text-centered my-6">
        <a data-aos="fade-up" href="#" class="news-article-show-more button is-primary my-6 is-uppercase">Show More</a>
      </div>
    </div>
  </div>
  <div data-aos="fade-left" data-aos-duration="2000" class="news-article-graphic">
    <?php get_template_part("template-parts/graphic/mountain"); ?>
  </div>
</section>