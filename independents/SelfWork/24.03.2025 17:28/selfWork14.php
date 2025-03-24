<?php

$dir = date('d.m.Y H:i');

mkdir($dir,0, true);

foreach (scandir('./') as $file) {
    copy($file, $dir . '/' . $file);
    print($file . ', ');
}