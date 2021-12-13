<?php
/**
 * Template part for displaying single posts.
 *
 * @package White_Canvas_Design_Theme
 */

?>

// TODO: Add hero, if needed
<?php 
$date = get_the_date( 'F j, Y' ); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'pt-5' ); ?>>
  <div class="container content-wrapper">
    <div class="container-sm">
      <div class="entry-meta has-text-centered">
        <p class="subtitle mb-3"><?php echo $date; ?></p>
        <h2 class="mb-5"><?php the_title(); ?></h2>
      </div>

      <div class="entry-content">
        <?php the_content(); ?>
      </div><!-- .entry-content -->
    </div>
  </div>
</article><!-- #post-## -->
