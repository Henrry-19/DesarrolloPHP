<?php

class Animal{

    private $nombre;
    private $edad;

    public function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getEdad(){
        return $this->edad;
    }
}

class Perro extends Animal{
    
    public function ladrar(){

        echo "Me llamo " . $this->getNombre() . " y tengo " . $this->getEdad() . " años";
    }
}

$perro = new Perro("Toby", 2);
$perro->ladrar();


?>