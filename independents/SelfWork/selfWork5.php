<?php

$file = 'text.txt';
// получение данных
$content = file_get_contents($file);
// искомое слово
$hidden_word = 'Саша';
// счетчик вхождений
$input_counter = 0;

if (file_exists($file)) {
    // запуск цикла до ошибки при попытке найти слово в строке
    while ($pos !== false) {
        // поиск слова в строке
        $pos = stripos($content, $hidden_word);
        // удаление данных из строки до точки вхождения искомого слова
        $content = mb_substr($content,$pos+1, strlen($content));
        // подсчет вхождений
        $input_counter ++;
    }
    $input_counter -=1;
    print("Количество вхождений: $input_counter.");
}else{
    print("Файла с именем '$file' не существует!");
}