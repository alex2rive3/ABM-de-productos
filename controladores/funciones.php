<?php 
function ObtenerTodosLosProductos($conexion){
    $sql = 'SELECT * FROM productos';
    $filas = $conexion -> query($sql);
    return $filas;
}

function ObtenerProveedor($conexion, $id){
    $sql = " SELECT razonSocial FROM `proveedores`WHERE id=$id";
    $filas =mysqli_fetch_array( $conexion -> query($sql), MYSQLI_ASSOC);
    return $filas;
}

function registrar ($conexion,$codigo,$descripcion,$seccion,$subseccion,$marca,$otros,$stock,$precioCompra,$PrecioVenta,$iva,$recargo,$proveedores){ 
    $sql = "INSERT INTO  productos (id, codigo, descripción, seccion, subSeccion, marca, otro, stock, precioCompra, PrecioVenta, iva, recargo, proveedores ) VALUES (NULL,'".$codigo."','".$descripcion."','".$seccion."','".$subseccion."','".$marca."','".$otros."','".$stock."','".$precioCompra."','".$PrecioVenta."','".$iva."','".$recargo."','".$proveedores."')";
    $filas = $conexion->query($sql);
}
function Consultar($conexion, $codigo){
    $sql = "SELECT * FROM `productos` WHERE codigo = '$codigo'";
    $filas = $conexion->query($sql);
    return $filas;
}
function Modificar($conexion,$codigo,$descripcion,$seccion,$subseccion,$marca,$otros,$stock,$precioCompra,$PrecioVenta,$iva,$recargo,$proveedores, $id){
        $sql = "UPDATE  productos  SET codigo ='".$codigo."', descripción ='".$descripcion."', seccion ='".$seccion."', subSeccion ='".$subseccion."', marca ='".$marca."', otro ='".$otros."', stock ='".$stock."', precioCompra ='".$precioCompra."', PrecioVenta ='".$PrecioVenta."', iva ='".$iva."', recargo ='".$recargo."', proveedores = $proveedores WHERE  productos.id=$id";
        $filas = $conexion->query($sql);
}
function Eliminar($conexion, $id)
{
    $sql = "DELETE FROM `productos` WHERE `productos`.`id`=$id";
    $filas = $conexion -> query($sql);
}
?>