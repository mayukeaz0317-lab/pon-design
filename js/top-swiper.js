document.addEventListener('DOMContentLoaded', () => {
  const slider = document.querySelector('.p-works__slider');

  if (!slider) return;

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
});