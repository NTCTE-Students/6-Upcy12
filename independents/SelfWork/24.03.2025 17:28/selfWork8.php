<?php

$file_renamed = 'text.';

$new_name = 'text.txt';

if (file_exists($new_name) === false) {
    rename($file_renamed, $new_name);
    print("Файл успешно переименован!");
}else{
    print("файл или папка с именем: $new_name, уже существует");
}