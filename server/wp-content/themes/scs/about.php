<?php
/*
Template Name: О кафедре
*/

get_header();
?>

<div class="about__container">
  <div class="about-header">
    <h1 class="about-header__text">О кафедре</h1>
  </div>

  <div class="about-content">
    <?php the_content(); ?>
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
      <?php the_field('find_us', 35) ?>
    </p>
  </div>
</div>

<?php get_footer(); ?>