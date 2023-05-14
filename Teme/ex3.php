<?php
// Scrieti un script care aduna toate numerele de la 0 la 30 si afisati rezultatul
// de forma:
// '0 + 1 +2 + .. + 30 = ....".
//Suma lui Gauss formula: S = n*(n+1) : 2

$numbers = range(0,30);
$total = 30 * (30+1) / 2;
foreach($numbers as $number) {
    echo $number;
    if($number < 30) {
        echo "+";
    } elseif($number == 30) {
        echo " = ". $total;
    }
    
}

