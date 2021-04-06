<?php
require_once("controladores/conexion.php");
require_once("controladores/funciones.php"); 
if ($_POST) {
    modificar($conexion, $_POST['codigo'], $_POST['descripcion'], $_POST['seccion'], $_POST['subseccion'], $_POST['marca'], $_POST['otros'], $_POST['cantIngresar'], $_POST['precioCompra'], $_POST['precioVenta'], $_POST['iva'], $_POST['recargo'], $_POST['proveedores'], $_POST['id']);
}