<?php

$fileName = 'selfWork13.json';

$fileContent = file_get_contents($fileName);

$data = json_decode($fileContent, true);

$newContent = [
    'id' => 1,
    'name' => 'Sasha',
    'description' => 'This is people!'
];

print('Старые данные файла:<br>');

if (file_exists($fileName)) {
    if ($data != null) {
        for ($i = 0; $i < count($data); $i++) {
            foreach($data[$i] as $Data){
                print($Data . "<br>");
            }
        }
    }
    array_push($data, $newContent);

    print("<br>Новые данные: <br>");
    for ($i = 0; $i < count($data); $i++) {
        foreach($data[$i] as $Data){
            print($Data . "<br>");
        }
    }
}

$newData = json_encode($data, JSON_PRETTY_PRINT);
file_put_contents($fileName, $newData);