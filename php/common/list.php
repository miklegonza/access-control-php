<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <title>Listado de usuarios</title>
</head>

<body>
    <?php
    include_once("../logic/connection.php");

    $con = mysqli_connect($host, $user_db, $pwd_db, $db) or die('Fallo la conexión');
    mysqli_set_charset($con, "utf-8");

    $query = "SELECT * FROM $db.users;";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    ?>

    <div class="container-table">
        <h1>Listado de usuarios</h1>
        <button class="btn-data change" onclick="location.reload()">Refrescar</button>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Apellido</th>
                    <th class="text-center">Usuario</th>
                    <th class="text-center">Rol</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($line = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td class="text-center"><?php echo $line['firstname']; ?> </td>
                        <td class="text-center"><?php echo $line['lastname']; ?> </td>
                        <td class="text-center"><?php echo $line['username']; ?> </td>
                        <td class="text-center"><?php echo $line['user_role']; ?> </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>