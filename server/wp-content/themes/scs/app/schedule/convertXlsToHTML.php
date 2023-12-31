<?php


require __DIR__ . '/../../../../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

function convertXlsToHTML()
{
    // Загрузка файла XLS
    $spreadsheet = IOFactory::load(__DIR__ . '/f.xls');

    // Save to HTML
    $writer = IOFactory::createWriter($spreadsheet, 'Html');
    $writer->save(__DIR__ . '/output.html');
    require __DIR__ . '/publishPage.php';
}



// Получаем данные из активного листа
// $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

// // Генерируем HTML с добавлением стилей
// $html = '<table>';
// foreach ($sheetData as $row) {
//     $html .= '<tr>';
//     foreach ($row as $cell) {
//         $html .= '<td>' . htmlspecialchars($cell) . '</td>';
//     }
//     $html .= '</tr>';
// }
// $html .= '</table>';

// // Выводим HTML
// echo $html;