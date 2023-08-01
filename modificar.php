<?php
require_once("controladores/conexion.php");
require_once("controladores/funciones.php");
$ResultadoConsulta = mysqli_fetch_array(Consultar($conexion, $_POST["codigo"]), MYSQLI_ASSOC); 
if ($_POST) {
    $stock = $ResultadoConsulta['stock'] + $_POST['cantIngresar'] - $_POST['bajaStock'];
    //print_r($_POST);
    Modificar($conexion, $_POST['codigo'], $_POST['descripcion'], $_POST['seccion'], $_POST['subseccion'], $_POST['marca'], $_POST['otros'], $stock, $_POST['precioCompra'], $_POST['precioVenta'], $_POST['iva'], $_POST['recargo'], $_POST['proveedores'], $_POST['id']);
    header("location: index.php");
}else {
    echo "No se pudo realizar la modificacion que deceaba";
}