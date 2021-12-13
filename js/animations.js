/**
 * File animations.js.
 *
 * Settings for Animate on Scroll (aos) and Mobile Menu.
 * https://github.com/michalsnik/aos/tree/v2
 */
(function ($) {
  $(function () {
    // Start of Popout Menu -------------------------
    $('#menu-bars').click(function () {
      $('.dimmed').fadeIn(200);
      $('#popout').css({
        '-webkit-transform': 'translateX(0)',
        transform: 'translateX(0)',
      });
    });

    // Detect click outside mobile menu
    $(document).mouseup(function (e) {
      var menu = $('.popout-menu');
      if (!menu.is(e.target) && menu.has(e.target).length === 0) {
        $('.dimmed').fadeOut(200);
        $('#popout').css({
          '-webkit-transform': 'translateX(100%)',
          transform: 'translateX(100%)',
        });
      }
    });

    $('#close-popout').click(function () {
      $('.dimmed').fadeOut(200);
      $('#popout').css({
        '-webkit-transform': 'translateX(100%)',
        transform: 'translateX(100%)',
      });
    });
    // End of Popout Menu -----------------------

    // Start of Animate on Scroll ---------------------
    // Animations added to elements without data-aos attribute in html element
    $('.intro p').attr({
      'data-aos': 'fade-zoom-in',
      'data-aos-easing': 'ease',
      'data-aos-offset': '0',
    });

    $('.accordion-header p, .accordion').removeAttr('data-aos');

    AOS.init({
      duration: 1300,
      once: false,
      mirror: true,
    });

    $(window).on('load', function () {
      AOS.refresh();
    });
    // End of Animate on Scroll ----------------------
  }); // end of doc ready
})(jQuery);
