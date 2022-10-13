<?php
    // Se importa el archivo de conexion.php, en donde se encuentra la conexion a la BD...
    require_once "conexion.php";

    // Se crean una variable en donde se almacenara el nombre del usuario.
    $user = $_POST["user"];

    // Se crea una consulta, en la cual se comprobara si existe un usuario que se ingreso en el formulario.
    $sqlrows = "SELECT * FROM usuarios WHERE usuario = '".$user."'";
    $sqlrow = mysqli_query($enlace, $sqlrows);
    // Se realiza la consulta SQL, en la cual se comprobara si existe el usuario, o si existe mas de un usuario con el mismo nombre.
    $rows = mysqli_num_rows($sqlrow);

    // Se crea la consulta para eliminar un usuario de la BD...
    $sql = "DELETE FROM usuarios WHERE usuario =  '".$user."'";

    // Se comprueba que existe  un solo usuario en la BD...
    if($rows == 1) {
        // Si solo hay un usuario se ejecuta la consulta en donde se procedera a eliminarlo de la BD.
        $rspta = mysqli_query($enlace, $sql);

        // Se comprueba que no halla error en la consulta.
        if($rspta) {
            echo "Se elimino el usuario, asi que ya vas progresando... Sigue asi";
        
        // Si existe un error en la consulta se mostrara el nombre del error para asi proceder a solucionarlo.
        } else {
            $message = "Hubo un error al tratar de realizar la consulta SQL<br>";
            
            // Se ejecutan las funciones para mostrar los errores que puedan surgir.
            $hostmessage = error_get_last();
            $dbmessage = mysqli_errno($enlace) . " : " . mysqli_error($enlace);
            
            $output = array(
            'message:' => $message,
            'hostmessage:' => $hostmessage,
            'dbmessage:' => $dbmessage
        );
        echo json_encode($output);
        }
    // Se comprueba si en la BD existe mas de un usuario con el mismo nombre, si es el caso, no se eliminara ningun registro.
    } else if($rows > 1){
        echo "Hay mas de un usuario con el mismo nombre, no se procedera con la consulta";
    // Si en caso no hay un usuario que coincida en la BD, mostrara un mensaje.
    } else {
        echo "No existe ese nombre de usuario, valla a mentirle a su madre #$#%#$";
    }
    
?>