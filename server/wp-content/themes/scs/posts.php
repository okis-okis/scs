<?php
/*
Template Name: Страница постов
*/

?>

<?php get_header(); ?>

      <div class="posts__container">

        <p class="posts__container__title">Блоги</p>
        <div class="posts__container__mobile_filter">
          <button class="posts__container__mobile_filter__button">
            <i class="fa fa-filter"></i>
          </button>
        </div>
        <div class="posts__container-posts">
          <div class="posts__container-posts-find">
            <div class="posts__container-posts-find-order">
              <a href="?order=asc" class="posts__container-posts-find-order-button">
                Сначала старые
              </a>
              <a href="?order=desc" class="posts__container-posts-find-order-button">
                Сначала новые
              </a>
              <div class="posts__container-posts-find-order-search-bar">
                <form action="">
                  <input type="search" name="search" placeholder="Поиск..." />
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form>
              </div>

              <div class="posts__container-posts-find-order-select">
                <select>
                  <option value="all">Все преподаватели</option>
                  <option value="Bizyanov">Бизянов Е.Е.</option>
                  <option value="Bakaev">Бакаев О.В.</option>
                  <option value="Pogorelov">Погорелов Р.Н.</option>
                  <option value="Fomin">Фомин А.И.</option>
                </select>
              </div>
            </div>
          </div>
          <div class="posts__container-posts-filter">
            <p>#Категории:</p>
            <div class="posts__container-posts-filter-tags">
              <a href="#">Программирование</a>
              <a href="#">Наука</a>
              <a href="#">Электроника</a>
              <a href="#">Нейросети</a>
              <a href="#">Кибербезопасность</a>
              <a href="#">Искусственный интиллект</a>
            </div>
          </div>
          <div class="posts__container-posts-list">

          <?php


$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
  'posts_per_page' => 4,
  'category_name'  => 'articles',
  'paged'          => $paged,
);

if ($_GET['order'] == 'asc') {
  $args['order'] = 'asc';
}
else if ($_GET['order'] == 'desc') {
  $args['order'] = 'desc';
}

$query = new WP_Query($args);

while ($query->have_posts()) {
  $query->the_post();

  ?>

            <div class="posts__container-posts-list-post">
                <div class="posts__container-posts-list-post__image">
                  <a href="<?=the_permalink() ?>"><img src="<?=the_field('articles_image')?>" alt="Изображение" /></a>
                </div>
                <div class="posts__container-posts-list-post-info">
                  <div class="posts__container-posts-list-post-info__name">
                    <h1 class="post-name__text"><a href="<?=the_permalink() ?>"><?=the_title() ?></a></h1>
                  </div>
                  <div class="posts__container-posts-list-post-info__author-date">
                    <div class="posts__container-posts-list-post-info__author-date__container">
                      <p class="posts__container-posts-list-post-info__author-date__container__text"><a href="#"><?=the_field('post-authors')?></a></p>
                    </div>
                    <div class="posts__container-posts-list-post-info__author-date__container">
                      <p class="posts__container-posts-list-post-info__author-date__container__text"><?=get_the_date() ?></p>
                    </div>
                  </div>
                  <div class="posts__container-posts-list-post-info__tags">
                    <ul>
                    <?php $posttags = get_the_tags();
                        if($posttags){
                          echo '<ul>';
                          foreach($posttags as $tag) {
                            echo '<li><a href=\'#\'>'.$tag->name .'<a/></li>';
                          }
                          echo '</ul>';
                        }
                      ?>
                    </ul>
                  </div>
                </div>
              
            </div>

            <?php
}
?>

<div class="pagination p1">

<?php 

echo paginate_links( array(
  'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
  'total'        => $query->max_num_pages,
  'current'      => max( 1, get_query_var( 'paged' ) ),
  'format'       => '?paged=%#%',
  'show_all'     => false,
  'type'         => 'list',
  'end_size'     => 2,
  'mid_size'     => 1,
  'prev_next'    => true,
  'prev_text'    => sprintf( '<li>%1$s</li>', __( '<', 'text-domain' ) ),
  'next_text'    => sprintf( '<li>%1$s</li>', __( '>', 'text-domain' ) ),
  'add_args'     => false,
  'add_fragment' => '',

));

wp_reset_postdata();
?>
</div>
          </div>
        </div>
      </div>

<?php get_footer(); ?>