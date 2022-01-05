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

    //Header-Menu Arrow-Down on mouse-hover
    // $('#menu-item-360').children('a').addClass('menu-folded');
    // $('#menu-item-455').children('a').addClass('menu-folded');
    // $('#menu-item-360').hover(
    //   function () {
    //     $(this).children('a').removeClass('menu-folded');
    //     $(this).children('a').addClass('menu-unfolded');
    //   },
    //   function () {
    //     $(this).children('a').removeClass('menu-unfolded');
    //     $(this).children('a').addClass('menu-folded');
    //   }
    // );

    //--------end of Menu hover

    // Start of FAQ Accordion --------------------
    $('.schema-faq').addClass('accordion-pair my-5');
    $('.schema-faq-answer').css('display', 'none');
    $('.schema-faq-section').addClass('faq-closed');
    $('.schema-faq-question').addClass('py-5 faq-closed');
    $('.schema-faq-section').click(function () {
      if ($(this).children('p').is(':visible')) {
        $(this).children('p').slideUp();
        $(this).removeClass('faq-opened');
        $(this).addClass('faq-closed');
        $(this).children('strong').removeClass('faq-opened');
        $(this).children('strong').addClass('faq-closed');
      } else {
        $('.schema-faq-answer').slideUp();
        $(this).removeClass('faq-closed');
        $(this).children('p').slideDown();
        $(this).addClass('faq-opened');
        $('.schema-faq-question')
          .not(this)
          .children('strong')
          .removeClass('faq-opened');
        $('.schema-faq-question')
          .not(this)
          .children('strong')
          .addClass('faq-closed');
      }
    }); // End of FAQ Accordion ----------------

    // Start of Show More Button (Resources Page) -------------------
    $('.blog article').hide().slice(0, 4).show();

    $('.page-template-page-updates article').hide().slice(0, 3).show();

    $('#loadMore').click(function (e) {
      e.preventDefault();
      $('article:hidden').slice(0, 4).show();
      if ($('article:hidden').length === 0) {
        $('#loadMore').replaceWith(
          '<p data-aos="fade-up" class="button is-primary is-uppercase">no more</p>'
        );
      }
    });

    $('.bulletins li').hide().slice(0, 4).show();

    $('.bulletins #loadMore').click(function (e) {
      e.preventDefault();
      $('.bulletins li:hidden').slice(0, 4).show();
      if ($('.bulletins li:hidden').length === 0) {
        $('#loadMore').replaceWith('<p class="text-btn">no more</p>');
      }
    }); //End of Show More

    //News Article Show More Button

    $('#news-cards .news-card-article').hide().slice(0, 4).show();

    $('.news-article-show-more').click(function (e) {
      e.preventDefault();
      $('.news-card-article:hidden').slice(0, 4).show();
      if ($('.news-card-article:hidden').length === 0) {
        $('.news-article-show-more').replaceWith(
          '<p data-aos="fade-up" class="button is-primary is-uppercase my-6">no more</p>'
        );
      }
    }); //End of Article Show more

    // Start of Modals -----------------
    // $('.modal').each(function (i) {
    //   var modalContainerId = $(this).attr('data-modal', 'modal-' + (i + 1));
    // });

    $('.show-modal-btn').each(function (i) {
      var modalId = $(this).attr('id', 'modal-' + (i + 1));

      $(modalId).click(function () {
        $('[data-modal="' + $(this).attr('id') + '"]').addClass('is-active');
        $('.modal-first-div').addClass('modal-background');
      });
    });

    // Close Modal
    $('.modal-close').click(function () {
      $('.modal').removeClass('is-active');
      $('.modal-first-div').removeClass('modal-background');
    }); //End of Modals ----------------
  }); // End of Doc Ready -------------------
})(jQuery);
