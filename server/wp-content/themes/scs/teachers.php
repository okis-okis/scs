<?php
/*
Template Name: Преподаватели кафедры
*/


?>

<?php get_header(); ?>

<div class="teacher__container">

  <h1 class="teacher__header"><?=the_title()?></h1>

  <?php
  $args = array(
    'category_name' => 'teachers',
  );
  $query = new WP_Query($args);

  while ($query->have_posts()) {
    $query->the_post();
    ?>

    <div class="teacher-person">
      <div class="teacher-person__image">
        <img src="<?=the_field('teacher-image')?>" alt="Person">
      </div>
      <div class="teacher-person-content">
        <p class="teacher--person-content-name">
          <a href="<?=the_permalink()?>" class="teacher-person-content-name__text">
            <?=the_field('teacher-name')?>
          </a>

        </p>
        <p class="teacher-person-content-tituls">
          <?=the_field('rank')?>
        </p>
        <p class="teacher-person-content-info">
        <?=the_content()?>
        </p>
      </div>
    </div>


    <?php
  }
  wp_reset_query();

  ?>








</div>
<?php get_footer(); ?>