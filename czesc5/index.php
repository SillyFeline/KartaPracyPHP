<?php
//część 5 
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

echo "<br> zad 26 <br>";

$example = "kurs programowania w php";
print(ucwords($example));

echo "<br> Zad 27 <br>";

$text1 = "bardzo lubie php";
$text1 = ucfirst($text1);
print($text1);

echo "<br> Zad 28 <br>";

$text2 = "iPhon";
print(ucfirst($text2));

echo "<br> Zad 29 <br>";
 
$text3 = "GÓRĄ";
$lowtext = strtolower($text3);
echo "strtolower:"." ".$lowtext."<br>";
$lowtext1 = mb_strtolower($text3);
echo "mb_strtolower:". " ".$lowtext1."<br>";

?>