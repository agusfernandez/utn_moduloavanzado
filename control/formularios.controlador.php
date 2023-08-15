<?php

Class ControlForms{
    // De donde obtenemos los datos
    // se toma el name del formulario de cada input

    static public function ctrRegistro(){
        // si se escribe algo en el input
        if(isset($_POST["name"])){
            $table = "registro";
            $data = array(
                "name" => $_POST['name'],
                "lastname" => $_POST['lastname'],
                "email" => $_POST['email'],
                "password" => $_POST['password']
            );

            $response= ModelForms::mdlRegister($table,$data);
            return $response;

        }
    }
}