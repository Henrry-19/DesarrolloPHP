<?php
 $name="Henrry";
 $isDeve=true;
 $age=25;
 //Levantar entorno de desarrollo
 //php -S localhost:8000

echo gettype($name);
//var_dump($isDeve);
//var_dump($age);
 ?>

 <h1>
    <?= "Hola " . $name;?>
 </h1>
 
 <?php if($isDeve): ?>
     <h2>Estás en el desarrollo</h2>
 <?php endif; ?>
 <?php if($age < 18): ?>
     <h2>Menor de edad</h2>
 <?php else: ?>
     <h2>Estás viejo...jaja</h2>
 <?php endif; ?>