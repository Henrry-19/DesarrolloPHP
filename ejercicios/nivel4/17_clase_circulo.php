<?php

class Circulo {
    private $pi;
    private $radio;

    public function __construct($pi, $radio){
        $this->pi = $pi;
        $this->radio = $radio;

    }

    public function calcularArea(){
        $areaCirculo = $this->pi * $this->radio * $this->radio;
        return $areaCirculo;
       
    }
}
$circulo = new Circulo(3.1416, 5);
$circulo->calcularArea();
echo "<h2>El area del circulo es: " . $circulo->calcularArea() . " cm^2" ."</h2>";
?>