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

add_theme_support('custom-logo');