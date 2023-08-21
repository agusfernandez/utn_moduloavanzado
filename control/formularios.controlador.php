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

            if($response["email"] == $_POST["email-login"] && $response["password"] == $_POST["password-login"]){
                $_SESSION["validateLogin"] = "ok";
                echo '<script>
                        
                        /* si esta todo correcto q me lleve a esa ruta o la home*/
                        if(window.history.replaceState){
                            window.history.replaceState(null, null, window.location.href);
                        }
                        /*que redirija a la home o a la lista de usuarios*/
                        window.location = "index.php?ruta=inicio";
                </script>';
            } else {

                echo '<script>

                    if(window.history.replaceState){
                        window.history.replaceState(null,null,window.location.href);
                    }
    
                </script>';

                echo "<div class='alert'>Error al ingresar el sistema. El email o la contraseña estan incorrectas</div>";
            }
        }
    }


    //Update Register

    static public function ctrUpdateRegister(){
        if(isset($_POST['name-update'])){
            if($_POST['password-new'] != ""){
                $password= $_POST['password-new'];
            } else {
                $password= $_POST['password-update'];
                }
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


    // Delete Register

    static public function ctrDeleteRegister($table, $value){
        if (isset($_POST['deleteRegister'])){
            $table="registro";
            $value=$_POST['deleteRegister'];
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