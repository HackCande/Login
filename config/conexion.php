<?php
    // Datos del servidor para realizar la conexion a la BD...
    $host = "localhost";
    $usuario = "root";
    $password = "";
    $bd = "practica_login";

    // Se utiliza la funcion de mysqli_connect para poder realizar la conexion a la base de datos, para ello se necesita 4 parametros, las cuales son las variables que se crearon anteriormente, en donde se encuentra los datos del servidor, entre otros.
    $enlace = mysqli_connect($host, $usuario, $password, $bd);

    // Se comprueba si existe un error en la conexion a la BD, si es asi, se mostrara un error para poder corregirlo
    if(!$enlace) {
        echo "<br>Hay un error en la conexion a la base de datos, vuelva a intentarlo despues de que el Inge se tome su descanso =)<br>";
    }
?>