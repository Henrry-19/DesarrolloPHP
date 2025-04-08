<?php

class Persona{
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

     public function saludar(){
         echo "Hola, soy " . $this->nombre . " y tengo " . $this->edad . " años";
     }

}

$persona = new Persona("Juan", 25);
$persona->saludar();

?>