<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="libs/estilosLogin.css">
    <title>Login</title>
</head>
<body>
    <div>
        <fieldset>
            <form action="login.php" method="post">
            <div>
                <img src="img/user.svg" alt="" srcset="">
            </div>
            <div >
                <label for="usuario"> Usuario</label><br>
                <input value="" type="text" name="usuario" required="">
            </div>
            <div >
                <br><label for="contrasena">Contraseña</label><br>
                <input value="" type="password" name="contrasena" required="">
            </div>
            <div >
                <br><button type="submit">Ingresar</button>
            </div>
            </form>
        </fieldset>
    </div>
</body>
</html> 