<?php

require_once 'conexion.php'; // me aseguro q lo llame solo una vez

class ModelForms{

    // New Register
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
            return 'ok';
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }
        

        $smt->closeCursor();
        $smt = null; // pasar nulos los datos por seguridad
    }

    // Revisar los registros -> $item para ver si quiero mostrar uno solo
    static public function mdlSelectRegister($table, $item, $value){
        if($item == null && $value==null ){
            // me traiga la data por orden de fecha
            $smt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $table ORDER BY id DESC");


            $smt -> execute();
            return $smt -> fetchAll();

        } else {
            $smt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $table WHERE $item = :$item ORDER BY id DESC");


            $smt -> bindParam(":" . $item, $value,  PDO::PARAM_STR);

            $smt -> execute();
            return $smt -> fetch();
            $smt -> closeCursor();
        }

        $smt = null;
    }


    // Actualizar el Registro

    static public function mdlUpdateRegister($table, $data){

        $smt = Conexion::conectar()->prepare("UPDATE $table SET name=:name,lastname=:lastname, email=:email, password=:password WHERE id = :id");

        $smt->bindParam(":name", $data["name"], PDO::PARAM_STR);
        $smt->bindParam(":lastname", $data["lastname"], PDO::PARAM_STR);
        $smt->bindParam(":email", $data["email"], PDO::PARAM_STR);
        $smt->bindParam(":password", $data["password"], PDO::PARAM_STR);
        $smt->bindParam(":id", $data["id"], PDO::PARAM_INT);

        if ($smt->execute()) {
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }



        $smt->closeCursor();
        $smt = null; // pasar nulos los datos por seguridad
    }

    static public function mdlDeleteregister($table, $value){
        $smt = Conexion::conectar()->prepare("DELETE FROM $table WHERE id = :id");
        $smt->bindParam(":id", $value, PDO::PARAM_INT);



        if($smt->execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $smt->closeCursor();
        $smt=null;
    }


}