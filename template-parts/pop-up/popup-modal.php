<?php

/**
 * Template part for displaying Popup Modal.
 *
 * @package White_Canvas_Design_Theme
 */
?>

<?php
// TODO: add variables
$pop_subtitle = get_field('pop_subtitle');
$pop_title = get_field('pop_title');
$pop_content = get_field('pop_content');
?>


<div class="modal" data-aos="fade-up">
  <div class="modal-background"></div>
  <div class="modal-card">
    <section class="modal-card-body p-6">
      <a class="modal-close is-shadowless"
        aria-label="Close Modal"><?php get_template_part('template-parts/icon/icon-close'); ?></a>
      <h3 data-aos="fade-right" class="italic-subtitle is-capitalized has-text-info-light">
        <?php echo $pop_subtitle ?>
      </h3>
      <h2 data-aos="fade-right" id="dark-h2"><?php echo $pop_title ?></h2>
      <p data-aos="fade-up" data-aos-delay="200" class="has-text-left px-4" data-aos="fade-left">
        <?php echo $pop_content ?></p>

    </section>
  </div>
</div>