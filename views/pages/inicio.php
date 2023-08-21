<?php

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



<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/images/slider1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="public/images/slider2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container home-section-cards">
    <div class="row">
        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card">
                <img class="card-img" src="public/images/card.jpg" alt="card1">
                <div class="card-img-overlay text-white d-flex flex-column justify-content-center">
                <h4 class="card-title">Servicios</h4>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card">
                <img class="card-img" src="public/images/card2.jpg" alt="card1">
                <div class="card-img-overlay text-white d-flex flex-column justify-content-center">
                <h4 class="card-title">Viajes</h4>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card">
                <img class="card-img" src="public/images/card3.jpg" alt="card1">
                <div class="card-img-overlay text-white d-flex flex-column justify-content-center">
                <h4 class="card-title">Contacto</h4>
                </div>
            </div>
        </div>
    </div>
</div>