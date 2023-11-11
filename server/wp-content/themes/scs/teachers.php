<?php
/*
Template Name: Преподаватели кафедры
*/


?>

<?php get_header(); ?>
<div class="teacher__container">

  <h1 class="teacher__header">Преподаватели кафедры СКС</h1>




  <?php

  $args = array(
    'category_name' => 'teachers',
    'posts_per_page' => 10,
  );

  // Запрос. $args - параметры запроса
  $query = new WP_Query($args);


  ?>

  <?php


  while ($query->have_posts()) {
    $query->the_post();

    ?>

    <div class="teacher-person">
      <div class="teacher-person__image">
        <img src=" <?php the_field('image') ?> " alt="Person">
      </div>
      <div class="teacher-person-content">
        <p class="teacher--person-content-name">
          <a href="<?php the_permalink() ?>" class="teacher-person-content-name__text">
            <?php the_title(); ?>
          </a>

        </p>
        <p class="teacher-person-content-tituls">
          <?php the_field('rank'); ?>
        </p>
        <p class="teacher-person-content-info">
        <?php the_content(); ?>
        </p>
      </div>
    </div>


    <?php
  }
  wp_reset_query();

  ?>








</div>
<?php get_footer(); ?>