<?php

    if(!isset($_SESSION["validateAccess"])){
        echo '<script>
              
              window.location = "index.php?ruta=ingreso.php"; 
              
         </script>';

        return;

    } else{
        if($_SESSION["validateAccess"]!= "ok"){
            echo '<script>
              
              window.location = "index.php?ruta=ingreso.php"; 
              
            </script>';

            return;
        }
    }

    $users = ControlForms::ctrSelectRegister(null, null);

?>





