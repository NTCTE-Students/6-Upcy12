<?php

$file = fopen("table.csv","r");

// while(($data = fgetcsv($file, 17, ";")) !== false){
//     $num = count($data);

//     for($i = 0; $i < $num; $i++){
//         print($data[$i]);
//     }
//     print("<br>");
// }

// print("<br><br>");

print("<table>");
while(($data = fgetcsv($file, 17, ";")) !== false){
    $num = count($data);
    
    print("<tr>");
    for($i = 0; $i < $num; $i++){
        print("<td>" . $data[$i] . "</td>");
    }
    print("</tr>");
    
}
print("<table>");

fclose($file);
