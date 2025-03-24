<?php
// название файла
$filename = 'text.txt';
// открытие файла
$file = fopen("text.txt","r");
// счетчик
$count = 0;
// проверка на существование файла
if (file_exists($filename)) {
    // запуск цикла подсчета строк
    while (($line = fgets($file)) !== false) {
        $count++;
    }
    print("В файле '$filename' всего: $count строчных отделений");
}else{
    print("Файла с именем '$filename' не существует!");
}
// закрытие файла
fclose($file);