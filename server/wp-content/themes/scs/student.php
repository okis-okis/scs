<?php
/*
 * Template Name: Страница студенту
 */

get_header();
?>

<div class="container">
  <div class="student-container">
    <h2>
      <?php the_title(); ?>
    </h2>
    <div class="student-container-content">
      <div class="student-container-content__practice">
        <h2>Практика</h2>
        <?php the_field('practice'); ?>
        <div class="student-container-content__practice__more">
          <a href="/specialties.html" class="student-container-content__practice__more__button">Подробнее</a>
        </div>
      </div>
      <div class="student-container-content__links">
        <p><span>Сегодня:</span> числитель числителя</p>
        <p><span>Неделя:</span> 1</p>
        <div class="student-container-content__links__blocks">
          <p>Расписание</p>
          <div class="student-container-content__links__blocks__btn">
            <a href="">Расписание 2023 - 1 семестр</a>
          </div>
        </div>

        <div class="student-container-content__links__info">
          <p>Полезные ссылки</p>
          <a href="https://dstu.education" class="student-container-content__links__info__btn">Сайт ДонГТУ</a>
          <a href="https://moodle.dstu.education" class="student-container-content__links__info__btn">Дистанционное
            обучение</a>
          <a href="https://library.dstu.education/" class="student-container-content__links__info__btn">Сайт
            библиотеки</a>
        </div>
      </div>
    </div>
    <div class="student-container-work">
      <div class="student-container-work-info">
        <div class="student-container-work-info__text">
          <h2>Трудоустройство</h2>
          <?php the_field('employment'); ?>
          <div class="student-container-work-btn-container">
            <a href="#" class="student-container-work-btn">Подробнее</a>
          </div>
        </div>
        <div class="student-container-work-info__img">
          <img src="<?php the_field('employment-img') ?>" alt="" />
        </div>
      </div>
    </div>
    <div class="student-container-corpuses">
      <p class="student-container-corpuses__title">Общежития</p>

      <?php
      $args = array(
        'category_name' => 'dorms',
      );
      $query = new WP_Query($args);

      while ($query->have_posts()) {
        $query->the_post();
        ?>

        <div class="student-container-corpuses-corpus">
          <img src="<?= the_field('image') ?>" alt="" />
          <div class="student-container-corpuses-corpus__info">
            <p class="student-container-corpuses-corpus__info__title">
              <?= the_title() ?>
            </p>
            <p>Адрес:
              <?= the_field('adress') ?>
            </p>
            <p>Телефон :
              <?= the_field('phone') ?>
            </p>
          </div>
        </div>



        <?php
      }
      wp_reset_query();

      ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>