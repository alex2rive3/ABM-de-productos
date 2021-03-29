<?php
require_once("controladores/conexion.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="libs/estiloIndex.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="libs/funciones.js"></script>
    <title>Inicio</title>
</head>
<body>
    <div >
        <form action="prueba.php" method="post" class ="contenedor">
            <div class= "radio">
                <fieldset>
                    <label id= "identificador">
                        <input type="radio" name="opcion" value="1" class="radioB"> Registrar Nuevo
                        <input type="radio" name="opcion" value="2" class="radioB"> Consultar o Modificar Registro
                    </label>
                </fieldset>
            </div>
            <!--/////////////////////////////CODIGO///////////////////-->
            <div>
                <fieldset>
                    <label for="codigo">Codigo</label><br>
                    <input type="text" name="codigo" id="">
                </fieldset>
            </div>
            <!--//////////////////DESCRIPCION/////////-->
            <div class="descripcion">
                <fieldset>
                    <label for="descripcion">Descripcion</label><br>
                    <input type="text" name="descripcion" id="" style="width: 99%;">
                </fieldset>
            </div>
            <!--////////////////////////Seccion///////////////////////////////////////////-->
            <div class="seccion">
                <fieldset>
                    <label for="seccion">Seccion</label><br>
                    <select name="seccion" id="" class = "seleccion">
                        <option selected value="0"> Elige una opción </option>
                            <?php 
                            //sentencia para extraer todos los datos de la tabla
                            $sql = 'SELECT id, seccion FROM `productos`';
                            $filas = $conexion-> query($sql);
                            //se iteran todas las filas y se mandan a option para se visualizadas
                            while ($datos = mysqli_fetch_array($filas)){
                                echo '<option value="'.$datos[seccion].'">'.$datos[seccion].'</option>';
                            }
                            ?>
                    </select>
                </fieldset>
            </div>
            <!--////////////////////////SubSeccion///////////////////////////////////////////-->
            <div class = "subseccion">
                <fieldset>
                    <label for="subseccion">SubSeccion</label><br>
                    <select name="subseccion" id="" class = "seleccion">
                        <option selected value="0"> Elige una opción </option>
                        <?php 
                            //sentencia para extraer todos los datos de la tabla
                            $sql = 'SELECT id, subSeccion FROM `productos`';
                            $filas = $conexion-> query($sql);
                            //se iteran todas las filas y se mandan a option para se visualizadas
                            while ($datos = mysqli_fetch_array($filas)){
                                echo '<option value="'.$datos[subSeccion].'">'.$datos[subSeccion].'</option>';
                            }
                        ?>
                    </select>
                </fieldset>
            </div>
            <!--////////////////////////MARCA///////////////////////////////////////////-->
            <div class = "marca">
                <fieldset>
                    <label for="marca">Marca</label><br>
                    <select name="marca" id="" class = "seleccion">
                        <option selected value="0"> Elige una opción </option>
                        <?php 
                            //sentencia para extraer todos los datos de la tabla
                            $sql = 'SELECT id, marca FROM `productos`';
                            $filas = $conexion-> query($sql);
                            //se iteran todas las filas y se mandan a option para se visualizadas
                            while ($datos = mysqli_fetch_array($filas)){
                                echo '<option value="'.$datos[marca].'">'.$datos[marca].'</option>';
                            }
                        ?>
                    </select>
                </fieldset>
            </div>
            <!--////////////////////////OTRO///////////////////////////////////////////-->
            <div class = "otros">
                <fieldset>
                    <label for="otros">Otros</label><br>
                    <select name="otros" id="" class = "seleccion">
                        <option selected value="0"> Elige una opción </option>
                        <?php 
                            //sentencia para extraer todos los datos de la tabla
                            $sql = 'SELECT id, otro FROM `productos`';
                            $filas = $conexion-> query($sql);
                            //se iteran todas las filas y se mandan a option para se visualizadas
                            while ($datos = mysqli_fetch_array($filas)){
                                echo '<option value="'.$datos[otro].'">'.$datos[otro].'</option>';
                            }
                        ?>
                    </select>
                </fieldset>
            </div>
            <!--//////////////////////CANTIDAD A INGRESAR////////////////////////////////-->
            <div class = "cantidad">
                <fieldset>
                    <label for="cantIngresar">Cant. a Ingr.</label><br>
                    <input type="text" name="cantIngresar" id="">
                </fieldset>
            </div>
            <!--//////////////////////EN STOCK////////////////////////////////-->
            <div class = "stock">
                <fieldset>
                    <label for="stock">En Stock</label><br>
                    <input type="text" name="stock" id="" disabled>
                </fieldset>
            </div>
            <!--//////////////////////IVA%////////////////////////////////-->
            <div class = "iva">
                <fieldset>
                    <label for="iva">IVA%</label><br>
                    <input type="text" name="iva" id="">
                </fieldset>
            </div>
            <!--//////////////////////RECARGO%////////////////////////////////-->
            <div class = "recargo">
                <fieldset>
                    <label for="recargo">Recargo%</label><br>
                    <input type="text" name="recargo" id="">
                </fieldset>
            </div>
            <!--//////////////////////PRECION COMPRA////////////////////////////////-->
            <div class = "Pcompra">
                <fieldset>
                    <label for="precioCompra">P. Compra</label><br>
                    <input type="text" name="precioCompra" id="">
                </fieldset>
            </div>
            <!--//////////////////////PRECIO VENTA////////////////////////////////-->
            <div class ="Pventa">
                <fieldset>
                    <label for="precioVenta">P. Venta</label><br>
                    <input type="text" name="precioVenta" id="">
                </fieldset>
            </div>
            <!--//////////////////////BAJA STOCK////////////////////////////////-->
            <div class = "Bstock">
                <fieldset>
                    <label for="bajaStock">Baja Stock</label><br>
                    <input type="text" name="bajaStock" id="">
                </fieldset>
            </div>
            <!--//////////////////////PROVEEDORES////////////////////////////////-->
            <div class = "proveedores">
                <fieldset>
                    <label for="proveedores">Proveedoress</label><br>
                    <select name="proveedores" id="" class = "ListaProveedor">
                        <option selected value="0"> Elige una opción </option>
                        <?php 
                            //sentencia para extraer todos los datos de la tabla
                            $sql = 'SELECT id, razonSocial, ruc FROM `proveedores`';
                            $filas = $conexion-> query($sql);
                            //se iteran todas las filas y se mandan a option para se visualizadas
                            while ($datos = mysqli_fetch_array($filas)){
                                echo '<option value="'.$datos[id].'">'.$datos[razonSocial].'</option>';
                            }
                        ?>
                    </select>
                </fieldset>
            </div>
            <!--/////////////////////BOTONES//////////////-->
            <div class="registrar">
                <button type="submit" class = "boton">Registrar</button>
            </div>
            <div class="modificar">
                <button type="submit" class = "boton">Modificar</button>
            </div>
            <div class="limpiar">
                <button type="reset" class = "boton">Limpiar</button>
            </div>
            <div class="eliminar">
                <button type="submit" class = "boton">Eliminar</button>
            </div>
        </form>
    </div>
</body>
</html>