<?php
//Contar vocales en una cadena
$cadena = "Hooola, e, muundo!";
$vocales = ['a', 'e', 'i', 'o', 'u'];
$contar_vocales = 0;
foreach ($vocales as $vocal) {
    $contar_vocales += substr_count($cadena, $vocal);
}
echo "La cadena tiene " . $contar_vocales . " vocales.";
echo "<br>";
?>
