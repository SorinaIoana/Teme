<?php 
//Un client al unei banci depunde initial la banca suma de 500 de euro cu o dobanda de 10%
// pe an. Sa se afiseze soldul pe fiecare an, daca lasa banii la banca 5 ani.

$s = 500;
$d = 10;
$timp = 5;
$procent = ($d / 100) * $s;
$firstYear = $procent + $s;
$yearTwo = $procent + $firstYear;
$yearThree = $procent + $yearTwo;
$yearFour = $procent + $yearThree;
function money($d, $s, $o){
    $p = ($d / 100) * $o;
    $year = $p + $o;
    return $year;
}
echo "Suma in primul an este de: ".money($d, $s, $s)." de euro.<br>";
echo "Suma in al doilea an este de: ". money($d, $s, $firstYear). " de euro.<br>";
echo "Suma in al treilea an este de: ". money($d, $s, $yearTwo). " de euro.<br>";
echo "Suma in al patrulea an este de: ". money($d, $s, $yearThree). " de euro.<br>";
echo "Suma in al cincilea an este de: ". money($d, $s, $yearFour). " de euro.<br>";



