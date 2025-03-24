<?php

$file = 'text.txt';

$content = file_get_contents($file);

$hidden_word = 'Саша';

$input_counter = 0;

if (file_exists($file)) {
    while ($pos !== false) {
        $pos = stripos($content, $hidden_word);
        $content = mb_substr($content,$pos+1, strlen($content));
        $input_counter ++;
    }
    $input_counter -=1;
    print("Количество вхождений: $input_counter.");
}else{
    print("Файла с именем '$file' не существует!");
}