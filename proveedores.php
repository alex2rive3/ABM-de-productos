<?php
session_start();
require_once("controladores/conexion.php");
require_once("controladores/funciones.php");
$todoLosProveedores = ObtenerTodosLosProveedores($conexion);
if (!$_SESSION['id']) {
    header("Location: f_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="libs/estiloProveedores.css">
    <link rel="stylesheet" href="libs/estiloSidebar.css">
    <title>Proveedores</title>
</head>
<body>
    <div class = "contenedor">
        <div>
            <main>
                <aside class="sidebar">
                    <nav class="nav">
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="productos.php">Productos</a></li>
                        <li><a href="proveedores.php">Proveedores</a></li>
                        <li><a href="#">Usuarios</a></li>
                    </ul>
                    </nav>
                </aside>
            </main>
        </div>
        <div>
            <div class= "contenedor-Titulo">
                <h3>Todos Los Proveedores Registrados</h3>
                <a href="nuevoProveedor.php" class= "link"><button class = "boton">Nuevo</button></a>
            </div>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Razon Social</th>
                            <th>RUC</th>
                            <th>Nro. Celular</th>
                        </tr>
                    </thead>
                    <tdody>
                        <?php 
                            foreach ($todoLosProveedores as $dato) {
                        ?>
                        <tr>
                            <td><?php echo $dato['id'];?></td>
                            <td><?php echo $dato['razonSocial'];?></td>
                            <td><?php echo $dato['ruc'];?></td>
                            <td><?php echo $dato['telefono'];?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tdody>
                </table>
            </div>
            </div>
        </div>
    </div>
</body>
</html>