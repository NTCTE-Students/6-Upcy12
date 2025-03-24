<?php
// название файла
$file = 'text.txt';


if (file_exists($file)) {
    // получение данных в виде строки из файла
    $content = file_get_contents($file);
    // вывод данных
    print("<h1>$content</h1>");
} else {
    print("Не удалось найти файл.");
}