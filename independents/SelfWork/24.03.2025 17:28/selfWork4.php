<?php

$filename = 'text.txt';

$file = fopen("text.txt","r");

$count = 0;

if (file_exists($filename)) {
    while (($line = fgets($file)) !== false) {
        $count++;
    }
    print("В файле '$filename' всего: $count строчных отделений");
}else{
    print("Файла с именем '$filename' не существует!");
}

fclose($file);