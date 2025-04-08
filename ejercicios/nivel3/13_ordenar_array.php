<html>
    <head>
        <title>Ordenar array</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Ordenar array</h1>
        <form action="" method="post">   
            <?php
                //echo "<h2>Array original: " . implode(", ", $array) . "</h2>";
                //sort($array); //Ordenar el array

                //Ordena un array de números sin sort()
                $array = [1, 4, 3, 2, 5, 6, 9, 8, 7, 10];
                for ($i = 0; $i < count($array); $i++) {
                        /*$aux = $array[$i]; // Guardar el valor actual
                        for ($j = $i + 1; $j < count($array); $j++) { // Recorrer el array
                                if ($aux > $array[$j]) { // Si el valor actual es mayor que el siguiente
                                        $array[$j] = $aux; // Guardar el valor actual en el siguiente
                                        $aux = $array[$i]; // Guardar el valor actual en el siguiente
                                        $array[$i] = $array[$j]; // Guardar el valor actual en el siguiente
                                        $array[$j] = $aux; // Guardar el valor actual en el siguiente
                                }   
                        }*/
                        $aux = $array[$i];
                        for ($j = $i + 1; $j < count($array); $j++) {
                                if ($aux > $array[$j]) {
                                        $array[$j] = $aux;
                                        $aux = $array[$i];
                                        $array[$i] = $array[$j];
                                        $array[$j] = $aux;
                                }
                        }
                        
                }
                //echo "<h2>Array ordenado: " . implode(", ", $array) . "</h2>";
            ?>
        </form> 
    </body>
</html>
