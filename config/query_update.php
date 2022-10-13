<?php
    // Se importa el archivo, en donde se encuentra la conexion a la BD...
    require_once "conexion.php";

    // Se crean variables, las cuales almacenaran los datos para poder actualizar la contraseña en caso de que se halla olvidado.
    $user = $_POST["user"];
    $password = $_POST["password"];
    $new_password = $_POST["new_password"];

    // Se realiza una consulta, en donde se validara que exista un usuario con el mismo nombre que la variable $user. Nota!! Para realizar actualizaciones es mejor validar con el ID del registro, asi se evitan problemas cuando existen mas registros con el mismo nombre.
    $sqlrows = "SELECT * FROM usuarios WHERE usuario = '$user'";
    $rspta_rows = mysqli_query($enlace, $sqlrows);
    $rows = mysqli_num_rows($rspta_rows);

    // Se comprueba que exista el usuario.
    if($rows == 1) {
        // Se valida si las dos contraseñas proporcionadas por el usuario coinciden, en caso de que sea asi, se continuara con la actualizacion.
        if($password == $new_password) {
            // Se crea la consulta SQL, en este caso se actualizara si el nombre de usuario coincide con un registro en la BD. Nota!!!! Para poder realizar una actualizacion se debe de validar con el ID del registro, es decir, comprobar con el ID. Porque este es la llave primaria, y solo existe una. En cambio si se valida con un nombre de usuario, pueden aver mas de dos registros con el mismo nombre.
            $sql = "UPDATE usuarios SET password = '$password' WHERE usuario = '$user'";

            // Se realiza la consulta, para ello se necesita la funcion de mysqli_query, la cual requiere dos parametros, la conexion a la base de datos, y la consulta SQL.
            $rspta = mysqli_query($enlace, $sql);
            // Se comprueba que la actualizacion se halla realizado sin problemas.
            if($rspta) {
                echo "Se actualizo el registro";
            } else {
                $message = "No existe un usuario con ese nombre";
                // Con la funcion se obtendra el ultimo error.
                $hostmessage = error_get_last();
                // Se utilizan dos funciones de MYSQL, los cuales nos muestran el numero y el error, con ello se podra localizar y solucionar los problemas a futuro. 
                $dbmessage = mysqli_errno($enlace) . " : ". mysqli_error($enlace);
                $output = array(
                    'message:' => $message,
                    'hostmessage:' => $hostmessage,
                    'dbmessage' => $dbmessage
                );

                echo json_encode($output);
            }
        } else {
            echo "No son las mismas claves";
        }
    } else if($rows > 1) {

        // Nota: Para poder realizar este tipo de acciones, es necesario obtener el ID del usuario, con ello se podra validar debido a que este es unico.
        echo "Existe mas de un usuario con el mismo nombre, Te falta ver mas BAX!!!!";
    }else {
        echo "No existe un usuario con ese nombre, habla con el Ing para crear nueva cuenta =)";
    }
    
?>