<?php

require "consts.php"; //Importar las constantes
require_once "functions.php"; //Importar las funciones
require_once "classes/next_movie.php"; //Importar la clase

$next_movie = NextMovie::fecth_and_create_movie(API_URL);
$next_movie_data = $next_movie->get_data();

//$data = get_data(API_URL);
//$until_message = get_until_message($data["days_until"]);
?>

<!DOCTYPE html>
<html lang="es">
    <?php render_template('head', ["title"=>$next_movie_data["title"]]);?>
    <?php render_template('main',array_merge(
        $next_movie_data, 
        ["until_message" => $next_movie->get_until_message()]
    ));?>

    <?php render_template('styles');?>

<body>
</body>
</html>



