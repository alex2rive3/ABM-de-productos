<?php
require_once("controladores/conexion.php");
require_once("controladores/funciones.php"); 
$array = [];
if ($_POST) {
    $array = Consultar($conexion, $_POST['codigo']);
}
while ($datos = mysqli_fetch_array($array)) {
        print_r ( $datos);
    }
?>