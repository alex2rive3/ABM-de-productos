<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="libs/estilosNuevoProveedor.css">
    <title>Registrar Usuario nuevo</title>
</head>
<body>
    <div>
        <div>
        <!--SIDEBAR-->
        </div>
        <div>
            <h3>Registrar Nuevo Usuario</h3>
            <form action="rigistrarUsuario.php" method="post">
                <div>
                    <label for="usuario">Usuario</label><br>
                    <input type="text" name="usuario" id="razonSocial">
                </div>
                <div>
                    <label for="pass">Contraseña</label><br>
                    <input type="text" name="pass" id="ruc">
                </div>
                <div>
                    <label for="isAdmin">Permiso Administrador</label><br>
                    <input type="number" name="isAdmin" id="isAdmin">
                </div>
                <div>
                    <label for="isActiv">Activar Usuario</label><br>
                    <input type="number" name="isActiv" id="isActiv">
                </div>
                <div>
                    <br><button type="submit" class="boton">Registrar</button>
                    <a href="pasantia/usuario.php"><button class = "boton">Volver</button></a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>