<?php
//Configuración de la conexión a la base de datos
require_once '../config.php';
//Crear la conexión a la base de datos
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
//Si la conexión falla, mostrar un mensaje de error
if (!$conn) {
    echo "Error al conectar a la base de datos: " . pg_last_error();
    exit();
}
// Recibir los datos del formulario

$nombre = trim($_POST['nombre']);
$edad = trim($_POST['edad']);
$email = trim($_POST['email']);
$direccion = trim($_POST['direccion']);
$pais = trim($_POST['pais']);
$celular = trim($_POST['celular']);
$password = trim($_POST['password']);
$passwordConfirmation = trim($_POST['passwordConfirmation']);

//Validar los datos del formulario

$errores = [];

$datosViejos = [
    'nombre' => $nombre,
    'edad' => $edad,
    'email' => $email,
    'direccion' => $direccion,
    'pais' => $pais,
    'celular' => $celular,
    'password' => $password,
];


if (empty($nombre) || empty($edad) || empty($email) || empty($direccion) || empty($pais) || empty($celular)){
    $errores[] = "Todos los campos son obligatorios";
    
}
if ($password != $passwordConfirmation){ //Comprobar si las contraseñas coinciden
    $errores[] = "Las contraseñas no coinciden";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){//Validar el email
    $errores[] = "El email no es válido";
}
if (!preg_match('/^[0-9]{10}$/', $celular)){
    $errores[] = "El número de celular no es válido";
    
}

//Validar que el email no esté registrado en la base de datos
$query = "SELECT * FROM usuarios WHERE email = '$email'";
$result = pg_query($conn, $query);
if (pg_num_rows($result) > 0) {
    $errores[] = "El email ya está registrado";
}

if (!empty($errores)){
    $_SESSION['errores'] = $errores;
    $_SESSION['datosViejos'] = $datosViejos;
    header('Location: ../formulario/index.php');
    exit();
}


//Hashear la contraseña
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

//Insertar los datos en la base de datos
$query = "INSERT INTO usuarios (nombre, edad, email, direccion, pais, celular, password) 
            VALUES ('$nombre', '$edad', '$email', '$direccion', '$pais', '$celular', '$hashedPassword')";


//Ejecutar la consulta
$result = pg_query($conn, $query);


//Verificar si la consulta se ha ejecutado correctamente
if (!$result) {
    $_SESSION['errores'] = ["Error al insertar los datos: " . pg_last_error()];
    $_SESSION['datosViejos'] = $datosViejos;
    header('Location: ../formulario/index.php');
    exit();
}

//Cerramos la conexión a la base de datos
pg_close($conn);
//Mostrar un mensaje de éxito
$_SESSION['mensajeExito'] = "Datos insertados correctamente";
header('Location: ../formulario/index.php');
exit();

?>