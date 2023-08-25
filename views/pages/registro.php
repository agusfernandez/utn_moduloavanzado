<div class="d-flex align-items-center justify-content-center vh-100" style="height: 100vh;">
    <div class="mx-auto col-10 col-md-8 col-lg-6">
        <form action="" method="post" enctype="multipart/form-data">
            <h3>Registro</h3>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese su nombre" required>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Ingrese su apellido" required>
            </div>
            <div class="input-group mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su email" required>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese la contraseña" required>
            </div> 
            <?php
                $register= ControlForms::ctrRegistro();

            if($register =="ok"){

                echo '<script> 
                    if (window.history.replaceState){
                    window.history.replaceState(null,null, window.location.href);
                    }
                    </script>';

                echo '<div class="alert alert-success" role="alert"> El usuario se ha registrado con exito </div>';
            }
            if ($register == "error"){
                echo '<script> 
                if (window.history.replaceState){
                    window.history.replaceState(null,null, window.location.href);
                }
                </script>';

                echo '<div class="alert alert-danger" role="alert"> Error, no se permiten caracteres especiales </div>';
            }
            ?>           
            <input type="submit" class="btn btn-dark" value="enviar">       
        </form>
    </div>
</div>