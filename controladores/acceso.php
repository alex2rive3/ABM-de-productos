<?php
require_once("conexion.php");
function validarEntrada($usuario, $contrasena, $conexion){
    //filtrar y sanetizar los datos
    $usuario = filter_var($usuario, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
    $contrasena = filter_var($contrasena, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

    //recuperar todos los datos de la tabla user 
    $sql = 'SELECT * FROM user WHERE usuario = "'.$usuario.'" and contrasena= "'.$contrasena.'"';
    //se dividen todas las tuplas
    $fila = $conexion -> query($sql);
    if($fila -> num_rows == 1){
        $datos = $fila -> fetch_assoc();
        $_SESSION["id"] = $datos["id"];
        $_SESSION["usuario"] = $datos["usuario"];
        $_SESSION["admin"] = $datos["admin"];
        echo "Aceeso Correcto";
    }
    else{
        echo "Acceso Denegado";
    }
}

function usuarioSalir(){
    session_destroy();
}
?>