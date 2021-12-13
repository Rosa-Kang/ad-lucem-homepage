/**
 * File: custom.js
 *
 * Templates: All
 *
 */
(function ($) {
  $(function () {
    // Start of Auto Add Rel to External Links -------------------
    addTargetBlankToExternalLinks();

    function addTargetBlankToExternalLinks() {
      $('a[href^="http"]')
        .not('a[href*="' + location.hostname + '"]')
        .attr({ target: '_blank', rel: 'noopener noreferrer' });
    }

    // Open all pdfs in a new tab
    $('a[target!="_blank"][href$=".pdf"]').attr({
      target: '_blank',
      title: 'Opens in a new window',
      rel: 'noopener noreferrer',
    });
    // End of Auto Add Rel to External Links ----------------
  }); // End of Doc Ready -------------------

  //Accordion Repeater
  $('.accordion').addClass('my-5');
  $('.accordion-detail').css('display', 'none');
  $('.accordion-title').addClass('accordion-closed');
  $('.accordion-title').click(function () {
    if ($(this).next().is(':visible')) {
      $(this).next().slideUp();
      $(this).removeClass('accordion-opened');
      $(this).addClass('accordion-closed');
    } else {
      $('.accordion-detail').slideUp();
      $(this).removeClass('accordion-closed');
      $(this).next().slideDown();
      $(this).addClass('pb-2 accordion-opened');
      $('.accordion-title').not(this).removeClass('accordion-opened');
      $('.accordion-title').not(this).addClass('accordion-closed');
    }
  }); // End of Accordion Repeater -------------------

  // Start of Show More Button (Resources Page) -------------------
  $('.blog article').hide().slice(0, 4).show();

  $('.page-template-page-updates article').hide().slice(0, 3).show();

  $('#loadMore').click(function (e) {
    e.preventDefault();
    $('article:hidden').slice(0, 4).show();
    if ($('article:hidden').length === 0) {
      $('#loadMore').replaceWith('<p class="is-uppercase">no more</p>');
    }
  });

  $('.bulletins li').hide().slice(0, 4).show();

  $('.bulletins #loadMore').click(function (e) {
    e.preventDefault();
    $('.bulletins li:hidden').slice(0, 4).show();
    if ($('.bulletins li:hidden').length === 0) {
      $('#loadMore').replaceWith("<p class='text-btn'>no more</p>");
    }
  }); // End of Show More Button-------------------
})(jQuery);
