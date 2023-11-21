<?php
/*
Template Name: Как поступить ?
*/
?>
<?php get_header(); ?>
<div class="container">
  <div class="question-container">
    <h2><?php the_title(); ?></h2>
    <h3>
      <?php the_field('section_1-title'); ?>
    </h3>
    <p>
      <?php the_field('section_1-body'); ?>
    </p>
    <h3>
      <?php the_field('section_2-title'); ?>
    </h3>
    <p>
      <?php the_field('section_2-body'); ?>
    </p>
    <h3>
      <?php the_field('section_3-title'); ?>
    </h3>
    <p>
      <?php the_field('section_3-body'); ?>
    </p>
  </div>
</div>
<?php get_footer(); ?>