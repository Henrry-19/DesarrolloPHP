<?php

class ContarInstancias{
    private static $contador = 0;


    public function __construct(){
        self::$contador++;
    }
        
    public static function getInstancias(){
        return self::$contador;
    }
}

//Crear instancias
$instancia1 = new ContarInstancias();
$instancia2 = new ContarInstancias();
$instancia3 = new ContarInstancias();


echo "Instancias: " . ContarInstancias::getInstancias() . "<br>";

?>


