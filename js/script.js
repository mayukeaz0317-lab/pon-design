$(function () {
  // ハンバーガーメニュー
  $('.js-btn-menu').on('click', function () {
    $(this).toggleClass('is-active');
    $('.p-header__nav-wrap').toggleClass('is-active');
  });
  if (document.querySelector('.p-works__slider')) {

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
  }

  // ヘッダースクロール後に背景画像出現
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

  // トップへ戻るボタン
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

/**
 * SNS Share URL生成
 * 実務では「URL生成責務」を
 * HTMLから分離するのが重要
 */

const SHARE_URL = {
  facebook: 'https://www.facebook.com/sharer/sharer.php',

  x: 'https://twitter.com/share',

  hatena: 'https://b.hatena.ne.jp/entry/',

  line: 'https://line.me/R/msg/text/',
};

/**
 * 現在ページ情報
 */
const currentUrl = encodeURIComponent(location.href);

const currentTitle = encodeURIComponent(document.title);

/**
 * SNS別URL生成
 */
function createShareUrl(type) {

  switch (type) {

    case 'facebook':
      return `${SHARE_URL.facebook}?u=${currentUrl}`;

    case 'x':
      return `${SHARE_URL.x}?url=${currentUrl}&text=${currentTitle}`;

    case 'hatena':
      return `${SHARE_URL.hatena}${currentUrl}`;

    case 'line':
      return `${SHARE_URL.line}?${currentTitle}%0A${currentUrl}`;

    default:
      return '#';
  }
}

/**
 * 各シェアリンクへURLセット
 */
document.querySelectorAll('.js-share').forEach((button) => {

  const type = button.dataset.share;

  button.href = createShareUrl(type);

});