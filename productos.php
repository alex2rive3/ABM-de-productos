<?php
session_start();
require_once("controladores/conexion.php");
require_once("controladores/funciones.php");
$todoLosProductos = ObtenerTodosLosProductos($conexion);
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
    <link rel="stylesheet" href="libs/estiloProductos.css">
    <link rel="stylesheet" href="libs/estiloSidebar.css">
    <title>Productos</title>
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
                <h3>Todos Los Productos Registrados</h3>
                <a href="index.php"><button class = "boton">Nuevo</button></a>
            </div>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Codigo</th>
                            <th>Descripción</th>
                            <th>Seccion</th>
                            <th>Sub Seccion</th>
                            <th>Marca</th>
                            <th>Otros</th>
                            <th>Stock</th>
                            <th>Precio de Compra</th>
                            <th>Precio de Venta</th>
                            <th>Iva%</th>
                            <th>Recargo%</th>
                            <th>Proveedor</th>
                        </tr>
                    </thead>
                    <tdody>
                        <?php 
                            foreach ($todoLosProductos as $dato) {
                                $proveedor = ObtenerProveedor($conexion, $dato['proveedores']);
                        ?>
                        <tr>
                            <td><?php echo $dato['id'];?></td>
                            <td><?php echo $dato['codigo'];?></td>
                            <td><?php echo $dato['descripción'];?></td>
                            <td><?php echo $dato['seccion'];?></td>
                            <td><?php echo $dato['subSeccion'];?></td>
                            <td><?php echo $dato['marca'];?></td>
                            <td><?php echo $dato['otro'];?></td>
                            <td><?php echo $dato['stock'];?></td>
                            <td><?php echo number_format($dato['precioCompra'], 0, "", ".");?></td>
                            <td><?php echo number_format($dato['PrecioVenta'], 0, "", ".");?></td>
                            <td><?php echo $dato['iva'];?></td>
                            <td><?php echo $dato['recargo'];?></td>
                            <td><?php echo $proveedor['razonSocial'];?></td>
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