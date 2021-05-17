<?php 
require_once("controladores/conexion.php");
require_once("controladores/funciones.php"); 
if ($_POST) {
    RegistrarProveedor($conexion, $_POST["razonSocial"], $_POST["ruc"], $_POST["nroCel"]);
    header("Location: proveedores.php");
}else {
    echo "No puedes dejar vacio ningun campo";
}
?>