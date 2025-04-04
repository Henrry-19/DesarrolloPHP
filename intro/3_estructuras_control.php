<?php
#Estructuras de control
//1. If
//2. Switch
//3. While
//4. For
//5. Foreach

$a = 10;
$b = 20;

#Condicionales
if ($a > $b) {
    echo "El valor de a es mayor que el de b";
} else {
    echo "El valor de a es menor que el de b";
}

#Estructuras de control
#Switch

switch ($a) {
    case 10:
        echo "El valor de a es 10";
        break;
    case 20:
        echo "El valor de a es 20";
        break;
    default:
        echo "El valor de a no es 10 ni 20";
}

#Bucles
#While

while ($a < 30) {
    echo "El valor de a es menor que 30";
    $a++;
}

#Bucles

for ($i=0; $i<10; $i++) {
    echo "El valor de i es $i";
}

foreach ($estados as $estado) {
    echo "El valor de estado es $estado";
}

?>