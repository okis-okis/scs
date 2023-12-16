<?php

include get_template_directory() . '/timetable-of-classes/initSchedulePage.php';

function add_schedule_menu_item()
{
  add_menu_page(
    'Расписание',
    // Название пункта меню
    'Расписание',
    // Текст на панели управления
    'manage_options',
    // Роль пользователя, который может видеть этот пункт меню
    'schedule',
    // Уникальный идентификатор меню
    'schedule_menu_page',
    // Функция, вызываемая при клике на пункт меню
    'dashicons-welcome-learn-more',
    // Иконка меню (можно выбрать другую из https://developer.wordpress.org/resource/dashicons/)
    6 // Позиция меню (число)
  );
}

function schedule_menu_page()
{
  // Ваш код или содержимое страницы, связанной с этим пунктом меню

  include get_template_directory() . '/timetable-of-classes/schedule-page.php';

}

function process_xls_upload()
{
  include get_template_directory() . '/timetable-of-classes/scheduleHandler.php';
}

add_action('admin_post_process_xls_upload', 'process_xls_upload');
add_action('admin_menu', 'add_schedule_menu_item');

function enqueue_custom_script_for_admin_page()
{
  // Проверяем, является ли текущая страница страницей админки и имеет ли она нужный slug
  if (is_admin() && isset($_GET['page']) && $_GET['page'] == 'schedule') {
    // Подключаем ваш скрипт
    wp_enqueue_script('schedule-form', get_template_directory_uri() . '/assets/js/schedule-form.js', array(), null, true);
    // Локализация переменной ajaxurl для использования в скрипте
    wp_localize_script('schedule-form', 'wpAjax', array('ajaxurl' => admin_url('admin-post.php')));
  }
}

add_action('admin_enqueue_scripts', 'enqueue_custom_script_for_admin_page');





