<?php

$file = fopen("table.csv","r");

// создание тега таблицы
print("<table>");
// запуск цикла для чтения таблицы
while(($data = fgetcsv($file, 17, ";")) !== false){
    // счетчик ячеек
    $num = count($data);
    // создание строчки
    print("<tr>");
    // запуск цикла чтения строчки таблицы
    for($i = 0; $i < $num; $i++){
        // создание ячейки
        print("<td>" . $data[$i] . "</td>");
    }
    print("</tr>");
    
}
print("<table>");

fclose($file);
