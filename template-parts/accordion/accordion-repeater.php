<?php

/**
 * Template part for displaying accordion.
 *
 * @package White_Canvas_Design_Theme
 */
$subheadline = get_field('accordion_subheadline');
?>

<section class="accordion-section mb-6">
  <div class="container content-wrapper">
    <h3 data-aos="fade-right" data-aos-duration="1000" class="py-2 italic-subtitle is-capitalized has-text-info-light">
      <?php echo $subheadline ?></h3>
    <div class="accordion">
      <?php
      if (have_rows('accordion_repeater')) :
        while (have_rows('accordion_repeater')) : the_row();
          $header = get_sub_field('accordion_header');
          $content = get_sub_field('accordion_content');
          $button_label = get_sub_field('accordion_button_text');
          $link = get_sub_field('accordion_button_link');
      ?>
      <div class="accordion-pair" data-aos="fade-right">
        <h2 class="accordion-title titled is-capitalized has-text-info-dark accordion"><?php echo $header; ?></h2>
        <div class="accordion-detail">
          <p><?php echo $content; ?></p>
          <a href="<?= $link; ?>" class="button is-uppercase is-primary"><?= $button_label; ?></a>
        </div>
      </div>
      <?php
        endwhile;
      else :
        // no rows found
        echo 'Come back tomorrow';

      endif; ?>
    </div>
  </div>
</section>