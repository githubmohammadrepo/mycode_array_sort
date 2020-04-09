<?php


//require input
require_once('./input.php');




//compute altorithm
for($i=1;$i<count($a);$i++){

    for($j=0;$j<$i;$j++){
        if($a[$i] <$a[$j]){
            //subtitute 
            $sub = $a[$j];
            $a[$j] = $a[$i];
            $a[$i] = $sub;
        }
    }
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