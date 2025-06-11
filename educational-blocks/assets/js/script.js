jQuery(document).ready(function($) {
    var scroll = $(window).scrollTop();
    var scrollup = $('.scroll-top');
    /*------------------------------------------------
              Scroll Top
    ------------------------------------------------*/
    scrollup.click(function () {
      $('html, body').animate({
        scrollTop: '0px'
      }, 800);
      return false;
    });
    $(window).scroll(function () {
      var scroll = $(window).scrollTop();
      if (scroll >= 200) {
        scrollup.fadeIn();
      } else {
        scrollup.fadeOut();
      }
    });

    /*------------------------------------------------
              Homepage slider
    ------------------------------------------------*/
    var educational_blocks_Slider = new Swiper(".educational-blocks-swiper", {
    slidesPerView: 1,
    speed: 1000,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".educational-blocks-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".educational-blocks-swiper-button-next",
      prevEl: ".educational-blocks-swiper-button-prev",
    },
  });

    /*------------------------------------------------
              Homepage Testimonial
    ------------------------------------------------*/
    var educational_blocks_testimonial_Slider = new Swiper(".educational-blocks-testimonial-swiper", {
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      600: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 3,
      },
      1100: {
        slidesPerView: 4,
      }
    },
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".educational-blocks-testimonial-pagination",
      clickable: true,
    },
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".educational-blocks-testimonial-swiper-button-next",
      prevEl: ".educational-blocks-testimonial-swiper-button-prev",
    },
  });

});
