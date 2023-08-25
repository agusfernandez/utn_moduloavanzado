<?php

//nombre: id20486541_agustinafernandez
// user: id20486541_agustinafernandez
// password: id20486541_agustinafernandez

class Conexion{
    static public function conectar(){
        /*$link = new PDO ("mysql:host=localhost; port=80; dbname=agustina_fernandez",
        "root" , 
        "123456");*/
        $link = new PDO ("mysql:host=localhost; port=80; dbname=id20486541_agustinafernandez",
            "id20486541_agustinafernandez" ,
            "id20486541_agustinafernandez");
        $link -> exec("set names utf8"); // permite caracteres latinos
        return $link;
    }
}
