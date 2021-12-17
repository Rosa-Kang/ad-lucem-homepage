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

    // Start of FAQ Accordion --------------------
    $('.schema-faq').addClass('accordion-pair my-5');
    $('.schema-faq-answer').css('display', 'none');
    $('.schema-faq-question').addClass('py-5 faq-closed');
    $('.schema-faq-question').click(function () {
      if ($(this).next().is(':visible')) {
        $(this).next().slideUp();
        $(this).removeClass('faq-opened');
        $(this).addClass('faq-closed');
      } else {
        $('.schema-faq-answer').slideUp();
        $(this).removeClass('faq-closed');
        $(this).next().slideDown();
        $(this).addClass('faq-opened');
        $('.schema-faq-question').not(this).removeClass('faq-opened');
        $('.schema-faq-question').not(this).addClass('faq-closed');
      }
    }); // End of FAQ Accordion ----------------

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
    }); //End of Show More

    // Start of Modals -----------------
    $('.modal').each(function (i) {
      var modalContainerId = $(this).attr('data-modal', 'modal-' + (i + 1));
    });

    $('.show-modal-btn').each(function (i) {
      var modalId = $(this).attr('id', 'modal-' + (i + 1));

      $(modalId).click(function () {
        $('[data-modal="' + $(this).attr('id') + '"]').addClass('is-active');
      });
    });

    // Close Modal
    $('.modal-close').click(function () {
      $('.modal').removeClass('is-active');
    });
    // End of Modals ----------------
  }); // End of Doc Ready -------------------
})(jQuery);
