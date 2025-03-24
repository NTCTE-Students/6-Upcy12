<?php
// название файла
$file = 'text.txt';
// записываемые данные
$content = 'Hello, World!';

// функция проверки файла
if (file_exists($file)) {
    // запись данных в файл
    $result = file_put_contents($file, $content);
    // вывод сообщения
    if ($result !== false) {
        print("Данные успешно записаны в файл '{$file}'.");
    } else {
        print("Ошибка при записи в файл {$file}.");
    }
}else{
    print("Такого файла не существует!");
}