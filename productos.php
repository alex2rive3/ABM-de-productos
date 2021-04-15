<?php
require_once("controladores/conexion.php");
require_once("controladores/funciones.php");
$todoLosProductos = ObtenerTodosLosProductos($conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <h3>Todos los Productos registrados</h3>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Codigo</th>
                <th>Descripción</th>
                <th>seccion</th>
                <th>Sub Seccion</th>
                <th>Marca</th>
                <th>Otros</th>
                <th>Stock</th>
                <th>Precio de Compra</th>
                <th>Precio de Venta</th>
                <th>Iva</th>
                <th>Recargo</th>
                <th>Proveedor</th>
            </tr>
        </thead>
        <tdody>
            <?php 
                foreach ($todoLosProductos as $dato) {
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
                <td><?php echo $dato['precioCompra'];?></td>
                <td><?php echo $dato['PrecioVenta'];?></td>
                <td><?php echo $dato['iva'];?></td>
                <td><?php echo $dato['recargo'];?></td>
                <td><?php echo $dato['proveedores'];?></td>
            </tr>
            <?php
            }
            ?>
        </tdody>
    </table>
</body>
</html>