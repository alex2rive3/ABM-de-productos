<?php
session_start();
require_once("controladores\conexion.php");
require_once("controladores\acceso.php");
if($_POST){
    validarEntrada($_POST['usuario'],$_POST['contrasena'], $conexion);
    //echo "bienvenido";
}
header("location: index.php")
?>