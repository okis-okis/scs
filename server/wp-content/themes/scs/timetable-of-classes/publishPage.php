<?php

// Путь к вашему HTML-файлу
$html_file_path = __DIR__ . '/output.html';

// Получение содержимого HTML-файла
$html_content = file_get_contents($html_file_path);

// ID вашего поста
$post_id = 101;


// Получаем существующий пост
$post = get_post($post_id);

// Проверяем, существует ли пост
if ($post) {
  // Обновляем контент
  $post->post_content = $html_content;

  // Вызываем функцию wp_update_post() для сохранения изменений
  wp_update_post($post);

  echo "Контент поста успешно обновлен.";
} else {
  echo "Пост с ID " . $post_id . " не найден.";
}