<?php
/*
Template Name: Часто задаваемые вопросы
*/

get_header();
?>

<div class="container">
  <div class="question-container">
    <h2>
      <?php the_title(); ?>
    </h2>
    <?php the_content(); ?>
  </div>
</div>

<?php get_footer(); ?>