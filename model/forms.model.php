<?php

require_once 'conexion.php'; // me aseguro q lo llame solo una vez

class ModelForms{
    // Register
    static public function mdlRegister($table, $data){
        $smt = Conexion::conectar()->prepare("INSERT INTO $table(name, lastname, email, password) VALUES (:name, :lastname, :email, :password)");
        // prepare -> sentencia preparada
        //formatear los datos
        $smt -> bindParam(":name", $data['name'], PDO::PARAM_STR); // bindParam -> cm formateamos la info q vamos a recibir
        $smt -> bindParam(":lastname", $data['lastname'], PDO::PARAM_STR);
        $smt -> bindParam(":email", $data['email'], PDO::PARAM_STR);
        $smt -> bindParam(":password", $data['password'], PDO::PARAM_STR);

        //chequear si esta todo bn o no

        if($smt->execute()){
            return 'okey';
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }
        

        $smt->closeCursor();
        $smt = null; // pasar nulos los datos por seguridad
    }   
}