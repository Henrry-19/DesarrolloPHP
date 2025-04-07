<html>
    <head>
        <title>Número mayor</title>
    </head>
<body>
    <h1>Número mayor</h1>
    <form method="post" action="">
        <label for="numero1">Ingrese el número 1: </label>
        <input type="number" name="numero1" id="numero1">
        <br>
        <label for="numero2">Ingrese el némero 2: </label>
        <input type="number" name="numero2" id="numero2">
        <br>
        <input type="submit" name="sumar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["numero1"];
        $num2 = $_POST["numero2"];
        $resultado = 0;

        if ($num1 > $num2){
            echo "<h2>El número mayor es: $num1</h2>";
        }else{
            echo "<h2>El número mayor es: $num2</h2>";
        }

    }
    ?>
</body>
</html>