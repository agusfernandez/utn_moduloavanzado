<?php

class Conexion{
    static public function conectar(){
        $link = new PDO ("mysql:host=localhost; port=80; dbname=agustina_fernandez",
        "root" , 
        "123456");
        $link -> exec("set names utf8"); // permite caracteres latinos
        return $link;
    }
}
