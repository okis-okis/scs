
import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';



new Swiper(".swiper-one", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next-one",
    prevEl: ".swiper-button-prev-one",
  },
  pagination: {
    el: ".swiper-pagination-one",
  },
  mousewheel: true,
  keyboard: true,
  modules: [Navigation],
  breakpoints: {
    1024: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    }
  }
});
new Swiper(".swiper-two", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next-two",
    prevEl: ".swiper-button-prev-two",
  },
  pagination: {
    el: ".swiper-pagination-two",
  },
  mousewheel: true,
  keyboard: true,
  modules: [Navigation],
  breakpoints: {
    1024: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    }
  }
});