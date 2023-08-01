<?php
require_once("controladores/conexion.php");
require_once("controladores/funciones.php"); 
if ($_POST) {
    Eliminar($conexion, $_POST["id"]);
    header("location: index.php");
}else {
    echo "Debes completar todos los campos";
}
?>