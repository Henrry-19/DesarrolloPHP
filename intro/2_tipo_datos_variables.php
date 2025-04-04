<?php
//Tipos de datos:
//1. Enteros:int
//2. Flotantes:float
//3. Cadenas: string
//4. Booleanos: bool
//5. Nulos: null
//6. Arrays: array
//7. Objetos: object

//Tipos de variables:
//Se definen con el símbolo $, seguido del nombre de la variable
$nombre = "Juan Pérez";
$edad = 25;
$altura = 1.75;
$es_estudiante = true;
$estados = array("Aguascalientes", "Baja California", "Sonora");
$persona = new stdClass();
$persona->nombre = "Juan";
$persona->edad = 25;
$persona->altura = 1.75;
$persona->es_estudiante = true;

//Operadores aritméticos, de comparación y lógicos
$a=10;
$b=20;
$suma = $a + $b;
$esIgual = $a == $b;
$menos = $a - $b;
$multiplicacion = $a * $b;
$division = $a / $b;
$resto = $a % $b;

echo "Resultado de la suma: " . $suma . "<br>";
echo "Resultado de la comparación: ". $esIgual . "<br>";
echo "Resultado de la resta: " . $menos . "<br>";
echo "Resultado de la multiplicación: " . $multiplicacion . "<br>";
echo "Resultado de la división: " . $division . "<br>";
echo "Resultado de la resta: " . $resto . "<br>";


?>