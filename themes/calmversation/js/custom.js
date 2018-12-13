(function ($) {
  $(function () {
    // slide menu
    let mobileMenu = $('#menu-slide');
    let mobileWidth = $('#page').width();
    let hamburger = $('#nav-icon');
    let subMenu = $('.sub-menu');

    console.log(mobileWidth);

    if ($('#site-navigation') && location.href.indexOf('#') != -1) {
      event.preventDefault();
      console.log('dog');
    }

    if (mobileWidth < 600) {
      subMenu.parent().click(function () {
        console.log('less than 600');
        subMenu.empty();
        event.preventDefault();

        subMenu.children().slideToggle('show');
        console.log('sliding yet?');
      }); // end of .sub-menu
    } else {}

    hamburger.on('click', function () {
      $(this).toggleClass('open');
      mobileMenu.toggleClass('menu-slide show');
    });

    $('a').click(function () {
      mobileMenu.removeClass('menu-slide show');
    });

    if (mobileWidth > 600) {
      $('.testimony-carousel').flickity({
        cellAlign: 'left',
        contain: true,
        wrapAround: true
        // prevNextButtons: false
        // autoPlay: 8000
      });
    } else {
      $('.testimony-carousel').flickity({
        cellAlign: 'left',
        contain: true,
        wrapAround: true,
        prevNextButtons: false
        // autoPlay: 8000
      });
    } //carousel testimony


<<<<<<< HEAD
    if (
      /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
        navigator.userAgent
      )
    ) {
      $('.main-carousel').flickity({
        cellAlign: 'left',
        contain: true,
        wrapAround: true
      }); //flickity for our-company & our-founder
    }

    //course-page readmore
    let extraText = $('.course-text-more');
    let readMore = $('.readmore .wp-block-button__link');

    readMore.click(function() {
      console.log('asdf');
      extraText.toggleClass('hide-text');
    });
=======

    $(window).resize(function () {
      if ($(window).width() < 600) {
        $('.main-carousel').flickity({
          cellAlign: 'left',
          contain: true,
          wrapAround: true
        });
      }
    }); //flickity for our-company & our-founder



>>>>>>> cfb883b596a284ac4217ab6d2c5aff58513eb29d
  }); // end of doc ready
})(jQuery);
