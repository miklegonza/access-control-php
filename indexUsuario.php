<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Usuario</title>
</head>

<body>
    <?php
    include_once('./php/get_username.php')
    ?>

    <div class="tables-container">
        <header class="title">
            <h1>Usuario2</h1>
        </header>
        <div class="welcome">
            <p>Bienvenido </p>
            <p><?php echo $complete_name; ?>. </p>
            <p class="logout">
                <a href="./php/logout.php" class="logout-link">Cerrar sesión</a>
            </p>
        </div>
        <div class="tbl-client">
            <table>
                <thead>
                    <tr>
                        <th>Clientes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>bbbbbbbbb</td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>