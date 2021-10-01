<?php
include_once("connection.php");

$vpass = $_POST['pwd'];
$vcpass = $_POST['pwd-confirm'];

if ($vpass != $vcpass) {
    header("location: ../common/create.php");
    exit();
}

$con = mysqli_connect($host, $user_db, $pwd_db, $db) or die('Fallo la conexion');
mysqli_set_charset($con, "utf-8");

$vname = $_POST['firstname'];
$vlastname = $_POST['lastname'];
$vuser = $_POST['username'];
$vrole = $_POST['role'];

$insert = "INSERT INTO $db.users (firstname, lastname, username, pwd, user_role) VALUES ('$vname', '$vlastname', '$vuser', '$vpass', '$vrole');";
$result = mysqli_query($con, $insert) or die(mysqli_error($con));

//header("location: ../common/dashboard.php");

mysqli_close($con);
