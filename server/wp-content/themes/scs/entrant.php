<?php
/*
Template Name: Абитуриенту
*/
?>
<?php get_header(); ?>
<div class="container">
  <div class="entrant-container">
    <h2><?php the_title(); ?></h2>
    <div class="entrant-container-content">
      <div class="entrant-container-content__about">
        <h2>
          <?php the_field('title') ?>
        </h2>
        <?php the_content(); ?>
      </div>
      <div class="entrant-container-content__links">
        <a href="/enterTo.html" class="entrant-btn">Как поступить?</a>
        <a href="/questions.html" class="entrant-btn">Часто задаваемые вопросы</a>
        <a href="/specialties.html" class="entrant-btn">О специальностях</a>
      </div>
    </div>
  </div>
  <div class="content-component"></div>
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