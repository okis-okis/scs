<?php

// правильный способ подключить стили и скрипты
add_action('wp_enqueue_scripts', 'theme_name_scripts');
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts()
{
  wp_enqueue_style('style-name', get_stylesheet_uri());
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/index.js', array(), '1.0.0', true);
}

function show_post_content($atts)
{
  $atts = shortcode_atts(array(
    'id' => 0,
  ), $atts);

  $post = get_post($atts['id']);

  if (!$post) {
    return '';
  }

  return $post->post_content;
}

add_shortcode('show_post', 'show_post_content');
add_theme_support('custom-logo');

function custom_menu_page()
{
  add_menu_page(
    'Статьи',
    'Просмотр статей',
    'manage_options',
    'articles-menu-slug',
    'custom_menu_page_content',
    'dashicons-welcome-write-blog',
    6
  );

  // Добавляем подменю
  add_submenu_page(
    'articles-menu-slug',
    'Преподаватели',
    'Преподаватели',
    'manage_options',
    'submenu-1-slug',
    'submenu_1_page_content'
  );

  add_submenu_page(
    'articles-menu-slug',
    'Выпускники',
    'Выпускники',
    'manage_options',
    'submenu-2-slug',
    'submenu_2_page_content'
  );

}

function custom_menu_page_content()
{
  echo '<script>window.location.href = "/wp-admin/edit.php?s&post_status=all&post_type=post&action=-1&m=0&cat=10&filter_action=Фильтр&paged=1&action2=-1";</script>';
}

function submenu_1_page_content()
{
  echo '<script>window.location.href = "/wp-admin/edit.php?s&post_status=all&post_type=post&action=-1&m=0&cat=12&filter_action=Фильтр&paged=1&action2=-1";</script>';
}

function submenu_2_page_content()
{
  echo '<script>window.location.href = "/wp-admin/edit.php?s&post_status=all&post_type=post&action=-1&m=0&cat=11&filter_action=Фильтр&paged=1&action2=-1";</script>';
}



add_action('admin_menu', 'custom_menu_page');
