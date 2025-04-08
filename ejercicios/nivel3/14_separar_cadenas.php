<html>
    <head>
        <title>Separar cadenas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Separar cadenas</h1>
        <form action="" method="post">   
            <?php
                $cadena = ["a, b, c, d, e, f, g, h, i, j"];

                $array = implode(", ", $cadena);
                echo "<h2>Array original: " . $array . "</h2>";

                //$array = array_map('trim', $array);
                //echo "<h2>Array con trim: " . implode(", ", $array) . "</h2>";
                //Convierte un string en un array

                $cadena2 = "Palabra1,Palabra2,Palabra3";
                $array2 = explode(",", $cadena2);
                echo "<h2>Arreglo:</h2>";
                print_r($array2);
                
                
            ?>
        </form> 
    </body>
</html>