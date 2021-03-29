<?php 
$sevidor = "127.0.0.1";
$usuario = "root";
$contrasena = "";
$puerto = "3306";
$baseDeDatos = "inventario";

$conexion = mysqli_connect($sevidor, $usuario, $contrasena, $baseDeDatos);
//chequear la conexion
if($conexion->connect_error){
    die("Conexion Fallida:".$conexion->connect_error);
}
?>