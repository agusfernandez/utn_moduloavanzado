<div class="d-flex align-items-center justify-content-center vh-100" style="height: 100vh;">
    <div class="mx-auto col-10 col-md-8 col-lg-6">
        <form method="post" >
            <h3>Ingresar</h3>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email-login" placeholder="Ingrese su email" required>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password-login" placeholder="Ingrese la contraseña" required>
                </div>
                <?php
                    $login= new ControlForms();
                    $login -> ctrLogIn();
                ?>
                <button type="submit" class="btn btn-dark" value="submit">Iniciar Sesión</button>
        </form>
    </div>
</div>