# ABM de Productos, Usuarios y Proveedores
Este es un proyecto que implementa un sistema de ABM (alta, baja y modificación) de productos, proveedores y Usuarios, utilizando las tecnologías de HTML, CSS, PHP y MySQL. 
"En este proyecto no fueron utilizadas ninguna libreria de terceros para la realizacion del frontEnd."

## Requerimientos
Para ejecutar este proyecto en su computadora, necesitará los siguientes elementos:

- Un servidor web local (por ejemplo, Apache)
- PHP versión 7 o superior
- MySQL versión 5.0 o superior
- Navegador web moderno (Chrome, Firefox, Safari, etc.)
## Instalación
- Clone este repositorio o descárguelo como un archivo zip y extráigalo en su servidor web local.
- Cree una base de datos MySQL llamada "inventario" y ejecute el script "baseDeDatos.sql" que se encuentra en el repositorio para crear la tabla "producto".
- Abra el archivo "conexion.php" y modifique las variables "$hostname", "$username", "$password" y "$dbname" con la información de su servidor MySQL.
- Abra el archivo "index.php" en su navegador web.
## Uso
Una vez que haya iniciado la aplicación en su navegador, Encontra un Login de registro
Para ingresar al sistema puede utilizar las credenciales:
```
usuario:'Admin'
contraseña:'Admin123'
```
estos ya se encuentran por defecto en la aplicacion.

### Una vez logueado, encontrará las siguientes funcionalidades de ABM productos:

- Selecionar Alta O consulta de productos: Haga clic en el radio Buton ubicado en la esquina superior derecha para seleccionar si se va a consulta o agareagar un Producto.
- Alta de producto: para agregar un nuevo producto. Complete el formulario y haga clic en "Registrar".
- Consultar: para consultar puede escribir el codigo de producto o el nombre del mismo para realizar dicha busqueda.
- Listado de productos: En la página principal, encontrará una lista de todos los productos registrados en la base de datos.
- Modificación de productos: consultar le producto y luego haga clic en "Modificar".
- Eliminación de productos: Consulte el producto que decea eliminar y haga clic en "Eliminar"
#### En el lado izquierdo de la pantalla encontramos una barra de navegacion en el cual al hacer clic en productos, proveedores o usuarios nos mostrara una lista de los registros y encontraremos un boton para agregar un nuevo registro.
##### "Este proyecto no tiene las funciones de editar y modificar proveedores o Usuarios, por unas cuestiones agenas al desarrollador, dicatadas por el jefe de proyecto."



Este proyecto fue desarrollado por Alex Rivé como parte de un proyecto durante una practica laboral. Siéntase libre de utilizarlo y modificarlo según sus necesidades.
