<?php
class Persona {
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function saludar() {
        echo "Hola, mi nombre es {$this->nombre} y tengo {$this->edad} años.";
    }


}

$persona = new Persona("Juan", 30);
echo $persona->saludar();
