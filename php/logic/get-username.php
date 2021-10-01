<?php
include_once('connection.php');

session_start();
$session_pwd = $_SESSION['pwd'];

if (!isset($session_pwd)) {
   header("location: ../../");
}

$con = mysqli_connect($host, $user_db, $pwd_db, $db) or die("Falló la conexión");
mysqli_set_charset($con, "utf-8");

$query = "SELECT * FROM $db.users WHERE pwd = '$session_pwd';";
$result = mysqli_query($con, $query);

while ($line = mysqli_fetch_assoc($result)) {
    $name = $line['firstname'];
    $last = $line['lastname'];
    $id = $line['id_user'];
}
$complete_name = $name . " " . $last;
