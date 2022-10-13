<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="HackCande">
        <meta name="description" content="">
        <meta name="keywords" content="">

        <link rel="stylesheet" href="../css/styles.css">
        <title>Olvidaste la contraseña</title>
    </head>
    <body>
        <header></header>
        <main>
            <div class="container">
                <div class="container_logo">
                    <div class="logo">
                        <h2>Olvidaste la contraseña</h2>
                        <img src="../img/Logo_sierra_huasteca_veracruz.png" alt="Logo">
                    </div>
                </div>
                <div class="formulario">
                    <form method="POST" action="../config/querys.php?op=update">
                        <div class="label-form">
                            <label class="label">Nombre de usuario:</label>
                            <input type="text" name="user" class="form_input" placeholder="Nombre..." required>
                        </div>
                        <div class="label-form">
                            <label class="label">Nueva contraseña:</label>
                            <input type="password" name="password" class="form_input" placeholder="Nueva contraseña" required>
                        </div>
                        <div class="label-form">
                            <label class="label">Confirmar contraseña:</label>
                            <input type="password" name="new_password" class="form_input" placeholder="Confirmar contraseña">
                        </div>
                        <div class="submit">
                            <input type="submit" value="Ingresar">
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>