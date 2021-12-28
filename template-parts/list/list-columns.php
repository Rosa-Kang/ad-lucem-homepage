<?php

/**
 * Template part for displaying section-list with image.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
// TODO: add variables
$list_subheadline = get_field('list_subheadline');
$list_title = get_field('list_title');

?>

<section class="section-list container content-wrapper">
  <h3 class="italic-subtitle has-text-info-dark is-capitalized">
    <?php echo $list_subheadline ?></h3>
  <h2><?php echo $list_title ?></h2>
  <div class="columns">
    <?php
    // Check rows exists.
    if (have_rows('list_content')) :
      // Loop through rows.
      while (have_rows('list_content')) : the_row();
        $list = get_sub_field('list_content_items');
    ?>
    <div class="column list-items">
      <?= $list; ?>
    </div>
    <?php
      endwhile;
    else :

    endif; ?>
  </div>
</section>