<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Admin</title>
</head>

<body>
    <?php
    include_once('./php/get_username.php')
    ?>

    <div class="tables-container">
        <nav class="nav-bar">
            <ul>
                <li>Item1</li>
                <li>Item1</li>
                <li>Item1</li>
                <li>Item1</li>
            </ul>
        </nav>
        <div class="welcome">
            <p>Bienvenido </p>
            <p><?php echo $complete_name; ?>. </p>
            <p class="logout">
                <a href="./php/logout.php" class="logout-link">Cerrar sesión</a>
            </p>
        </div>
        <div class="cards">
            <div class="card">
                <p>Accion1</p>
            </div>
            <div class="card">
                <p>Accion2</p>
            </div>
            <div class="card">
                <p>Accion3</p>
            </div>
            <br>
            <div class="card">
                <p>Accion4</p>
            </div>
            <div class="card">
                <p>Accion5</p>
            </div>
            <div class="card">
                <p>Accion6</p>
            </div>
        </div>
    </div>
</body>

</html>