<?php

// Путь к вашему HTML-файлу
$html_file_path = __DIR__ . '/output.html';

// Получение содержимого HTML-файла
$html_content = file_get_contents($html_file_path);

// Массив данных для создания новой записи
$new_page_data = array(
  'post_title' => 'Расписание',
  'post_content' => $html_content,
  'post_status' => 'publish',
  'post_type' => 'page',
);

// Вставка новой записи
$new_page_id = wp_insert_post($new_page_data);

// Проверка на ошибки
if (is_wp_error($new_page_id)) {
  echo 'Ошибка при создании страницы: ' . $new_page_id->get_error_message();
}