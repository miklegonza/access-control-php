<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <title>Modificar un usuario</title>
</head>

<body>
    <div class="form-container" id="shown">
        <form name="modify" action="../logic/update.php" method="POST">
            <h1>Modificar usuario</h1>
            <input type="text" class="data" name="username" value="" disabled>
            <input type="text" class="data" name="name" placeholder="Nombre" required>
            <input type="text" class="data" name="lastname" placeholder="Apellido" required>
            <select name="role" class="data">
                <option value="0">Rol</option>
                <option value="1">Administrador</option>
                <option value="2">Vendedor</option>
                <option value="3">Cliente</option>
            </select>
            <input type="submit" class="btn-data" value="Modificar">
        </form>
    </div>
    <!--button class="btn-data change" onclick="change()">Cambiar clave</button-->
    <div class="form-container" id="hidden">
        <form name="modify-password" action="" method="POST">
            <h1>Cambiar clave</h1>
            <input type="text" class="data" name="username" value="" disabled>
            <input type="password" class="data" name="pwd" placeholder="Clave" required>
            <input type="password" class="data" name="pwd-confirm" placeholder="Confirmar clave" required>
            <input type="submit" class="btn-data" value="Modificar">
        </form>
    </div>
    
    <script>
        //document.getElementById("hidden").style.visibility = 'hidden';
        function change() {
            shown = document.getElementById("shown");
            hidden = document.getElementById("hidden");

            x = shown.getX();
            y = shown.getY();

            shown.style.visibility = 'hidden';
            hidden.style.visibility = 'visible';
            console.log('Queeeee?');
        }
    </script>
</body>

</html>