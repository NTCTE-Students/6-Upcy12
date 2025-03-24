<?php

$fileName = 'selfWork13.json';

$fileContent = file_get_contents($fileName);
// данные из файла в переменную
$data = json_decode($fileContent, true);
// новые данные для записи
$newContent = [
    'id' => 1,
    'name' => 'Sasha',
    'description' => 'This is people!'
];

// проверка на существование файла
if (file_exists($fileName)) {
    print('Старые данные файла:<br>');
    // проверка на наличие данных
    if ($data != null) {
        // запуск цикла вывода данных
        for ($i = 0; $i < count($data); $i++) {
            foreach($data[$i] as $Data){
                print($Data . "<br>");
            }
        }
    }
    // ввод новых данных в переменную
    array_push($data, $newContent);

    print("<br>Новые данные: <br>");
    for ($i = 0; $i < count($data); $i++) {
        foreach($data[$i] as $Data){
            print($Data . "<br>");
        }
    }
}
// ввод новых измененных данных в файл
$newData = json_encode($data, JSON_PRETTY_PRINT);
file_put_contents($fileName, $newData);