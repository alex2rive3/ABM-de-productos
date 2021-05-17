<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="libs/estilosNuevoProveedor.css">
    <title>Registrar Proveedor</title>
</head>
<body>
    <div>
        <div>
        <!--SIDEBAR-->
        </div>
        <div>
            <h3>Registrar Nuevo Proveedor</h3>
            <form action="rigistrarProveedor.php" method="post">
                <div>
                    <label for="razonSocial">Razon Social</label><br>
                    <input type="text" name="razonSocial" id="razonSocial">
                </div>
                <div>
                    <label for="ruc">R.U.C</label><br>
                    <input type="number" name="ruc" id="ruc">
                </div>
                <div>
                    <label for="nroCel">Número de celular</label><br>
                    <input type="number" name="nroCel" id="nroCel">
                </div>
                <div>
                    <br><button type="submit" class="boton">Registrar</button>
                    <a href="pasantia/proveedores.php"><button class = "boton">Volver</button></a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>