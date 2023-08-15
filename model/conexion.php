<?php

class Conexion{
    static public function conectar(){
        $link = new PDO ("mysql:host=localhost; port=80; dbname=php_avanzando_sistema", 
        "root" , 
        "123456");
        $link -> exec("set name utf8"); // permite caracteres latinos
        return $link;
    }
}
