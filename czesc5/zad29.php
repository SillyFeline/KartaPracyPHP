<?php

echo "<br> Zad 29 <br>";
 
$text3 = "GÓRĄ";
$lowtext = strtolower($text3);
echo "strtolower:"." ".$lowtext."<br>";
$lowtext1 = mb_strtolower($text3);
echo "mb_strtolower:". " ".$lowtext1."<br>";

?>