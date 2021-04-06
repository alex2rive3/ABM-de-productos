<?php 
function registrar ($conexion,$codigo,$descripcion,$seccion,$subseccion,$marca,$otros,$stock,$precionCompra,$precionVenta,$iva,$recargo,$proveedores){ 
    $sql = "INSERT INTO  productos (id, codigo, descripción, seccion, subSeccion, marca, otro, stock, precioCompra, PrecioVenta, iva, recargo, proveedores ) VALUES (NULL,'".$codigo."','".$descripcion."','".$seccion."','".$subseccion."','".$marca."','".$otros."','".$stock."','".$precionCompra."','".$precionVenta."','".$iva."','".$recargo."','".$proveedores."')";
    $filas = $conexion->query($sql);
    echo "se agregó satisfactoriamente el nuevo elemento";
}
function Consultar($conexion, $codigo){
    $sql = "SELECT * FROM `productos` WHERE codigo = '$codigo'";
    $filas = $conexion->query($sql);
    return $filas;
}
function modificar(){
    if($_POST){
        $sql = "UPDATE  productos  SET  codigo ='".$codigo."', descripción ='".$descripción."', seccion ='".$seccion."', subSeccion ='".$subSeccion."', marca ='".$marca."', otro ='".$otro."', stock ='".$stock."', precioCompra ='".$precioCompra."', PrecioVenta ='".$PrecioVenta."', iva ='".$iva."', recargo ='".$recargo."', proveedores ='".$proveedores."' WHERE 1";
    }
}
?>