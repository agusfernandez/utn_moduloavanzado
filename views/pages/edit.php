<?php

    if(isset($_GET['id'])){
        $item= 'id';
        $value= $_GET['id'];

        $user= ControlForms::ctrSelectRegister($item, $value);
    }

?>

<div class="d-flex align-items-center justify-content-center vh-100" style="height: 100vh;">
    <div class="mx-auto col-10 col-md-8 col-lg-6">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="input-group mb-3">
                <input type="text" class="form-control" value="<?php echo $user['name']?>'" name="name-update" placeholder="Ingrese su nombre" required>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" value="<?php echo $user['lastname']?>'" name="lastname-update" placeholder="Ingrese su apellido" required>
            </div>
            <div class="input-group mb-3">
                <input type="email" class="form-control" value="<?php echo $user['email']?>'" name="email-update" placeholder="Ingrese su email" required>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" value="<?php echo $user['password']?>'" name="password-update" placeholder="Ingrese la contraseña" required>
            </div>

            <div class="input-group mb-3">
                <input type="hidden" class="form-control" value="<?php echo $user['id']?>'" name="iduser" placeholder="Ingrese la contraseña" required>
            </div>

            <?php
                $updateInfo= ControlForms::ctrUpdateRegister();
                if($updateInfo=="ok"){

                    echo '<script>
                         
                         if (window.history.replaceState){
                             window.history.replaceState(null, null, window:location.href);
                         }    
                    
                    </script>';

                    echo '<div class="alert alert-success">El usuario ha sido actualizado</div>

                    /*agrego timeout para que me mande el index*/
                    
                    <script>
                    
                        setTimeout(function()){
                            window.location = "index.php?ruta=inicio";
                        }
                
                    </script>
                
                    ';
                }

            ?>
            <input type="submit" class="btn btn-dark" value="update">
        </form>
    </div>
</div>
