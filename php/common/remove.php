<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <title>Eliminar un usuario</title>
</head>

<body>
    <div class="form-container">
        <form name="remove" action="../logic/delete.php" method="POST">
            <h1>Eliminar usuario</h1>
            <input type="text" class="data" name="search" placeholder="Usuario" required>
            <input type="submit" class="btn-data" value="Eliminar" disabled>
        </form>
    </div>
</body>

</html>