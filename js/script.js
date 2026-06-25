document.addEventListener('DOMContentLoaded', () => {
  /**
   * =========================
   * Hamburger Menu
   * =========================
   */
  const menuButton = document.querySelector('.js-btn-menu');
  const navWrap = document.querySelector('.p-header__nav-wrap');
  const navLinks = document.querySelectorAll('.p-header-nav__link');

  if (menuButton && navWrap) {
    const focusableElements = [menuButton, ...navLinks];

    function openMenu() {
      menuButton.setAttribute('aria-expanded', 'true');
      menuButton.setAttribute('aria-label', 'メニューを閉じる');
      menuButton.classList.add('is-active');

      document.body.classList.add('is-menu-open');
      navWrap.classList.add('is-active');

      if (navLinks.length > 0) {
        navLinks[0].focus();
      }
    }

    function closeMenu() {
      menuButton.setAttribute('aria-expanded', 'false');
      menuButton.setAttribute('aria-label', 'メニューを開く');
      menuButton.classList.remove('is-active');

      document.body.classList.remove('is-menu-open');
      navWrap.classList.remove('is-active');
      menuButton.focus();
    }

    menuButton.addEventListener('click', () => {
      const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
      isExpanded ? closeMenu() : openMenu();
    });

    navLinks.forEach((link) => {
      link.addEventListener('click', closeMenu);
    });

    document.addEventListener('keydown', (e) => {
      const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
      if (!isExpanded) return;

      // Escで閉じる
      if (e.key === 'Escape') {
        closeMenu();
        return;
      }

      // Focus Trap
      if (e.key !== 'Tab') return;

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
  }

  /**
   * =========================
   * Header Scroll
   * =========================
   */
  const header = document.querySelector('.l-header');
  const headerChangePoint = 50;

  if (header) {
    const toggleHeaderScrolled = () => {
      if (window.scrollY > headerChangePoint) {
        header.classList.add('is-scrolled');
      } else {
        header.classList.remove('is-scrolled');
      }
    };

    toggleHeaderScrolled();
    window.addEventListener('scroll', toggleHeaderScrolled, { passive: true });
  }

  /**
   * =========================
   * Back To Top
   * =========================
   */
  const btnTop = document.querySelector('.js-btn-top');
  const topButtonDisplayPoint = 300;

  if (btnTop) {
    const toggleBtnTop = () => {
      if (window.scrollY > topButtonDisplayPoint) {
        btnTop.classList.add('is-show');
      } else {
        btnTop.classList.remove('is-show');
      }
    };

    toggleBtnTop();
    window.addEventListener('scroll', toggleBtnTop, { passive: true });

    btnTop.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth',
      });
    });
  }

  /**
   * =========================
   * SNS Share
   * =========================
   */
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

  document.querySelectorAll('.js-share').forEach((shareLink) => {
    const type = shareLink.dataset.share;
    shareLink.href = createShareUrl(type);
  });
});