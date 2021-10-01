<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <title>Dashboard</title>
</head>

<body>
    <?php
    include_once('../logic/connection.php');
    include_once('../logic/get-username.php');

    $pass = isset($_GET['pwd']) ? $_GET['pwd'] : '';

    $query = "SELECT
    $db.activities.activity_name AS actividad,
    $db.activities.id_activity AS id_actividad,
    $db.activities.link AS enlace 
    FROM 
    $db.users,
    $db.activities,
    $db.roles,
    $db.activity_management
    WHERE
    $db.activity_management.id_role = $db.roles.id_role AND
    $db.activity_management.id_activity = $db.activities.id_activity AND
    $db.roles.id_role = $db.users.user_role AND
    $db.users.pwd = '$pass';";

    $result = mysqli_query($con, $query) or die(mysqli_error($con));

    ?>
    <div class="container">
        <nav class="nav-bar-vertical">
            <ul>
                <h2>Menú</h2>
                <?php
                while ($line = mysqli_fetch_array($result)) {
                    $target = $line['enlace'] . '?id=' . $line['id_actividad'];
                ?>
                    <a href="<?php echo $target ?>" target="frame"><li><?php echo $line['actividad']; ?></li></a>
                <?php
                }
                mysqli_close($con);
                ?>
            </ul>
        </nav>
        <div class="welcome">
            <p>Usuario: </p>
            <p><?php echo $complete_name; ?>. </p>
            <p class="logout">
                <a href="../logic/logout.php" class="logout-link">Cerrar sesión</a>
            </p>
        </div>
        <div class="iframe-dash">
            <iframe name="frame"></iframe>
        </div>
    </div>
</body>

</html>