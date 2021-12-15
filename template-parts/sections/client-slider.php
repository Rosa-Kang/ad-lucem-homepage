<?php

/**
 * Template part for displaying the our clients slider.
 *
 * @package White_Canvas_Design_Theme
 */

?>

<?php
$post_id = get_field('business_info_id', 'option');
$title = get_field('clients_section_title', $post_id);
$subtitle = get_field('clients_section_subtitle', $post_id);

//Get our clients posts
$args = array(
  'post_type'       =>  'our_clients',
  'posts_per_page'  =>  '-1',
  'orderby'         =>  'rand',
);

$clients = get_posts($args);
?>
<section class="our-clients-slider pt-3">
  <div class="container content-wrapper has-text-centered ">
    <?php if ($title) : ?>
    <h3 data-aos="fade-down" class="italic-subtitle is-capitalized "><?php echo $subtitle; ?></h3>
    <h2 data-aos="fade-up"> <?php echo $title; ?> </h2>
    <?php endif; ?>
  </div><!-- .container -->

  <div data-aos="fade-down" data-aos-delay="400" data-aos-duration="2000" class="container content-wrapper pt-0 pb-6">
    <div class="mx-6">
      <div class="swiper-container clientSwiper">
        <ul class="swiper-wrapper list-style-none is-align-items-center">
          <?php
          foreach ($clients as $client) : setup_postdata($client);
            $client_logo = get_the_post_thumbnail($client->ID);
            $client_link = get_field('client_link', $client->ID);
            if ($client_link) :
              $link_url = $client_link['url'];
              $link_target = $client_link['target'] ? $client_link['target'] : '_blank';
            endif;
          ?>
          <li class="swiper-slide">
            <a href="<?php echo esc_url($link_url); ?>" target=" <?php echo esc_attr($link_target); ?>"
              rel="noreferrer noopener">

              <figure class="image mx-0 mb-0">
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