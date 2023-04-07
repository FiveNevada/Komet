<?php

    include 'ConexionDB.php';

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $revisar = mysqli_query($Conexion, "SELECT * FROM usuario WHERE correo = '$correo'");

    if(mysqli_num_rows($revisar) > 0){
        echo '
            <script>
                alert("Intenta con otro correo");
                window.location = "../Register.php";
            </script>
            ';
            exit();
    }
    $revisar2 = mysqli_query($Conexion, "SELECT * FROM usuario WHERE usuario = '$usuario'");

    if(mysqli_num_rows($revisar2) > 0){
        echo '
            <script>
                alert("Intenta con otro usuario");
                window.location = "../Register.php;
            </script>
            ';
            exit();
    }

    $insertar = "INSERT INTO usuario(nombre, usuario, correo, clave)
                VALUES('$nombre', '$usuario', '$correo', '$clave')";
    
    $ejecutar = mysqli_query($Conexion, $insertar);

    if($ejecutar) {
        echo '
            <script> 
                alert("Usuario registrado con exito!!");
                window.location = "../Register.php";
                </script>
                ';
    }else{
        echo '
            <script>
                alert("No se pudo registrar el usuario"); 
                window.location = "../Register.php";
            </script>
                ';
            }

    mysqli_close($Conexion);
?>