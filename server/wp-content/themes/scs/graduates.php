<?php
/*
Template Name: Выпускники кафедры
*/


?>

<?php get_header(); ?>
<div class="graduate__container">

  <h1 class="graduate__header"><?php the_title(); ?></h1>

  <?php

  $args = array(
    'category_name' => 'graduates',
  );

  // Запрос. $args - параметры запроса
  $query = new WP_Query($args);

  while ($query->have_posts()) {
    $query->the_post();
  ?>

    <div class="graduate-person">
          <div class="graduate-person__image">
            <img src="<?=the_field('image')?>" alt="Person" />
          </div>
          <div class="graduate-person-content">
            <p class="graduate--person-content-name"><?=the_title()?></p>
            <p class="graduate-person-content-group"><?=the_field('group')?></p>
            <p class="graduate-person-content-info">
            <?=the_field('description')?>
            </p>
            <p class="graduate-person-content-response">Отзыв о кафедре:</p>
            <p class="graduate-person-content-info"><?=the_field('feedback')?></p>
          </div>
        </div>


    <?php
  }
  wp_reset_query();

  ?>

</div>
<?php get_footer(); ?>