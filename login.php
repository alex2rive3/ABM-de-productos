<?php
session_start();
require_once("controladores/conexion.php");
require_once("controladores/acceso.php");
if($_POST){
    //echo "Datos recibidos por POST: ";
    //print_r($_POST['contrasena']);
    validarEntrada($_POST['usuario'],$_POST['contrasena'], $conexion);
}
header("location: index.php");
?>
