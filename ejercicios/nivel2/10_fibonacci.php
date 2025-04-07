<html>
    <head>
        <title>Fibonacci</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1 style="text-align: center;">Fibonacci</h1>
        <form method="post" action="">
            <label for="numero">Ingrese un número: </label>
            <input type="number" name="numero" id="numero">
            <input type="submit" value="Calcular">

            <?php
            $fibonacci = 0;
            $fibonacci1 = 1;
            $fibonacci2 = 1;
            echo "<h2>" . $fibonacci . "</h2>";
            echo "<h2>" . $fibonacci1 . "</h2>";
            echo "<h2>" . $fibonacci2 . "</h2>";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num = $_POST["numero"];
                for ($i = 1; $i <= $num; $i++) {
                    $fibonacci = $fibonacci1 + $fibonacci2; //0 + 1 = 1
                    $fibonacci1 = $fibonacci2; // 1 + 1 = 2
                    $fibonacci2 = $fibonacci; // 1 + 2 = 3
                    echo "<h2>" . $fibonacci . "</h2>";

                }
            }
            ?>

        </form>
        
    </body>
</html>