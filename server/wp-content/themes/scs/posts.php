<?php
/*
Template Name: Страница постов
*/

?>

<?php get_header(); ?>

<div class="posts__container">
        <p class="posts__container__title">Блоги</p>
        <div class="posts__container-posts">
          <div class="posts__container-posts-find">
            <div class="posts__container-posts-find-order">
              <button class="posts__container-posts-find-order-button">
                Сначала старые
              </button>
              <button class="posts__container-posts-find-order-button">
                Сначала новые
              </button>
              <button class="posts__container-posts-find-order-button">
                Сначала популярные
              </button>
              <div class="posts__container-posts-find-order-search-bar">
                <form action="">
                  <input type="search" name="search" placeholder="Поиск..." />
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form>
              </div>
            </div>
          </div>
          <div class="posts__container-posts-filter">
            <p>#Категории:</p>
            <ul>
              <li>Программирование</li>
              <li>Наука</li>
              <li>Электроника</li>
              <li>Нейросети</li>
              <li>Кибербезопасность</li>
              <li>Искусственный интеллект</li>
            </ul>
          </div>
          <div class="posts__container-posts-list">

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
  'posts_per_page' => 4,
  'category_name'  => 'articles',
  'paged'          => $paged,
  'orderby'        => 'none'
);

$query = new WP_Query($args);

while ($query->have_posts()) {
  $query->the_post();

  ?>
            <div class="posts__container-posts-list-post">
                <div class="posts__container-posts-list-post__image">
                <a href="<?=the_permalink() ?>"><img src=" <?=the_field('articles_image')?> " alt="Изображение" /></a>
                </div>
                <div class="post-info">
                  <div class="post-name">
                  <a href="<?=the_permalink() ?>"><h1 class="post-name__text"><?=the_title() ?></h4></a>
                  </div>
                  <p><?php the_excerpt(); ?></p>
                  <div class="post-author-date">
                    <div class="post-author">
                      <p class="post-author__text"><?=the_field('post-authors')?></p>
                    </div>
                    <div class="post-date">
                      <p class="post-date__text"><?=get_the_date() ?></p>
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
            </div>


  <?php
}

echo paginate_links( array(
  'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
  'total'        => $query->max_num_pages,
  'current'      => max( 1, get_query_var( 'paged' ) ),
  'format'       => '?paged=%#%',
  'show_all'     => false,
  'type'         => 'plain',
  'end_size'     => 2,
  'mid_size'     => 1,
  'prev_next'    => true,
  'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Posts', 'text-domain' ) ),
  'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Posts', 'text-domain' ) ),
  'add_args'     => false,
  'add_fragment' => '',
) );

wp_reset_postdata();
?>

          </div>
        </div>
      </div>

<?php get_footer(); ?>