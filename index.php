<?php
require_once("controladores/conexion.php");
require_once("controladores/funciones.php");
if ($_POST) {
    $ResultadoConsulta = mysqli_fetch_array(Consultar($conexion, $_POST["codigo"]), MYSQLI_ASSOC);
    print_r ($ResultadoConsulta);
}else {
    $ResultadoConsulta = mysqli_fetch_array(Consultar($conexion, null), MYSQLI_ASSOC);
    print_r ($ResultadoConsulta);
}
//variable que contiene el id del proveedor para poder recuperar la razonSocial de Proveedor para llenar el campo de este 
$idProveedor = $ResultadoConsulta["proveedores"]; 
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
        <form action="registrar.php" method="post" class ="contenedor" id ="formulario">
            <div class= "radio">
                <fieldset>
                    <label id= "identificador">
                        <input type="radio" name="opcion" value="registro" id = "radioRegistro" checked onclick="Registrar()"> Registrar Nuevo
                        <input type="radio" name="opcion" value="consulta" id = "radioConsulta" onclick="Consultar()"> Consultar o Modificar Registro
                    </label>
                </fieldset>
            </div>
            <!--/////////////////////////////CODIGO///////////////////-->
            <div>
                <fieldset>
                    <label for="codigo">Codigo</label><br>
                    <input type="text" name="codigo" id="codigo" required value= <?php echo $ResultadoConsulta['codigo'];?>>
                </fieldset>
            </div>
            <!--//////////////////DESCRIPCION/////////-->
            <div class="descripcion">
                <fieldset>
                    <label for="descripcion">Descripcion</label><br>
                    <input type="text" name="descripcion" id="descripcion" required style="width: 99%;" value= <?php echo $ResultadoConsulta['descripción'];?> >
                </fieldset>
            </div>
            <!--////////////////////////Seccion///////////////////////////////////////////-->
            <div class="seccion">
                <fieldset>
                    <label for="seccion">Seccion</label><br>
                    <select name="seccion" id="seccion" class = "seleccion" required>
                        <?php
                        //cuando se raliza la consulta el array tendra un id y gracias a eso se cargara la opcioin ya traida de la base de datos 
                        if ($ResultadoConsulta['id']) {
                            echo '<option selected value="'.$ResultadoConsulta[seccion].'">'.$ResultadoConsulta[seccion].'</option>';
                        }else{?>
                        <!--En caso contrario estara seleccionada la de elegir opcion-->
                        <option selected value = ""> Elige una opción </option>
                            <?php
                            } 
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
                    <select name="subseccion" id="subSeccion" class = "seleccion" required>
                        <?php
                        //cuando se raliza la consulta el array tendra un id y gracias a eso se cargara la opcioin ya traida de la base de datos 
                        if ($ResultadoConsulta['id']) {
                            echo '<option selected value="'.$ResultadoConsulta[subSeccion].'">'.$ResultadoConsulta[subSeccion].'</option>';
                        }else{?>
                            <option selected value=""> Elige una opción </option>
                        <?php
                            } 
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
                    <select name="marca" id="marca" class = "seleccion" required>
                        <?php
                        //cuando se raliza la consulta el array tendra un id y gracias a eso se cargara la opcioin ya traida de la base de datos 
                        if ($ResultadoConsulta['id']) {
                            echo '<option selected value="'.$ResultadoConsulta[marca].'">'.$ResultadoConsulta[marca].'</option>';
                        }else{?>
                            <option selected value=""> Elige una opción </option>
                        <?php
                        } 
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
                    <select name="otros" id="otros" class = "seleccion" required>
                        <?php
                        //cuando se raliza la consulta el array tendra un id y gracias a eso se cargara la opcioin ya traida de la base de datos 
                        if ($ResultadoConsulta['id']) {
                            echo '<option selected value="'.$ResultadoConsulta[otro].'">'.$ResultadoConsulta[otro].'</option>';
                        }else{?>
                            <option selected value=""> Elige una opción </option>
                        <?php 
                        }
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
                    <input type="number" name="cantIngresar" id="cantidad" min=0 required >
                </fieldset>
            </div>
            <!--//////////////////////EN STOCK////////////////////////////////-->
            <div class = "stock">
                <fieldset>
                    <label for="stock">En Stock</label><br>
                    <input type="number" name="stock" id="stock" disabled value= <?php echo $ResultadoConsulta['stock'];?>>
                </fieldset>
            </div>
            <!--//////////////////////IVA%////////////////////////////////-->
            <div class = "iva">
                <fieldset>
                    <label for="iva">IVA%</label><br>
                    <input type="number" name="iva" id="iva" required value= <?php echo $ResultadoConsulta['iva'];?>>
                </fieldset>
            </div>
            <!--//////////////////////RECARGO%////////////////////////////////-->
            <div class = "recargo">
                <fieldset>
                    <label for="recargo">Recargo%</label><br>
                    <input type="number" name="recargo" id="recargo" required value= <?php echo $ResultadoConsulta['recargo'];?>> 
                </fieldset>
            </div>
            <!--//////////////////////PRECION COMPRA////////////////////////////////-->
            <div class = "Pcompra">
                <fieldset>
                    <label for="precioCompra">P. Compra</label><br>
                    <input type="number" name="precioCompra" id="pcompra" required value= <?php echo $ResultadoConsulta['precioCompra'];?>>
                </fieldset>
            </div>
            <!--//////////////////////PRECIO VENTA////////////////////////////////-->
            <div class ="Pventa">
                <fieldset>
                    <label for="precioVenta">P. Venta</label><br>
                    <input type="number" name="precioVenta" id="pventa" required value= <?php echo $ResultadoConsulta['PrecioVenta'];?>>
                </fieldset>
            </div>
            <!--//////////////////////BAJA STOCK////////////////////////////////-->
            <div class = "Bstock">
                <fieldset>
                    <label for="bajaStock">Baja Stock</label><br>
                    <?php
                        if ($ResultadoConsulta['id']>0) { ?>
                            <input type="number" name="bajaStock" id="bstock">
                <?php   }else { ?>
                            <input type="number" name="bajaStock" id="bstock" disabled>
                <?php   }
                    ?>
                </fieldset>
            </div>
            <!--/////////////////////INPUT PARA RECUPERAR EL ID PARA ELIMINAR O MODIFICAR UN REGISTRO/////////-->
            <input type="number" name="id" id="id" hidden value=<?php echo $ResultadoConsulta['id'];?>>
            <!--//////////////////////PROVEEDORES////////////////////////////////-->
            <div class = "proveedores">
                <fieldset>
                    <label for="proveedores">Proveedoress</label><br>
                    <select name="proveedores" id="proveedores" class = "ListaProveedor" required>
                        <?php
                        if ($ResultadoConsulta["id"]) {
                            $proveedorConsulta = "SELECT razonSocial FROM `proveedores` WHERE id='$idProveedor'";
                            $resultadoProveedor = mysqli_fetch_array($conexion-> query($proveedorConsulta), MYSQLI_ASSOC);
                            echo '<option selected value="'.$ResultadoConsulta[proveedores].'">'.$resultadoProveedor[razonSocial].'</option>';
                        }else{?>
                            <option selected value=""> Elige una opción </option>
                        <?php
                            }
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
            <div class="registrar" >
            <!--El boton se desavilita cuando se realiza una consulta-->
        <?php if ($ResultadoConsulta["id"]) { ?>
                <button type="submit" class = "boton" id="Bregistro" disabled>Registrar</button>
        <?php }else { ?>
                <button type="submit" class = "boton" id="Bregistro">Registrar</button>
        <?php }?>
            </div>
            <div class="modificar">
                <button type="submit" class = "boton" onclick = "redireccionModificar()">Modificar</button>
            </div>
            <div class="limpiar">
                <button type="reset" class = "boton">Limpiar</button>
            </div>
            <div class="eliminar">
                <button type="submit" class = "boton" onclick = "redireccionEliminar()">Eliminar</button>
            </div>
        </form>
    </div>
</body>
</html>