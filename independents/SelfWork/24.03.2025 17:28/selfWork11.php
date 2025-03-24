<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $uploadOk = 0;
    $targetDir = __DIR__ . '/loads/' . basename($_FILES['file']['name']);

    // Проверяем, является ли файл изображением
    $check = getimagesize($_FILES['file']['tmp_name']);
    if ($check !== false) {
        print("Файл является изображением - {$check['mime']}<br>");
        $uploadOk = 1;
    } else {
        print('Файл не является изображением.<br>');
        $uploadOk = 0;
    }

    if ($_FILES['file']['size'] > 2097152) {
        print('Файл слишком большой.<br>');
        $uploadOk = 0;
    }
    print($uploadOk);

    if ($uploadOk == 1) {
        if(move_uploaded_file($_FILES['file']['tmp_name'], $targetDir)){
            print('Файл успешно загружен');
        }else{
            print('Файл не загружен!');
        }
    }else{
        print('не удается загрузить файл!');
    }
}