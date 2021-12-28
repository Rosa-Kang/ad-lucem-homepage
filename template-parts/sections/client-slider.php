<?php

/**
 * Template part for displaying the our clients slider.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
$post_id = get_field('business_info_id', 'option');
$title = get_field('cs_title');
$subtitle = get_field('cs_subtitle');

//Get our clients posts
$args = array(
  'post_type'       =>  'our_clients',
  'posts_per_page'  =>  '-1',
  'orderby'         =>  'rand',
);

$clients = get_posts($args);
?>
<section class="our-clients-slider" data-aos="fade-up">
  <div class="has-text-centered ">
    <?php if ($title) : ?>
    <h3 class="italic-subtitle is-capitalized has-text-info-light">
      <?php echo $subtitle; ?></h3>
    <h2 class="mb-0"> <?php echo $title; ?> </h2>
    <?php endif; ?>
  </div><!-- .container -->

  <div class="container content-wrapper px-0">
    <div class="mx-6">
      <div class="swiper-container clientSwiper">
        <ul class="swiper-wrapper list-style-none is-align-items-center">
          <?php
          foreach ($clients as $client) : setup_postdata($client);
            $client_logo = get_the_post_thumbnail($client->ID);
            $client_link = get_field('client_link', $client->ID);
            // if ($client_link) :
            //   $link_url = $client_link['url'];
            //   $link_target = $client_link['target'] ? $client_link['target'] : '_blank';
            // endif;
          ?>
          <li class="swiper-slide">
            <a href="<?= $client_link; ?>" rel="noreferrer noopener">

              <figure class="image m-0">
                <?php echo $client_logo; ?>
              </figure>
            </a>
          </li>
          <?php endforeach;
          wp_reset_postdata(); ?>
        </ul><!-- .swiper-wrapper -->
      </div><!-- .swiper-container -->
    </div>
    <div class="swiper-button-next client-btn-next"></div>
    <div class=" swiper-button-prev client-btn-prev"></div>
  </div><!-- .container -->
</section><!-- .our-clients-slider -->