<?php

$fileName = 'text.txt';
// слово для замены
$wordOnReplace = 'Sasha';
// заменяемое слово
$replacedWord = 'Саша';
// переменная для новых данных
$newContent = '';

if (file_exists($fileName)) {
    // получение данных
    $content = file_get_contents($fileName);
    // запись измененных данных в переменную
    $new_content = str_replace($replacedWord, $wordOnReplace, $content);
    // открытие файла
    $data = fopen($fileName,'w');
    // замена старых данных на новые
    fwrite($data, $new_content);

    print("Слово $replacedWord, успешно было изменено на $wordOnReplace, в файле $fileName");
}else{
    print('Такого файла не существует!');
}