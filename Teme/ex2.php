<?php
//Sa se afiseze toate numerele din urmatorul array care sunt divizibile cu 6.
$numere = array(6, 4, 15, 12, 36, 89, 45);
echo "Numerele divizibile cu 6 sunt: ";
foreach($numere as $numar) {
    if($numar%6 == 0) {
        $output[] = $numar;
    }
}
echo $output = implode(", ", $output).".";
echo "<br>";

?>
