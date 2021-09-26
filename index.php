<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Login</title>
</head>

<body>
    <div class="positioner">
        <div class="all">
            <div class="form-container">
                <h1>Login</h1>
                <form action="./php/validate.php" method="POST" name="login">
                    <label for="username">username</label>
                    <input class="data" type="text" name="username" required>
                    <br>
                    <label for="pwd">password</label>
                    <input class="data" type="password" name="pwd" required>
                    <br>
                    <input class="btn-data" type="submit" name="submit-button" value="Go!">
                </form>
            </div>
            <p class="author">Por: <a href="https://github.com/miklegonza" target="_blank">Michael González</a></p>
        </div>
    </div>
</body>

</html>