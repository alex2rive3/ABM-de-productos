//HABILITA TODOS LOS CAMPOS
function Registrar() {
    console.log("Habilitando campos...");
    document.forms['formulario'].action = "registrar.php";
    document.getElementById('cantidad').disabled = false;
    document.getElementById('iva').disabled = false;
    document.getElementById('recargo').disabled = false;
    document.getElementById('pcompra').disabled = false;
    document.getElementById('pventa').disabled = false;
    document.getElementById('bstock').disabled = false;
    document.getElementById('Bregistro').innerHTML = "Registrar"
}
//DESABILITA CAMPOS QUE NO SON NECESARIOS PARA REALIZAR UNA CONSULTA
function Consultar() {
    console.log("Desabilitando campos...");
    document.forms['formulario'].action = "index.php";
    document.getElementById('cantidad').disabled = true;
    document.getElementById('iva').disabled = true;
    document.getElementById('recargo').disabled = true;
    document.getElementById('pcompra').disabled = true;
    document.getElementById('pventa').disabled = true;
    document.getElementById('bstock').disabled = true;
    document.getElementById('Bregistro').innerHTML = "Consultar"
}
function redireccionModificar(){
    document.forms['formulario'].action = "modificar.php";
}
function redireccionEliminar() {
    document.forms['formulario'].action = "eliminar.php";
}