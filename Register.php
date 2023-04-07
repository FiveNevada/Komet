<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/CSS" href="CSS/Register.css">
    <script src="https://kit.fontawesome.com/bf924a6af6.js" crossorigin="anonymous"></script>
    <title>KOMET</title>
</head>
<body>
    <main>
        <section>
            <div class="CuadroRegister">
                <div class="Campos">
                    <form action="PHP/Registro.php" method="POST">
                        <h2>Crear nuevo usuario</h2>
                        <div class="Entradas">
                            <i class="fa-solid fa-circle-user"></i>
                            <input type="text" name = "nombre">
                            <label for="Nombre">Nombre completo</label>
                        </div>
                        <div class="Entradas">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="usuario" >
                            <label>Nombre de usuario</label>
                        </div>
                        <div class="Entradas">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="text" name="correo" >
                            <label>Correo electrónico</label>
                        </div>
                        <div class="Entradas">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="clave">
                            <label>Contraseña</label>
                        </div>
                        <input type="submit" value="Crear cuenta">
                    </form> 
                    <button>
                        <a href="Login.php">Regresar</a>
                    </button>
                </div>
            </div>
        </section>
    </main>
</body>
</html>