<?php
//Calcular edad en base al año de nacimiento
$fecha_nacimiento = "2005-02-19";
$edad = date("Y") - date("Y", strtotime($fecha_nacimiento));
echo "La edad es: $edad años";

