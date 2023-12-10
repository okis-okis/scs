<?php
/*
 * Template Name: Страница поста
 * Template Post Type: post, page, product
*/

get_header();
?>

<div class="post__container">

      <div class="post">

        <div class="post-info">
            <div class="post-name">
              <h1 class="post-name__text"><?=the_title()?></h4>
            </div>
            <div class="post-author-date">
              <div class="post-author">
                <p class="post-author__text"><?=the_field('post-authors')?></p>
              </div>
              <div class="post-date">
                <p class="post-date__text"><?=get_the_date()?></p>
              </div>
            </div>
            <div class="post-tags">

              <?php $posttags = get_the_tags();
                if($posttags){
                  echo '<ul>';
                  foreach($posttags as $tag) {
                    echo '<li>'.$tag->name .'</li>';
                  }
                  echo '</ul>';
                }
              ?>

            </div>
        </div>

        <div class="post__content">
          <div class="post__content-image">
            <img src="<?=the_field('articles_image')?>" alt="Изображение к статье" class="post__content-image__image" loading="lazy">
          </div>

          <div class="post__content-text">
            <?=the_content()?>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>