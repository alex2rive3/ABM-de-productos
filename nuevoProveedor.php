<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Proveedor</title>
</head>
<body>
    <div>
        <div>
        <!--SIDEBAR-->
        </div>
        <div>
            <h3>Registrar Nuevo Proveedor</h3>
            <form action="ristrarProveedor.php" method="post">
            <div>
                <label for="razonSocial">Razon Social</label><br>
                <input type="text" name="razonSocial" id="razonSocial">
            </div>
            <div>
                <label for="ruc">RUC</label><br>
                <input type="number" name="ruc" id="ruc">
            </div>
            <div>
                <label for="nroCel">Numero de celular</label><br>
                <input type="number" name="nroCel" id="nroCel">
            </div>
            </form>
        </div>
    </div>
</body>
</html>