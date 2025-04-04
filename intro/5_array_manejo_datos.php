<?php
// Los Arrays se pueden usar de manera indexada o asociativa
$colores = ['rojo', 'verde', 'azul'];
echo $colores[0]; //Devuelve el primer elemento del array
//Otras operaciones
array_push($colores, 'amarillo'); //Agrega un elemento al final del array
array_pop($colores); //Elimina el último elemento del array
array_shift($colores); //Elimina el primer elemento del array
array_unshift($colores, 'naranja'); //Agrega un elemento al principio del array
var_dump($colores);//Mostrar el contenido del array
unset($colores[0]); //Elimina el primer elemento del array




//Crear un array asociativo 
$colores = array('rojo', 'verde', 'azul');
echo $colores[0]; //Devuelve el primer elemento del array
//Otras operaciones


$personas = ["nombre" => "Juan", "edad" => 25, "altura" => 1.75];
echo $personas["nombre"]; //Devuelve el valor del campo nombre

//Otras operaciones



?>