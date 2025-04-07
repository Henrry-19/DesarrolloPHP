<?php
$numero = 10;

if ($numero % 2 == 0) {
    echo "<h1>El número es par</h1>";
} else {
    echo "<h1>El número es impar</h1>";
}
?>

<html>
    <head>
        <title>Ejercicio 3 - Nivel 1</title>
    </head>
    <body>
        <h1>Ejercicio 3 - Nivel 1</h1>
        <p>Ingrese un número:</p>
        <form action = "" method = "post">
            <input type = "number" name = "numero" placeholder = "Número">
            <button type = "submit">Enviar</button>
        </form>
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];
            echo "<h1>El número ingresado es: $numero</h1>";
            if ($numero % 2 == 0) {
                echo "<h2>El número es par</h2>";
            } else {
                echo "<h2>El número es impar</h2>";
            }
        }
        ?>
    </body>
</html>