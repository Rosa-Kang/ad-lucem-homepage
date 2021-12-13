<?php

/**
 * The main template file.
 *
 * @package White_Canvas_Design_Theme
 */
get_header(); ?>

<?php get_template_part('template-parts/hero/hero'); ?>
<?php get_template_part('template-parts/intro/intro'); ?>
<?php get_template_part('template-parts/card/cards'); ?>
<?php get_template_part('template-parts/sections/section-left-right'); ?>
<?php get_template_part('template-parts/sections/client-slider'); ?>
<?php get_template_part('template-parts/callout/callout-bottom'); ?>
<?php get_template_part('template-parts/contact/contact-form'); ?>

<?php get_footer(); ?>