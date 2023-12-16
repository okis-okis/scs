<?php
include __DIR__ . '/convertXlsToHTML.php';


if (isset($_FILES['xls_file']) && $_FILES['xls_file']['error'] == 0) {
  $uploaded_file = $_FILES['xls_file'];


  $file_parts = explode('.', $uploaded_file['name']);
  $extension = end($file_parts);


  // Генерируем уникальное имя файла
  $target_file = __DIR__ . '/f.' . $extension;

  // Перемещаем файл в целевую папку
  if (move_uploaded_file($uploaded_file['tmp_name'], $target_file)) {


    convertXlsToHTML();
    echo 'Файл успешно загружен.';
  } else {
    echo 'Ошибка при загрузке файла.';
  }
} else {
  echo 'Ошибка при загрузке файла.';
}

exit;
