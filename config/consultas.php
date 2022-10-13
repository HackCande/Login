<?php 
    // Se importa un archivo, en donde se encuentra la conexion a la base de datos.
    require_once 'conexion.php';

    // Se crean variables que almacenaran informacion del formulario para poder comprobarlo con los registros de la base de datos.
    $nombre = $_POST["usuario"];
    $contraseña = $_POST["password"];

    // Se crea la consulta para verificar si existe una conincidencia de los datos introducidos con la base de datos.
    // $sql = "SELECT * FROM usuarios
    //         WHERE usuario = '".$enlace->real_escape_string($nombre)."' AND password = '".$enlace->real_escape_string($password)."'"; 
    $sql = "SELECT * FROM usuarios WHERE usuario = '".$nombre."' AND password = '".$contraseña."'";
            //Nota: Se utiliza la funcion "real_escape_string" para evitar SQL Injection
    
    // Se realiza la consulta antes mencionada, donde se usa la funcion de mysqli_query, se utiliza dos parametros, el enlace a la base de datos, como tambien la consulta que se desea realizar.
    $rspta = mysqli_query($enlace, $sql);

    if(!$rspta) {
        $mensaje = "Error";
        // Se utilizan dos funciones, las cuales arrojaran informacion acerca del error que pueda suceder
        $bdmensaje = mysqli_errno($enlace). " " . mysqli_error($enlace);
        $hostmensaje = error_get_last($enlace);
    }

    $output = array (
        'hostmessage:' => $hostmensaje,
        'message: ' => $mensaje,
        'bdmessage: ' => $bdmensaje,
        'Datos del formulario:',
            'user:' => $nombre,
            'password:' => $contraseña
    );

    // Se utiliza la funcion de json_encode para mostrar en la consola del navegador, en donde se podra debugear los errores posibles.
    echo json_encode($output);
    
    // Se usa la funcion para comprobar si existe alguna coincidencia de los datos con los registros de la BD.
    // Es decir, si la variable $rows almacena un valor, entonces si existe una coincidencia. En caso contrario no lo existe.
    $rows = mysqli_num_rows($rspta);

    if($rows) {
        // Si existe la coincidencia se redirigira a la pagina ...
        header("Location: ../views/login.php");
    } else {
        // Caso contrario arrojara una notificacion de error.
        echo "Error, no existe el usuario";
    }
?>