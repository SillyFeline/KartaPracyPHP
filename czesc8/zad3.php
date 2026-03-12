<?php 

$message = "Jest to tekst z wieloma enterami   no i tak   ez";

$result = explode('   ', $message);

for ($i = 0; $i < count($result); $i++){
    printf(" <p> $result[$i] </p>");
}

?>
