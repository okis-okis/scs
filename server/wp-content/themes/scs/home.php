<?php
/*
Template Name: Главная страница
*/

?>
<?php get_header(); ?>
<div class="container">

  <div class="banner">
    <img src="<?php echo wp_get_attachment_image_src(77, 'full')[0]; ?>" alt="Banner">
    <div class="advertisement">
      <p class="advertisement__text">
        <?php the_field('tagline') ?>
      </p>
      <a href="/kak-postupit" class="default-btn">Поступить</a>
    </div>
  </div>

  <div class="about-specialties">
    <p class="about-specialties__title">Хочешь начать карьеру в ИТ?</p>
    <div class="about-specialties-links">
      <a href="/o-napravlenii-podgotovki-10-05-03-informaczionnaya-bezopasnost/" class="about-specialties-links__link">
        <p>Кибербезопасность</p>
        <img src="<?php the_field('cybersecurity_img') ?>" alt="Направления" />
      </a>
      <a href="/o-napravlenii-podgotovki-09-03-01-informatika-i-vychislitelnaya-tehnika-profil-iskusstvennyj-intellekt-v-promyshlennosti/"
        class="about-specialties-links__link">
        <p>Искусственный интиллект</p>
        <img src="<?php the_field('ai_img') ?>" alt="Направления" />
      </a>
    </div>
  </div>


  <?php

  $args = array(
    'category_name' => 'articles',
    'posts_per_page' => 10,
  );

  // Запрос. $args - параметры запроса
  $query = new WP_Query($args);


  ?>

  <div class="slider-swiper">
    <div class="swiper swiper-container swiper-one">
      <div class="swiper-wrapper">

        <?php


        while ($query->have_posts()) {
          $query->the_post();

          ?>

          <div class="swiper-slide"><img src=" <?php the_field('articles_image') ?> ">
            <div class="slider-text__container">
              <p class="slider-text__main-text">
                <?php the_title(); ?>
              </p>
              <small class="slider-text__sub-text">
                <?php the_field('articles_author'); ?>
              </small>
            </div>
          </div>

          <?php
        }
        wp_reset_query();

        ?>

      </div>
      <div class="swiper-pagination-one"></div>
    </div>
    <div class="swiper-button-prev swiper-button-prev-one"></div>
    <div class="swiper-button-next swiper-button-next-one"></div>
  </div>





  <div class="about_department">
    <div class="about_department__content">
      <h1 class="about_department__header">О кафедре</h1>
      <p class="about_department__text">
        <?php the_field('About_department_text') ?>
      </p>
      <a href="/o-kafedre/" class="default-btn about_department__btn">Подбробнее</a>
    </div>
    <img src="<?php the_field('About_department_img') ?>" alt="Картинка ИСД" class="about_department__image">
  </div>


  <?php

  $args = array(
    'category_name' => 'graduates',
    'posts_per_page' => 10,
  );

  // Запрос. $args - параметры запроса
  $query = new WP_Query($args);


  ?>

  <div class="slider-swiper">
    <h1 class="graduate__header">Наши выпускники</h1>
    <div class="swiper swiper-container swiper-two">
      <div class="swiper-wrapper">

        <?php


        while ($query->have_posts()) {
          $query->the_post();

          ?>

          <div class="swiper-slide"><img src=" <?php the_field('image') ?> ">

            <div class="slider-text__container">
              <p class="slider-text__main-text">
                <?php the_title(); ?>
              </p>
            </div>
          </div>

          <?php
        }
        wp_reset_query();

        ?>

      </div>
      <div class="swiper-pagination-two"></div>
    </div>
    <div class="swiper-button-prev swiper-button-prev-two"></div>
    <div class="swiper-button-next swiper-button-next-two"></div>
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
        <?php the_field('find_us') ?>
      </p>
    </div>
  </div>
  <?php get_footer(); ?>