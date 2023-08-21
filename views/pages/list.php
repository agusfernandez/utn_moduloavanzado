<?php

    session_start();

    if(!isset($_SESSION["validateLogin"])){

        echo '<script>window.location = "index.php?ruta=ingreso";</script>';

        return;

    }else{

        if($_SESSION["validateLogin"] != "ok"){

            echo '<script>window.location = "index.php?ruta=ingreso";</script>';

            return;
        }

    }

$usuarios = ControlForms::ctrSelectRegister(null, null);


?>


<div class="row">

    <span>entre</span>


    <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">

            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>

        </div>
    </div>

</div>




