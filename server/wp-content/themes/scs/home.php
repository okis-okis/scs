<?php
/*
Template Name: Главная страница
*/

?>
<?php get_header(); ?>
<div class="container">

<div class="banner">
  <img src="/images/main.png" alt="Banner">
  <div class="advertisement">
    <p class="advertisement__text">Хотите стать востребованным специалистом в области IT?</p>
    <a href="#" class="default-btn">Поступить</a>
  </div>
</div>

<div class="slider-swiper">
  <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="https://fireseo.ru/wp-content/uploads/2022/06/programming.jpeg">
        <div class="slider-text__container">
          <p class="slider-text__main-text">текст 1</p>
          <small class="slider-text__sub-text">дополнительный текст</small>
        </div>
      </div>
      <div class="swiper-slide">
        <img src="https://img.freepik.com/free-vector/neon-lights-background-theme_52683-44625.jpg?w=2000">
        <div class="slider-text__container">
          <p class="slider-text__main-text">текст 2</p>
          <small class="slider-text__sub-text">дополнительный текст</small>
        </div>
      </div>
      <div class="swiper-slide"><img src="https://png.pngtree.com/thumb_back/fh260/background/20200714/pngtree-modern-double-color-futuristic-neon-background-image_351866.jpg
            ">
        <div class="slider-text__container">
          <p class="slider-text__main-text">текст 3</p>
          <small class="slider-text__sub-text">дополнительный текст</small>
        </div>
      </div>
      <div class="swiper-slide"><img
          src="https://img.freepik.com/premium-vector/minimalist-shape-background_112769-210.jpg">
        <div class="slider-text__container">
          <p class="slider-text__main-text">текст 4</p>
          <small class="slider-text__sub-text">дополнительный текст</small>
        </div>

      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>

<div class="about_department">
  <div class="about_department__content">
    <h1 class="about_department__header">О кафедре</h1>
    <p class="about_department__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
      incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
      nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
      dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
      deserunt mollit anim id est laborum.</p>
    <a href="#" class="default-btn about_department__btn">Подбробнее</a>
  </div>
  <img src="images/sks-1.jpg" alt="Картинка ИСД" class="about_department__image">
</div>

<div class="slider-swiper">
  <h1 class="graduate__header">Наши выпускники</h1>
  <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="https://fireseo.ru/wp-content/uploads/2022/06/programming.jpeg">
        <div class="slider-text__container">
          <p class="slider-text__main-text">текст 1</p>
          <small class="slider-text__sub-text">дополнительный текст</small>
        </div>
      </div>
      <div class="swiper-slide">
        <img src="https://img.freepik.com/free-vector/neon-lights-background-theme_52683-44625.jpg?w=2000">
        <div class="slider-text__container">
          <p class="slider-text__main-text">текст 2</p>
          <small class="slider-text__sub-text">дополнительный текст</small>
        </div>
      </div>
      <div class="swiper-slide"><img src="https://png.pngtree.com/thumb_back/fh260/background/20200714/pngtree-modern-double-color-futuristic-neon-background-image_351866.jpg
            ">
        <div class="slider-text__container">
          <p class="slider-text__main-text">текст 3</p>
          <small class="slider-text__sub-text">дополнительный текст</small>
        </div>
      </div>
      <div class="swiper-slide"><img
          src="https://img.freepik.com/premium-vector/minimalist-shape-background_112769-210.jpg">
        <div class="slider-text__container">
          <p class="slider-text__main-text">текст 4</p>
          <small class="slider-text__sub-text">дополнительный текст</small>
        </div>

      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>
</div>

<div class="find-us__container">
<div class="find-us__map">
  <div>
    <iframe class="find-us__frame" src="https://yandex.ru/map-widget/v1/?ll=38.808138%2C48.467329&z=18.6"
      frameborder="0" allowfullscreen="true"></iframe>
  </div>
</div>
<div class="find-us__text">
  <h4 class="find-us__header">Как нас найти</h4>
  <p class="find-use__body">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
    est laborum.
  </p>
</div>
</div>
<?php get_footer(); ?>