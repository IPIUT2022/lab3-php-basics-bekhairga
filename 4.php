<?php
    $number=array(1,2,3,4,5 );
    $inserted_element = "$";
    array_splice($number,3,0,$inserted_element);
    var_dump($number);