<?php

/**
 * Template part for displaying single posts.
 *
 * @package White_Canvas_Design_Theme
 */

?>

// TODO: Add hero, if needed
<?php
$date = get_the_date('F j, Y');
$content = get_post_field('post_content', $post->ID);
$word_count = str_word_count(strip_tags($content));
$readingtime = ceil($word_count / 200);
?>
<div class="fixed-header"></div>
<article id="post-<?php the_ID(); ?>" <?php post_class('pt-5'); ?>>
  <div class="container content-wrapper single-post">

    <div class="entry-meta">
      <h2 class="italic-subtitle has-text-info-light mb-3"><?php echo $date; ?></h2>
      <p class="is-uppercase post-minutes"><?= $readingtime; ?> Minute Read | By <?php the_author(); ?></p>
      <h1 class="mb-5 has-text-dark"><?php the_title(); ?></h1>
    </div>

    <div class="entry-content">
      <?php the_content(); ?>
    </div><!-- .entry-content -->

  </div>
</article><!-- #post-## -->