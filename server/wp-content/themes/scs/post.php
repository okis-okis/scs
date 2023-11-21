<?php
/*
Template Name: Страница поста
*/

get_header();
?>

h1 class="graduate__header"><?php the_title(); ?></h1>




  <?php

  $args = array(
    'category_name' => 'graduates',
    'posts_per_page' => 10,
  );

  // Запрос. $args - параметры запроса
  $query = new WP_Query($args);


  ?>

  <?php


  while ($query->have_posts()) {
    $query->the_post();

    ?>

    <div class="graduate-person">
      <div class="graduate-person__image">
        <img src=" <?php the_field('image') ?> " alt="Person">
      </div>
      <div class="graduate-person-content">
        <p class="graduate--person-content-name">
          <a href="<?php the_permalink() ?>" class="graduate-person-content-name__text">
            <?php the_title(); ?>
          </a>

        </p>
        <p class="graduate-person-content-group">
          <?php the_field('group'); ?>
        </p>
        <p class="graduate-person-content-info">
        <?php the_content(); ?>
        </p>
      </div>
    </div>


    <?php
  }
  wp_reset_query();

  ?>


<?php get_footer(); ?>