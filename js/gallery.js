/**
 * File: gallery.js
 *
 * Templates: testimonials-slider
 *
 * Slider (swiper.js)
 *
 */
(function ($) {
  $(function () {
    // Start of Testimonial Swiper --------------------
    var testimonialSwiper = new Swiper('.testimonialSwiper', {
      loop: true,
      slidesPerView: 1,
      navigation: {
        nextEl: '.testimonial-btn-next',
        prevEl: '.testimonial-btn-prev',
      },
    });
    // End of Testimonial Swiper ----------------------

    // Start of Our Clients Slider --------------------
    var clientSwiper = new Swiper('.clientSwiper', {
      loop: true,
      slidesPerView: 5,
      spaceBetween: 65,
      navigation: {
        nextEl: '.client-btn-next',
        prevEl: '.client-btn-prev',
      },
      breakpoints: {
        1024: {
          slidesPerView: 3,
          spaceBetween: 60,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 45,
        },
        414: {
          slidesPerView: 1,
        },
      },
    });
    // End of Our Clients Slider ------------------------
  }); // End of Doc Ready -------------------
})(jQuery);
