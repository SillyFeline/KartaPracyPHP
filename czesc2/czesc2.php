<?php 

//5
echo "zad 5<br>";
print("stripos nie bierze pod uwage wielkości znaków w przeciwiństwie do strpos");
echo "<br>";

//6
echo "zad 6<br>";
print("zwróci pierwsze wystąpienie 'a', czyli 0");
echo "<br>";

//7
echo "zad 7<br>";
echo "aby rozróżnić pozycje 0 od braku szukanego znaku <br>";

//8
echo "zad 8<br>";
print(strrpos("zdjecie.wakacje.jpg", "."));
echo "<br>";

//9
echo "zad 9<br>";
$url = "https://github.com";
if(str_contains($url, "https")){
    echo "podany url zawiera 'https'";
}
else {
    echo "podany url nie zawiera 'https'";
}
echo "<br>";


//10
echo "zad 10<br>";
if(str_contains("marekmarucha@gmail.com", "@")){
    echo "adres zawiera znak @";
}
echo "<br>";

//11
echo "zad 11<br>";
echo "Do sprawdzenia czy plik konczy sie rozczerzeniem .pdf jest potrzebny str_ends_with: <br>";
if(str_ends_with("abc.pdf", ".pdf")){
    echo "plik konczy sie na .pdf";
}
echo "<br>";

//12
echo "zad 12<br>";
print(strpos("programowanie", "z"));
echo "Funkcja niczego nie zwróci";
?> 