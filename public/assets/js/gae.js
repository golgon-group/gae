/*!
  * GAE v1.0.0
  * Copyright 2020
  * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
  */
!(function($) {
  "use strict";

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        if ($(this).attr("href") == '#mainNav') {
          $('html, body').animate({
            scrollTop: 0
          }, 1000, "easeInOutExpo");
          return false;
        }

        $('html, body').animate({
          scrollTop: (target.offset().top - 54)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    // offset: 56
    offset: 56
  });

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });

  $('.back-to-top').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

  $('.carousel').carousel({
    interval: 5000
  });

  $(document).ready(function() {
    var owl = $('.carousel-client');
    owl.owlCarousel({
      items: 1,
			center: true,
      loop: true,
      rewind: true,
      margin: 30,
			stagePadding: 0,
      autoHeight:true,
      autoplay: true,
      autoplayTimeout: 5000,
      responsive: {
        0: {
          items: 1,
        },
        480: {
          items: 2,
        },
        992: {
          items: 3,
        }
      },
      responsiveRefreshRate: 200,
      responsiveBaseElement: window,
      dots: false,
      nav: true,
      navText: ["<div class='nav-btn prev-slide'><span class='fas fa-chevron-left'></span></div>","<div class='nav-btn next-slide'><span class='fas fa-chevron-right'></span></div>"],
    });
  });
})(jQuery);

