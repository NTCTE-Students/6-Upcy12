<?php

$file_name = "copied_file.txt";

if (file_exists($file_name)) {
    unlink($file_name);
    print("Файл: $file_name, успешно удален!");
}else{
    print("Файла с именем: $file_name, не существует!");
}