<?php
#Las fucnones permiten organizar tu código en bloques y reutilizarlo
$resultado=0;
function suma($a, $b) {

    return $a + $b;
}

$resultado = suma(10, 20);

echo "El resultado de la suma es: " . $resultado;


// También se pueden usar como un objeto
class Persona {
    public $nombre;
    public $edad;
    public $altura;
}

// Crear un objeto de la clase Persona
$juan = new Persona();
$juan->nombre = "Juan";
$juan->edad = 25;
$juan->altura = 1.75;

echo $juan->nombre; //Devuelve el valor del campo nombre


?>