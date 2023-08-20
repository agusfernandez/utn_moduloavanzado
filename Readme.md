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

7- conextar vista con controlador