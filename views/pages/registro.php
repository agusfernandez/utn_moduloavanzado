<div class="d-flex align-items-center justify-content-center vh-100" style="height: 100vh;">
    <div class="mx-auto col-10 col-md-8 col-lg-6">
        <form action="" method="post" enctype="multipart/form-data">
            <h3>Registro</h3>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" required>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="lastname" placeholder="Ingrese su apellido" required>
            </div>
            <div class="input-group mb-3">
                <input type="email" class="form-control" name="email" placeholder="Ingrese su email" required>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Ingrese la contraseña" required>
            </div> 
            <?php
                $register= ControlForms::ctrRegistro();
            ?>           
            <input type="submit" class="btn btn-dark" value="enviar">       
        </form>
    </div>
</div>