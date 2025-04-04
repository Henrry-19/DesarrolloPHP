<?php
session_start();
$errores = $_SESSION['errores']?? [];
$datosViejos = $_SESSION['datosViejos']?? [];
$mensajeExito = $_SESSION['mensajeExito']?? '';

unset($_SESSION['errores']);
unset($_SESSION['datosViejos']);
unset($_SESSION['mensajeExito']);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuario</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h1>Formulario de registro</h1>
    <?php if(!empty($errores)): ?>
        <div class="error-box">
            <ul>
                <?php foreach($errores as $error): ?>
                    <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if (!empty($mensajeExito)): ?>
    <div class="success-box" style="color: green; background: #e0ffe0; padding: 10px; margin-bottom: 15px;">
        <?= htmlspecialchars($mensajeExito) ?>
    </div>
    <?php endif; ?>


<form action="../intro/6_formulario.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?=htmlspecialchars($datosViejos['nombre']?? '')?>" required>
        <br>
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" value="<?=htmlspecialchars($datosViejos['edad']?? '')?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?=htmlspecialchars($datosViejos['email']?? '')?>" required>
        <br>
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" value="<?=htmlspecialchars($datosViejos['direccion']?? '')?>" required>
        <br>
        <label for="pais">País:</label>
        <input type="text" id="pais" name="pais" value="<?=htmlspecialchars($datosViejos['pais']?? '')?>" required>
        <br>
        <label for="celular">Celular:</label>
        <input type="tel" id="celular" name="celular" value="<?=htmlspecialchars($datosViejos['celular']?? '')?>" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" value="" required>
        <br>
        <label for="passwordConfirmation">Confirmación de contraseña:</label>
        <input type="password" id="passwordConfirmation" name="passwordConfirmation" value="" required>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
