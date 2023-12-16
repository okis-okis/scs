<?php

$post_id = 101;

$existing_post = get_post($post_id);

if ($existing_post !== null) {
  return;
}


// Массив данных для создания новой записи
$new_page_data = array(
  'ID' => $post_id,
  'post_title' => 'Расписание',
  'post_content' => 'Расписание отсутствует',
  'post_status' => 'publish',
  'post_author' => 1,
  'post_type' => 'page',
);

// Вставка новой записи
$new_page_id = wp_insert_post($new_page_data);

// Проверка на ошибки
if (is_wp_error($new_page_id)) {
  echo 'Ошибка при создании страницы: ' . $new_page_id->get_error_message();
}