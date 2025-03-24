<?php

$file = 'text.txt';

$content = 'Hello, World!';

if (file_exists($file)) {
    $result = file_put_contents($file, $content);

    if ($result !== false) {
        print("Данные успешно записаны в файл '{$file}'.");
    } else {
        print("Ошибка при записи в файл {$file}.");
    }
}else{
    print("Такого файла не существует!");
}