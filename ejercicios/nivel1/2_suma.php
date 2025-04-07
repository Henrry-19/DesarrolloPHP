<?php
$num1 = 2;
$num2 = 1;
$suma = $num1 + $num2;
echo "<h1> La suma de $num1 y $num2 es: $suma </h1>";
?>

<html>
    <head>
        <title> Suma </title>
    </head>
    <body>
        <h1> Suma </h1>
        <p> Ingrese dos numeros: </p>
        <form action="" method="post">
            <input type="number" name="num1" placeholder="Numero 1">
            <input type="number" name="num2" placeholder="Numero 2">
            <button type="submit">Sumar</button>
        </form>
        <?php
        function sumar() {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $suma = $num1 + $num2;

                echo "<h2> La suma de $num1 y $num2 es: $suma </h2>";
            } 
        }
        sumar();
        ?>
    </body>
</html>