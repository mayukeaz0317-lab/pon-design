$(function () {

  /**
   * =========================
   * Hamburger Menu
   * =========================
   */

  const $menuButton = $('.js-btn-menu');
  const $navWrap = $('.p-header__nav-wrap');
  const $navLinks = $('.p-header-nav__link');

  /**
   * メニューを開く
   */
  function openMenu() {

    // accessibility state
    $menuButton
      .attr('aria-expanded', 'true')
      .attr('aria-label', 'メニューを閉じる')
      .addClass('is-active');

    // body scroll lock
    $('body').addClass('is-menu-open');

    // hidden解除
    $navWrap.removeAttr('hidden');

    /**
     * hidden解除直後は
     * transitionが発火しない場合があるため
     * 次フレームでclass付与
     */
    requestAnimationFrame(() => {
      $navWrap.addClass('is-active');
    });

    // 最初のリンクへfocus
    $navLinks.first().trigger('focus');
  }

  /**
   * メニューを閉じる
   */
  function closeMenu() {

    // accessibility state
    $menuButton
      .attr('aria-expanded', 'false')
      .attr('aria-label', 'メニューを開く')
      .removeClass('is-active');

    // body scroll unlock
    $('body').removeClass('is-menu-open');

    // menu close animation
    $navWrap.removeClass('is-active');

    // menu buttonへfocus戻す
    $menuButton.trigger('focus');
  }

  /**
   * transition終了後にhidden付与
   * animation durationをJSに依存させない
   */
  $navWrap.on('transitionend', function () {

    if (!$navWrap.hasClass('is-active')) {
      $navWrap.attr('hidden', true);
    }

  });

  /**
   * Menu Toggle
   */
  $menuButton.on('click', function () {

    const isExpanded =
      $menuButton.attr('aria-expanded') === 'true';

    if (isExpanded) {
      closeMenu();
    } else {
      openMenu();
    }

  });

  /**
   * Esc keyで閉じる
   */
  $(document).on('keydown', function (e) {

    if (e.key !== 'Escape') return;

    const isExpanded =
      $menuButton.attr('aria-expanded') === 'true';

    if (!isExpanded) return;

    closeMenu();

  });

  /**
   * ナビリンク押下時に閉じる
   * ※ 同ページ遷移やSP UX向け
   */
  $navLinks.on('click', function () {

    closeMenu();

  });

  /**
   * =========================
   * Works Slider
   * =========================
   */

  if (document.querySelector('.p-works__slider')) {

    new Swiper('.p-works__slider', {

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

  /**
   * =========================
   * Header Scroll
   * =========================
   */

  const $header = $('.l-header');
  const headerChangePoint = 50;

  $(window).on('scroll', function () {

    if ($(this).scrollTop() > headerChangePoint) {
      $header.addClass('is-scrolled');
    } else {
      $header.removeClass('is-scrolled');
    }

  });

  /**
   * =========================
   * Back To Top
   * =========================
   */

  const $btnTop = $('.js-btn-top');
  const topButtonDisplayPoint = 300;

  $(window).on('scroll', function () {

    if ($(this).scrollTop() > topButtonDisplayPoint) {
      $btnTop.addClass('is-show');
    } else {
      $btnTop.removeClass('is-show');
    }

  });

  $btnTop.on('click', function () {

    window.scrollTo({
      top: 0,
      behavior: 'smooth',
    });

  });

});


/**
 * =========================
 * SNS Share
 * =========================
 */

(() => {

  /**
   * SNS Share URL
   */
  const SHARE_URL = {

    facebook:
      'https://www.facebook.com/sharer/sharer.php',

    x:
      'https://twitter.com/share',

    hatena:
      'https://b.hatena.ne.jp/entry/',

    line:
      'https://line.me/R/msg/text/',

  };

  /**
   * current page info
   */
  const currentUrl =
    encodeURIComponent(location.href);

  const currentTitle =
    encodeURIComponent(document.title);

  /**
   * share url create
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
   * share button initialize
   */
  function initShareButtons() {

    document
      .querySelectorAll('.js-share')
      .forEach((shareLink) => {

        const type = shareLink.dataset.share;

        shareLink.href = createShareUrl(type);

      });

  }

  initShareButtons();

})();