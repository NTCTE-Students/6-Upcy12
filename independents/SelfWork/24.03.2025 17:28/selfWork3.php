<?php

$file = 'text.txt';

$content = "\nШла Саша по шоссе и сосала сушку.";

if (file_exists($file)) {
    $result = file_put_contents($file, $content, FILE_APPEND);

    if ($result !== false) {
        print("Данные успешно добавлены в конец файла '{$file}'.");
    } else {
        print("Ошибка при добавлении данных, в конец файла {$file}.");
    }
}else {
    print("Такого файла не существует!");
}