<?php 

    session_start();

    include 'ConexionDB.php';

    $correo = $_POST['correo'];
    $clave = $_POST['clave'];

    $validar = mysqli_query($Conexion, "SELECT * FROM usuario WHERE correo = '$correo' and clave = '$clave'");

    if(mysqli_num_rows($validar) > 0){
        $_SESSION['usuario'] = $correo;
        header("location: ../index.php");
        exit;
    }else{
        echo '
            <script>
                alert("Datos son invalidos");
                window.location = "../Login.php";
            </script>
        ';
        exit;
    }
?>
