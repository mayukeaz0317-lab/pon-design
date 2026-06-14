jQuery(function ($) { // ⭕️ WordPress対策：安全に「$」を使うためのラッパー

  /**
   * =========================
   * Hamburger Menu
   * =========================
   */
  const $menuButton = $('.js-btn-menu');
  const $navWrap = $('.p-header__nav-wrap');
  const $navLinks = $('.p-header-nav__link');

  function openMenu() {
    $menuButton
      .attr('aria-expanded', 'true')
      .attr('aria-label', 'メニューを閉じる')
      .addClass('is-active');

    $('body').addClass('is-menu-open');
    $navWrap.addClass('is-active');
    $navLinks.first().trigger('focus');
  }

  function closeMenu() {
    $menuButton
      .attr('aria-expanded', 'false')
      .attr('aria-label', 'メニューを開く')
      .removeClass('is-active');

    $('body').removeClass('is-menu-open');
    $navWrap.removeClass('is-active');
    $menuButton.trigger('focus');
  }

  $menuButton.on('click', function () {
    const isExpanded = $menuButton.attr('aria-expanded') === 'true';
    if (isExpanded) {
      closeMenu();
    } else {
      openMenu();
    }
  });

  $(document).on('keydown', function (e) {
    if (e.key !== 'Escape') return;
    const isExpanded = $menuButton.attr('aria-expanded') === 'true';
    if (!isExpanded) return;
    closeMenu();
  });

  $navLinks.on('click', function () {
    closeMenu();
  });

  // Focus Trap
  $(document).on('keydown', function (e) {
    const isExpanded = $menuButton.attr('aria-expanded') === 'true';
    if (!isExpanded) return;
    if (e.key !== 'Tab') return;

    const focusableElements = [
      $menuButton.get(0),
      ...$navLinks.toArray(),
    ];

    const currentIndex = focusableElements.indexOf(document.activeElement);
    if (currentIndex === -1) return;

    e.preventDefault();
    let nextIndex;

    if (e.shiftKey) {
      nextIndex = currentIndex === 0 ? focusableElements.length - 1 : currentIndex - 1;
    } else {
      nextIndex = currentIndex === focusableElements.length - 1 ? 0 : currentIndex + 1;
    }

    focusableElements[nextIndex].focus();
  });

  /**
   * =========================
   * Works Slider
   * =========================
   */
  const $slider = $('.p-works__slider');
  if ($slider.length) { // ⭕️ 安全にSwiperを初期化
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

}); // ⭕️ jQuery(function ($) の閉じ


/**
 * =========================
 * SNS Share (※ここは非jQuery・独立した即時関数のためこのままでOK)
 * =========================
 */
(() => {
  const SHARE_URL = {
    facebook: 'https://www.facebook.com/sharer/sharer.php',
    x: 'https://twitter.com/share',
    hatena: 'https://b.hatena.ne.jp/entry/',
    line: 'https://line.me/R/msg/text/',
  };

  const currentUrl = encodeURIComponent(location.href);
  const currentTitle = encodeURIComponent(document.title);

  function createShareUrl(type) {
    switch (type) {
      case 'facebook': return `${SHARE_URL.facebook}?u=${currentUrl}`;
      case 'x': return `${SHARE_URL.x}?url=${currentUrl}&text=${currentTitle}`;
      case 'hatena': return `${SHARE_URL.hatena}${currentUrl}`;
      case 'line': return `${SHARE_URL.line}?${currentTitle}%0A${currentUrl}`;
      default: return '#';
    }
  }

  function initShareButtons() {
    document.querySelectorAll('.js-share').forEach((shareLink) => {
      const type = shareLink.dataset.share;
      shareLink.href = createShareUrl(type);
    });
  }

  initShareButtons();
})();