<?php

/**
 * The home template file.
 *
 * @package White_Canvas_Design_Theme
 */

get_header(); ?>
<?php get_template_part('template-parts/hero/hero'); ?>
<?php get_template_part('template-parts/card/news-card'); ?>


<?php
// TODO: Add variables
$date = get_the_date('F j, Y');
$content = custom_excerpt(26);
?>

<section id="primary" class="container is-multiline content-wrapper is-flex is-justify-content-center">
  <div class="blog-article-wrapper">
    <h3 data-aos="fade-up" class="italic-subtitle is-capitalized has-text-info-light">
      In the news</h3>
    <h2 data-aos="fade-right">Our Blog</h2>
    <div class="is-flex is-flex-wrap-wrap is-justify-content-center">
      <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
      <article data-aos="fade-up" class="column is-5 has-background-secondary m-4 text-overflow blog-article">
        <h4 class="italic-subtitle is-capitalized"><?= $date; ?></h4>
        <h2 class="subtitle is-capitalized"><?php the_title(); ?></h2>
        <p><?php echo $content; ?></p>
        <a class="is-uppercase" href="<?php the_permalink($post_item['ID']) ?>">+ Read More</a>
      </article>
      <?php endwhile;
      else :
        echo '<p >No content found</p>';

      endif;

      ?>
      <?php get_template_part('template-parts/sections/button-show-more'); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>