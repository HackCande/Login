<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="HackCande">
        <meta name="description" content="">
        <meta name="keywords" content="">
        
        <link rel="stylesheet" href="../css/styles.css">
        <title>Practica | Nueva cuenta</title>
    </head>
    <body>
        <header></header>
        <main>
            <div class="container">
                <div class="container_logo">
                    <div class="logo">
                        <h2>Nuevo Usuario</h2>
                        <img src="../img/Logo_sierra_huasteca_veracruz.png" alt="">
                    </div>
                </div>
                <div class="formulario">
                    <form name="new_account" class="formulario" method="POST" action="../config/querys.php?op=insert">
                        <div class="label-form">
                            <label class="label">Usuario:</label>
                            <input type="text" name="user" class="form_input" placeholder="Nombre de usuario" required>
                        </div>
                        <div class="label-form">
                            <label class="label">Contraseña
                            </label>
                            <input type="password" name="password" class="form_input" placeholder="Contraseña" required>
                        </div>
                        <div class="label-form">
                            <label class="label">Confirmar contraseña
                            </label>
                            <input type="password"  name="new_password" class="form_input" placeholder="Confirmar contraseña" required>
                        </div>
                        <div class="submit">
                            <input type="submit" value="Crear usuario">
                        </div>
                    </form>
                    <div class="container_new_account">
                        <p class="new_account">¿Ya tienes cuenta? <a href="login.php">Iniciar sesion</a> </p>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>