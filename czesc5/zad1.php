<?php

echo "zad 25<br>";
$text = "JAN KOWALSKI";
echo $text."<br>";
$text = strtolower($text);

$extext = explode( " ", $text);
print_r($extext);
echo "<br>";
$extext[0] =ucfirst($extext[0]);
$extext[1] = ucfirst($extext[1]);
$imtext = implode(" ",$extext );
print_r($imtext);

?>
