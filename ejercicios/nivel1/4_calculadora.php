
<?php 
$num1 = $_POST['num1'] ?? '';
$num2 = $_POST['num2'] ?? '';
$activo = $_POST['activo'] ?? '1';
$resultado = '';

//Detectar numero pressionado
foreach ($_POST as $key => $value) {
    if (strpos($key, 'numero') == 0) {
        $digito = substr($key, 6);
        if ($activo == '1') {
            $num1 .= $digito;
        }else{
            $num2 .= $digito;
        }
    }
}

//Cambiar input activo
if (isset($_POST['activo'])) {
    $activo = $activo == '1' ? '2' : '1';
}

//Borrar valor
if (isset($_POST['borrar'])) {
    if ($activo == '1') {
        $num1 = '';
    }else{
        $num2 = '';
    }
}

?>



<html>
    <head>
        <title>Calculadora</title>
    </head>
<body>
    <h1 style="text-align: center;">Calculadora</h1>
    <form method="post" action="">
        <div class="contenedor">
            <div class="ventana">
                <label for="num1">Numero 1:<label>
                    <input type="number" name="num1" id="num1" value="<?= $num1 ?>" disabled>
                    <br>
                    <label for="num2">Numero 2:<label>
                    <input type="number" name="num2" id="num2" value="<?= $num2 ?>" disabled>
            </div>

            <!-- Inputs ocultos para conservar valores -->
            <input type="hidden" name="num1" value="<?= $num1 ?>">
            <input type="hidden" name="num2" value="<?= $num2 ?>">
            <input type="hidden" name="activo" value="<?= $activo ?>">
            <br>
            <div class="botones">
                <button type="submit" name="sumar">Sumar</button>
                <button type="submit" name="restar">Restar</button>
                <button type="submit" name="multiplicar">Multiplicar</button>
                <button type="submit" name="dividir">Dividir</button>
            </div>
            <br>
            <div class="numeros">
                <?php for ($i = 1; $i <= 9; $i++): ?>
                    <button type="submit" name="numero<?= $i ?>"><?= $i ?></button>
                <?php endfor; ?>
                <button type="submit" name="numero0">0</button>
                <button type="submit" name="borrar">Borrar</button>
            </div>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $resultado = 0;


                if (isset($_POST["sumar"])) {
                    $resultado = $num1 + $num2;
                } elseif (isset($_POST["restar"])) {
                    $resultado = $num1 - $num2;
                } elseif (isset($_POST["multiplicar"])) {
                    $resultado = $num1 * $num2;
                } elseif (isset($_POST["dividir"])) {
                    $resultado = $num1 / $num2;
                }

                if ($resultado !== ''):
                    echo "<h2>El resultado de la operación es: $resultado</h2>";
                endif;
            }
            ?>

        </div>
    </form>
</body>

</html>