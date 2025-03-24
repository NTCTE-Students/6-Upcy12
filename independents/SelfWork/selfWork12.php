<?php
// файл для логов
$file = 'log.txt';
// файл
$openedFile = fopen($file,"a");

// запись данных в файл
fwrite($openedFile, date("d.m.Y H:i") . " lorem ipsum\n");
    
fclose($openedFile);
