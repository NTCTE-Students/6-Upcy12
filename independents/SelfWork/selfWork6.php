<?php
// название копируемого файла
$file = 'text.txt';
// название файла в который копируются данные
$new_file_name = 'copied_file.txt';

$new_file = fopen($new_file_name,"w");
// получение данных из файла
$content = file_get_contents($file);

if (file_exists($new_file_name)){
    print("Файл с данным названием, уже существует!");
}else{
    // копирование данных в файл
    fwrite($new_file, $content);

    print("Файл успешно скопирован в файл $new_file_name");
}
fclose($new_file);