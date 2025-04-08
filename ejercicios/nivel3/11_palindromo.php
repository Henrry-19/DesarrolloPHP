<html>
    <head>
        <title>Palíndromo</title>
    </head>
    <body>
        <h1>Palíndromo</h1>
        <form method="post" action="">
            <label for="palindromo">Ingrese un palíndromo: </label>
            <input type="text" name="palindromo" id="palindromo">
            <input type="submit" name="sumar">

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $palabra = $_POST["palindromo"];
                $inv_palabra = strrev($palabra); //Invertir la cadena
                $palindromo = strtolower($inv_palabra); //Convertir a minúsculas
                
                if ($palindromo == $palabra) {
                    echo "<h2>Es un palíndromo</h2>";
                } else {
                    echo "<h2>No es un palíndromo</h2>";
                }
            }
            ?>

        </form>
    </body>
</html>