<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="HackCande">
        <meta name="description" content="">
        <meta name="keywords" content="">
        
        <link rel="stylesheet" href="../css/styles.css">
        <title>Practica | Login</title>
    </head>
    <body>
    <header></header>
    <main>
        <div class="container">
            <div class="container_logo">
                <div class="logo">
                    <h2>Inicio de Sesión</h2>
                    <img src="../img/Logo_sierra_huasteca_veracruz.png">
                </div>
            </div>
            <div class="formulario">
                <form method="POST" action="../config/querys.php?op=login">
                    <div class="label-form">
                        <label class="label">Usuario</label>
                        <input type="text" name="user" class="form_input" placeholder="Nombre de usuario" required>
                    </div>
                    <div class="label-form">
                        <label class="label">Contraseña</label>
                        <input type="password" name="password" class="form_input" placeholder="Password" required>
                    </div>
                    <div class="submit">
                        <input type="submit" value="Enviar formulario">
                    </div>
                </form>
                <div class="container-new-account">
                    <p class="new_account">¿No tienes cuenta? <a href="new_account.php">Crear cuenta</a></p>
                    <p class="new_account"><a href="forget_user.php">¿Olvidaste tu contraseña?</a></p>
                </div>
            </div>
        </div>
    </main>
    </body>
</html>