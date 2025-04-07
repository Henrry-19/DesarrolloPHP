<!DOCTYPE html>
<html>
<head>
<title>Tabla de multiplicación</title>
</head>
<body>
    <div>
        <h1>Tabla de multiplicación</h1>
        <form method="get" action="">
            <label for="numero">Ingrese un número: </label>
            <input type="number" name="numero" id="numero">
            <button type="submit">Enviar</button>
            <br>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                $num = $_GET["numero"];
                for ($i = 1; $i <= 20; $i++) {
                    echo "<h2> $i x $num = " . ($i * $num) . "</h2>";
                }
            }
            ?>
        </form> 
        
    </div>
</body>
</html>