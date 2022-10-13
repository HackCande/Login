<?php
    // Se importa el archivo conexion.php, en donde se encuentra la conexion a la base de datos.
    require_once 'conexion.php';

    // Se crean variables, las cuales almacenaran los datos que se introduciran en el formulario para crear un nuevo usuario.
    $new_user = $_POST["usuario"];
    $password = $_POST["password"];
    $new_password = $_POST["conf_pass"];

    // Se validara la contraseña, es decir, se va a comprobar si las dos variables contiene la misma clave.
    if($password == $new_password){

        // Consulta para insertar un nuevo registro a la BD. Para ello se agregaran las variables de usuario y contraseña.
        $sql = "INSERT INTO usuarios (
            usuario,
            password
        ) VALUE (
            '$new_user',
            '$password'
        )";

        // Se utiliza la funcion para hacer la conexion a la BD y poder hacer la consulta para agregar un nuevo registro a la misma.
        $rspta = mysqli_query($enlace, $sql);

        // Si no hubo problema al realizar la consulta, se redirigira a la pagina de Login.php, caso contrario, arrojara un error.
        if($rspta) {
            header("Location: ../views/login.php");
        } else {
            echo "Error en la consulta, pon mas atencion #$$$#";
        }

    // Si las contraseñas no coinciden, se arrojara un error.
    } else {
        echo "No coincidieron las contraseñas";
    }
?>