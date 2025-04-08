<html>
    <head>
        <title>Frecuencia palabras</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Frecuencia palabras</h1>
        <form action="" method="post">   
            <?php
                $cadena = "Esto es una prueba, esto es importante";
                $cadena = strtolower($cadena); //Convertir a minúsculas
                $array = explode(" ", $cadena); //Separar cadena en palabras

                $frecuencia = array_count_values($array); //Obtener frecuencia de cada palabra
                print_r($frecuencia);
            ?>
        </form> 
    </body>
</html>