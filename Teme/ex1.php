<?php
//Scrieti un script care sa afiseze output-ul: 
// '1-2-3-4-5-6-7-8-9-10'

for($i=1; $i <=10; $i++){
    if($i <= 9) {
        echo "$i-";
    } elseif($i > 9) {
        echo $i;
    }  
}  

?>
