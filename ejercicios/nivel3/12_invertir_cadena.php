<html>
    <head>
        <title>Invertir cadena</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Invertir cadena</h1>
        <p>Introduce una cadena:</p>
        
        <form action="" method="post">
            <input type="text" name="cadena">
            <input type="submit" value="Enviar">
        </form>
        <?php
            $cadena = $_POST["cadena"];
            echo "<p>La cadena es: " . $cadena . "</p>";
            $cadena = strrev($cadena); //Invertir la cadena
            echo "<br>";
            echo "<p>La cadena invertida es: " . $cadena . "</p>";
        ?>
    </body>
</html>