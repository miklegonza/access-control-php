<?php
include_once('connection.php');

//1. Crear conexión a la Base de Datos
$con = mysqli_connect($host, $user_db, $pwd_db, $db) or die('Fallo la conexion');
mysqli_set_charset($con, "utf-8");

if (!isset($_POST['login'])) {
    //Recoger datos Variables de Usuario
    $vuser = $_POST['username'];
    $vpwd = $_POST['pwd'];

    //VALIDAR CONTENIDO EN LAS VARIABLES O CAJAS DE TEXTO
    if (empty($vuser) | empty($vpwd)) {
        return_index();
        exit();
    }

    //VALIDANDO EXISTENCIA DEL USUARIO
    $query = "SELECT * FROM $db.users WHERE username = '$vuser' AND pwd = '$vpwd';";
    $result = mysqli_query($con, $query) or die('El select no sirve');

    while ($line = mysqli_fetch_assoc($result)) {
        $user = $line['username'];
        $pwd = $line['pwd'];

        session_start();
        $_SESSION['pwd'] = $vpwd;
        header("location: ../common/dashboard.php?pwd=$vpwd");
    }

    //Valida Usuario y/o contraseña no coincidentes
    if ($user != $vuser || $pwd != $vpwd) {
        return_index();
        exit();
    }
}
mysqli_close($con);

function return_index()
{
    header("location: ../../");
}
