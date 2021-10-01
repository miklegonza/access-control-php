<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <title>Registro de usuario</title>
</head>

<body>
    <div class="form-container">
        <form name="create" action="../logic/insert.php" method="POST">
            <h1>Registrar usuario</h1>
            <input type="text" class="data" name="firstname" placeholder="Nombre" required>
            <input type="text" class="data" name="lastname" placeholder="Apellido" required>
            <input type="text" class="data" name="username" placeholder="Usuario" required>
            <input type="password" class="data" name="pwd" placeholder="Clave" required>
            <input type="password" class="data" name="pwd-confirm" placeholder="Confirmar clave" required>
            <select name="role" class="data">
                <option value="0">Rol</option>
                <option value="1">Administrador</option>
                <option value="2">Vendedor</option>
                <option value="3">Cliente</option>
            </select>
            <input type="submit" class="btn-data" value="Registrar">
        </form>
    </div>
</body>

</html>