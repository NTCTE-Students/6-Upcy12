<?php

$file = 'log.txt';
print(date("d.m.Y H:i"));

$openedFile = fopen($file,"a");
    fwrite($openedFile, date("d.m.Y H:i") . " lorem ipsum\n");
    
    fclose($openedFile);
