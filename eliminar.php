<?php
require_once("controladores/conexion.php");
require_once("controladores/funciones.php"); 
if ($_POST) {
    Eliminar($conexion, $_POST["id"]);
    echo "El registro se ha eliminado Correctamente";
}else {
    echo "Debes completar todos los campos";
}
?>