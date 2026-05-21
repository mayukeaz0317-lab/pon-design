$(function () {
  $('.js-btn-menu').on('click', function () {
    $(this).toggleClass('is-active');
    $('.p-header__global-nav').toggleClass('is-active');
  });
  const worksSwiper = new Swiper('.p-works__slider', {

    loop: true,

    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
  $(function () {
    const $header = $('.l-header');
    const changePoint = 50;

    $(window).on('scroll', function () {
      if ($(this).scrollTop() > changePoint) {
        $header.addClass('is-scrolled');
      } else {
        $header.removeClass('is-scrolled');
      }
    });
  });
  $(function () {
    const $btnTop = $('.js-btn-top');
    const displayPoint = 300;

    $(window).on('scroll', function () {
      if ($(this).scrollTop() > displayPoint) {
        $btnTop.addClass('is-show');
      } else {
        $btnTop.removeClass('is-show');
      }
    });

    $btnTop.on('click', function () {
      $('body, html').animate({ scrollTop: 0 }, 500);
    });
  });

});