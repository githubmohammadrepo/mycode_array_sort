<?php

//require input
require_once('./input.php');


for ($i=0; $i < count($a); $i++) { 
    $min=$a[$i];
    $index;
    //find min number that does not pushed before
    for ($j=$i; $j < count($a); $j++) { 
        if($a[$j]<$min){
            $min =$a[$j];
            $index = $j;
        }
    }
    //subtitute i and min
    $sub=$a[$i];
    $a[$i] = $min;
    $a[$index] =$sub;
}

print_r($a);




//test artorithm
for ($i=0; $i < count($a); $i++) { 
    for ($j=0; $j < $i; $j++) { 
        if($a[$j]>$a[$i]){
            echo 'false';
            break;
        }
    }
}