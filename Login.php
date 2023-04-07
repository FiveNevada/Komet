<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: index.php");
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>KOMET</title>
    <link rel="stylesheet" type="text/CSS" href="CSS/Login.css">
    <script src="https://kit.fontawesome.com/bf924a6af6.js" crossorigin="anonymous"></script>
</head>
<body>
    <main>
        <section>
            <div class="CuadroLogin">
                <div class="Campos">
                    <form action="PHP/IniciarSesion.php" method="POST">
                        <h2>Iniciar Sesión</h2>
                        <div class="Entradas">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="text" name="correo">
                            <label>Correo electrónico</label>
                        </div>
                        <div class="Entradas">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="clave">
                            <label>Contraseña</label>
                        </div>
                        <div class="Recordar">
                            <input type="checkbox" id="validar">
                            <label for="validar">No cerrar sesión</label>
                            <a href="#">Olvidaste tu contraseña?</a>
                        </div>
                        <input type="submit" value="Iniciar Sesión">
                        <div class="Registro">
                            <p>No tienes una cuenta? <a href="Register.php">Crea una aquí</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>
</html>