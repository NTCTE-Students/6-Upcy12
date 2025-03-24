<?php

$dir = date('d.m.Y H:i');
// создание папки
mkdir($dir,0, true);
// запуск цикла сканирования текущей папки
foreach (scandir('./') as $file) {
    // копирование файлов из текущей в новую
    copy($file, $dir . '/' . $file);
    print($file . ', ');
}