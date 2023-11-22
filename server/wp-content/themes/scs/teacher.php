<?php
/*
 * Template Name: Страница преподавателя
 * Template Post Type: post, page, product
*/

get_header();
?>

<div class="post__container">

<div class="container">
        <div class="teacher-page-container">
          <div class="teacher-page-info">
            <div class="teacher-page-content">
              <div class="teacher-page-title">
                <div class="teacher-page-title-info">
                  <h2><?=the_field('teacher-name')?></h2>
                  <a href="/" class="default-btn teacher-page-title-button">Личный блог</a>
                </div>
                <p><?=the_field('rank')?></p>
              </div>
              <div class="teacher-page-subjects">
                <div class="teacher-page-img">
                  <img src="<?=the_field('teacher-image') ?>" alt="" />
                </div>
                <div class="teacher-page-about">
                  <div class="teacher-person-content-info">
                    <h3>Учебные дисциплины:</h3>
                    <?php 
                        $disciplines = get_field('academic-disciplines');
                        foreach ($disciplines as $discipline) {
                            echo '<il>'.$discipline.'</il><br>';
                        }
                    ?>
                    <h3>Научные направления:</h3>
                    <ul>
                    <?php 
                        $disciplines = get_field('scientific-directions');
                        foreach ($disciplines as $discipline) {
                            echo '<il>'.$discipline.'</il><br>';
                        }
                    ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="teachers-page-published">
          <?php
                $data = get_field('scientific-publications');
                $publications = explode('<br>', $data);
                if (count($publications) > 0) {
            ?>
            <h2>Научные публикации</h2>
            <ol>
                <?php foreach ($publications as $publication) {
                    echo '<li>'.$publication.'</li>';
                } ?>
            </ol>
            <?php }
                $data = get_field('educational-publications');
                $publications = explode('<br>', $data);
                if (count($publications) > 0) {
            ?>
            <h2>Учебные публикации</h2>
            <ol>
                <?php foreach ($publications as $publication) {
                    echo '<li>'.$publication.'</li>';
                } ?>
            </ol>
            <?php } ?>
          </div>
        </div>
      </div>

<?php get_footer(); ?>
