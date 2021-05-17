<?php
session_start();
require_once("controladores/conexion.php");
require_once("controladores/funciones.php");
$todoLosUsuarios = ObtenerTodosLosUsuarios($conexion);
if (!$_SESSION['id']) {
    header("Location: f_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="libs/estiloProductos.css">
    <link rel="stylesheet" href="libs/estiloSidebar.css">
    <title>Usuarios</title>
</head>
<body>
    <div class = "contenedor">
        <div>
            <main>
                <aside class="sidebar">
                    <nav class="nav">
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="productos.php">Productos</a></li>
                        <li><a href="proveedores.php">Proveedores</a></li>
                        <li><a href="usuario.php">Usuarios</a></li>
                    </ul>
                    </nav>
                </aside>
            </main>
        </div>
        <div>
            <div class= "contenedor-Titulo">
                <h3>Lista de Usuarios.</h3>
                <a href="nuevoUsuario.php"><button class = "boton">Nuevo</button></a>
            </div>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre Usuario</th>
                            <th>Admin</th>
                            <th>Activo</th>
                        </tr>
                    </thead>
                    <tdody>
                        <?php 
                            foreach ($todoLosUsuarios as $dato) {
                        ?>
                        <tr>
                            <td><?php echo $dato['id'];?></td>
                            <td><?php echo $dato['usuario'];?></td>
                            <td><?php echo ($dato['admin'] ) ? "Si" : "No";?></td>
                            <td><?php echo ($dato['activo'])? "Si" : "No" ;?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tdody>
                </table>
            </div>
            </div>
        </div>
    </div>
</body>
</html>