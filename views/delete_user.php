<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Hack_Cande">
        <meta name="description" content="">
        <meta name="keywords" content="">

        <link rel="stylesheet" href="../css/styles.css">
        <title>Delete User</title>
    </head>
    <body>
        <header></header>
        <main>
            <div class="container">
                <div class="container_logo">
                    <div class="logo">
                        <h2>Eliminar usuario</h2>
                        <img src="../img/Logo_sierra_huasteca_veracruz.png" alt="Logo">
                    </div>
                </div>
                <div class="formulario">
                    <form method="POST" action="../config/querys.php?op=delete">
                        <div class="label-form">
                            <label class="label">Nombre de usuario:</label>
                            <input type="text" name="user" class="form_input" placeholder="Ingrese el usuario" required>
                        </div>
                        <div class="submit">
                            <input type="submit" value="Enviar registro">
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>