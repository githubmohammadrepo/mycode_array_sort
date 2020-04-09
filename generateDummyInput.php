<?php
$a=Array();
$inputCount = 100000;
$maxInputValue=1000;
for ($i=0; $i < $inputCount; $i++) { 
    $a[$i] = random_int(0,$maxInputValue);
}

print_r($a);