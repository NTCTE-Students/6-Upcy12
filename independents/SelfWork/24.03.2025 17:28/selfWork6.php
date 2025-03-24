<?php

$file = 'text.txt';

$new_file_name = 'copied_file.txt';

$new_file = fopen($new_file_name,"w");

$content = file_get_contents($file);

if (file_exists($new_file_name)){
    print("Файл с данным названием, уже существует!");
}else{
    fwrite($new_file, $content);

    print("Файл успешно скопирован в файл $new_file_name");
}
fclose($new_file);