<html>
    <head>
        <title>Número primo</title>
    </head>
<body>
    <h1>Número primo</h1>
    <form method="post" action="">
        <label for="numero">Ingrese un número: </label>
        <input type="number" name="numero" id="numero">
        <br>
        <input type="submit" name="sumar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["numero"];
        $primo = true;
        for ($i = 2; $i <= $num / 2; $i++) {
            if ($num % $i == 0) {
                $primo = false;
                break;
            }
        }
        if ($primo) {
            echo "<h2>El número " . $num . " es primo</h2>";
        }else{
            echo "<h2>El número " . $num . " es primo</h2>";
        }   
    }
    ?>
</body>
</html>