<?php

$file = 'text.txt';


if (file_exists($file)) {
    $content = file_get_contents($file);

    print("<h1>$content</h1>");
} else {
    print("Не удалось найти файл.");
}