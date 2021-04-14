<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="libs/estiloLogin.css">
    <title>Login</title>
</head>
<body>
    <div>
        <form action="login.php" method="post">
        <div >
            <label for="usuario"> Usuario</label>
            <input value="" type="text" name="usuario" required="">
        </div>
        <div >
            <label for="contrasena">Contraseña</label>
            <input value="" type="password" name="contrasena" required="">
        </div>
        <div >
            <button type="submit">Ingresar</button>
        </div>
        </form>
    </div>
</body>
</html>