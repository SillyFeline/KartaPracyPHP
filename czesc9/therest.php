<pre>
<?php
echo "zad.43<br>";
function noExtension($file){
    $file = explode(".",$file);
    $file[count($file) - 1] = "";
    $file = implode("",$file);
    return $file;
}
echo noExtension("index.php")."<br>";
echo "zad.44<br>";
function censore($word){
    for($i = 0; $i < strlen($word);$i++){
    $word = str_replace($word[$i],"*",$word);
    }
    return $word;
}
echo censore("kurwa").'<br>';
echo "zad.45<br>";
function isKluczThere($text){
    if(strlen($text) < 50){
        $klucz = str_contains($text, "klucz");
        if($klucz == true)
            return "tak";
        else
            return "nie";
    }
    else{
        $text[50] = "|";
        $text = explode("|", $text);
        $klucz = str_contains($text, "klucz");
        if($klucz == true)
            return "tak";
        else
            return "nie";
    }    
}
echo isKluczThere("niski klucz lubi być niski")."<br>"; 
echo "zad.46<br>";
echo "Ponieważ pierwszy index to 0, ale false to też 0 więc if() zczyta to pewnie jako false<br>";
echo "zad.47<br>";
function initials($text){
    $initials = "";
    $text = explode(" ", $text);
    for($i = 0; $i < count($text); $i++){
        $tmp = $text[$i];
        $initials = $initials.$tmp[0].".";
    }
    return $initials;
}
echo initials("Jan Kanty Sebastian Bach")."<br>";
echo "zad.48<br>";
function noLastCharacter($text){
    $text = substr($text,0,strlen($text) - 1);
    return $text;
}
echo noLastCharacter("abcd")."<br>";
echo "zad.50<br>";
function howManyA($sentence){
    $ilosc = 0;
    $sentence = strtolower($sentence);
    for($i = 0; $i < strlen($sentence); $i++){
        if($sentence[$i] == "a")
            $ilosc += 1;
    }
    return $ilosc;
}
echo howManyA("Ala  ma kota i aparat");
?>
</pre>
