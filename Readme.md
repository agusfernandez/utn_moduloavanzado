##### Resumen

- armado de vistas para el front
- conexion a base de datos
- armado de controladores para el back


##### MVC
modelo-vista-controlador

permite la modulacion del codigo

modelo--> logica- es el que accede de manera directa a la logica de los datos, actuando como "intermediario" de la base de datos
vista--> serian las vistas //front
controlador--> intermediario entre el modelo y la vista. Controla las interacciones del usuario solicitando los datos del modelador y enviandolo a la vista -> humanamente legible

##### PDO
conexion a base de datos

1- armar archivo para conectarse en base de datos
2- crear la clase conexion -> conexion.php

class Conexion _> new PDO // conexion con la base de datos

3- armado de base de datos
4- crear un controlador para los modelos y el modelo

modelo es el que hace la conexion y la interelacion con la base de datos >_ la que me va a pedir los datos
controlador -> intermediario entre lo que me pide el usuario y el mdelo

5- en modelos/ crear archivo para manjear los formularios

6- controlador -> crear controlador de formularios

7- conectar vista con controlador

Registro:

En el modelo de registro se agrego los metodos (forms.model.php)
-"seleccionar" los registros o ver un item -> con el Select ("seleccionamos el registro" y si coincide permitimos el ingreso). La idea del "seleccionar registro" es poder ver tosos los registros que tenemos para poder comparar si es el usuario que queremos o mostrarlos en una lista
-actualizar los registros

Luego en el controlador debo ingresar el modelo del "seleccionar" y el de login /que viene los datos a traves del metodo post

dentro del controlador del login mas alla de la verificacion de datos usando el modelo de seleccionarreigstros ingresamos uns cript que te tira un mensaje en caso de que sea  incorrecto e evita la recarga de la pag (evita que el usuario vuelva a  mandar los datos del fomulario para volver atras )

8- repetir lo mismo para las demas instancias

9- encriptacion de password en base de datos