<?php
$string3 = "poniedziałek.wtorek.środa";
$incorrectlyexplodedstring = explode(",", $string3);
print_r($incorrectlyexplodedstring);
// cały string przypisze się do jednego indeksu w tablicy
?>
