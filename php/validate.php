<?php
include_once('connection.php');

//1. Crear conexión a la Base de Datos
$con = mysqli_connect($host, $user_db, $pwd_db, $db) or die('Fallo la conexion');
mysqli_set_charset($con, "utf-8");

$admin_profile = 1; //Perfil Administrador
$client_profile = 2; //Perfil Cliente
$query = "esto se guarda";
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
    $query = "SELECT * FROM $db.tbl_user WHERE username = '$vuser' AND pwd = '$vpwd';";
    $result = mysqli_query($con, $query) or die('El select no sirve');

    while ($line = mysqli_fetch_assoc($result)) {
        $user = $line['username'];
        $pwd = $line['pwd'];
        $profile = $line['user_profile'];
    }

    //Valida Usuario y/o contraseña no coincidentes
    if ($user != $vuser || $pwd != $vpwd) {
        return_index();
        exit();
    }

    if ($profile == $admin_profile) {
        //Valida perfil del Administrador
        session_start();
        $_SESSION['pwd'] = $pwd;
        header("location: ../indexAdmon.php");
    } else if ($profile == $client_profile) {
        //Valida perfil Cliente
        session_start();
        $_SESSION['pwd'] = $pwd;
        header("location: ../indexUsuario.php");
    } else {
        return_index();
        exit();
    }
}
echo $_SESSION['pwd'];
mysqli_close($con);

function return_index()
{
    header("location: ../");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>pagina validar</h1>
    <p><?php echo $query ?></p>
</body>
</html>