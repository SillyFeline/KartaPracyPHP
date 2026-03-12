<?php
$string4 = "poniedziałek,wtorek,środa,czwartek";
$limitedexplodedstring = explode(",", $string4, 3); // ograniczamy dodając maksymalną liczbę części na koniec
print_r($limitedexplodedstring);
// dwie części tekstu przypiszą się do jednego indeksu
?>
