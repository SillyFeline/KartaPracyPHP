<?php
//Zad. 13
$a = "Konstytucja";
$cancel = substr($a, 0, -3);
echo $cancel;
echo "<br>";

//Zad. 14
$b = "Data: 2024-05-10";
$cancel2 = str_replace("2024", "", $b);
echo $cancel2;
echo "<br>";

//Zad. 15
$resultat = substr("Hello World", -5);
echo $resultat;
//wtnik:"World"

//Zad. 16
strstr($email, '@');
//zwraca czesc stringa od pierwszego wystapienia '@' np. 
$email = "janek.kowalski@gmail.com";
echo strstr($email, "@");
//wynik:
//@gmail.com

//Zad. 17
$karta = "1234-5678";
$maska = substr_replace($karta, "XXXX", 5, 4);
echo $maska;

//Zad. 18
$email = "janek.kowalski@gmail.com";
echo strstr($email, "@", true);



?>