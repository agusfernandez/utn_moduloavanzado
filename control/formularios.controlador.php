<?php

Class ControlForms{
    // De donde obtenemos los datos
    // se toma el name del formulario de cada input

    static public function ctrRegistro(){
        // si se escribe algo en el input
        if(isset($_POST["name"])){
            if(preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["name"]) &&
                preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["email"]) &&
                preg_match('/^[0-9a-zA-Z]+$/', $_POST["password"])){

                $table = "registro";

                $encriptarPassword = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                $data = array(
                    "name" => $_POST['name'],
                    "lastname" => $_POST['lastname'],
                    "email" => $_POST['email'],
                    "password" => $encriptarPassword
                );

                $response= ModelForms::mdlRegister($table,$data);
                return $response;

            }

        }
    }

    //Seleccionar Registro

    static public function ctrSelectRegister($item, $value){
        $table="registro";
        $response= ModelForms::mdlSelectRegister($table, $item, $value);
        return $response;
    }

    //Login

    static public function ctrLogIn(){
        if(isset($_POST["email-login"])){
            $table="registro";
            $item="email";
            $value= $_POST["email-login"];

            $response= ModelForms::mdlSelectRegister($table, $item, $value);

            $encriptarPassword = crypt($_POST["password-login"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');


            if($response['email'] == $_POST['email-login'] && $response['password'] == $encriptarPassword){
                $_SESSION['validateLogin'] = "ok";
                echo "<script>
                        
                        /* si esta todo correcto q me lleve a esa ruta o la home*/
                        if(window.history.replaceState){
                            window.history.replaceState(null, null, window.location.href);
                        }
                        /*que redirija a la home o a la lista de usuarios*/
                        window.location = 'index.php?ruta=list';
                </script>";
            } else {

                echo '<script>

                    if(window.history.replaceState){
                        window.history.replaceState(null,null,window.location.href);
                    }
    
                </script>';

                echo "<div class='alert alert-danger' role='alert'>Error al ingresar el sistema. El email o la contraseña estan incorrectas</div>";
            }
        }
    }


    //Update Register

    static public function ctrUpdateRegister(){
        if(isset($_POST['name-update'])){
            if($_POST['password-update'] != ""){
                $password= $_POST['password-update'];
            } else {
                $password= $_POST['passwordActual'];
            }

            $table = "registro";

            $data = array(
                "id" => $_POST['iduser'],
                "name" => $_POST['name-update'],
                "lastname" => $_POST['lastname-update'],
                "email" => $_POST['email-update'],
                "password" => $password
           );

            $response= ModelForms::mdlUpdateRegister($table, $data);

            if($response == "ok"){
                echo '<script>

                     if(window.history.replaceState){
                         window.history.replaceState(null, null, window.location.href);
                     }
                     
                     window.location= "index.php?ruta=list";
                            
                </script>';
                
            }

        }
    }


    // Delete Register

    static public function ctrDeleteRegister(){
        if (isset($_POST["deleteRegister"])){
            $table="registro";
            $value=$_POST["deleteRegister"];
            $response= ModelForms::mdlDeleteregister($table, $value);

            if($response == 'ok'){
                echo '<script>
                        
                        if(window.history.replaceState){
                            window.history.replaceState(null, null, window.location.href);
                        }
                        
                        window.location = "index.php?ruta=list";
            

                </script>';
            }
        }
    }
}    