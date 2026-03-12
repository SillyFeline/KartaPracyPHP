<?php

//zadanie 4.

echo "Zadanie 4 - Kod, który sprawdzi, czy hasło ma conajmniej 8 znaków." . "<br>" . "<br>";

$pass = "haselko123";

echo "Hasło zapisane w zmiennej to: " . $pass . "<br>" . "<br>";

    if(mb_strlen($pass) == 8){
        echo "Hasło ma conajmniej 8 znaków.";
    }
    else{
        echo "Hasło ma mniej niż 8 znaków.";
    }

?>
