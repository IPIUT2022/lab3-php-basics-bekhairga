<?php 
    foreach(file('data.txt') as $line) {
        $data = explode(" ", $line);
        echo "Key:".$key . "Value:". $data[1];
    } 
?> 