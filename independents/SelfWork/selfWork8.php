<?php
// имя файла со старым названием
$file_renamed = 'text.';
// имя файла с новым названием
$new_name = 'text.txt';

if (file_exists($new_name) === false) {
    // переименование файла
    rename($file_renamed, $new_name);
    print("Файл успешно переименован!");
}else{
    print("файл или папка с именем: $new_name, уже существует");
}