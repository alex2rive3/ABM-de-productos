<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <script src="libs/jquery/jquery.js" charset="utf-8"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="estiloLogin.css">
    <title>Login</title>
</head>
<body>
    <div class=" container ">
        <form class="form" action="login.php" method="post">
        <div class="form-group" style="margin-left: 150px;">
            <input value="" type="text" name="usuario" placeholder="Usuario" class="form-contrl form-contrl.sm" required="">
        </div>
        <div class="form-group" style="margin-left: 150px;">
            <input value="" type="password" name="contrasena" placeholder="Contraseña" class="form-contrl form-contrl.sm" required="">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" style="margin-left: 190px;">Ingresar</button>
        </div>
        </form>
    </div>
</body>
</html>