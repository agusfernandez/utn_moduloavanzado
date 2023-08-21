<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maria Agustina Fernandez - Mysql y PHP Nivel Avanzado</title>
    <link rel="stylesheet" href="public/css/styles.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <ul class="nav justify-content-center menu-recetas">
    <li class="nav-item">
        <a class="nav-link active text-dark" href="index.php?ruta=inicio">Inicio</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark" href="index.php?ruta=ingreso">Ingreso</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark" href="index.php?ruta=registro">Registro</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark" href="index.php?ruta=userdata">Listado</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark" href="index.php?ruta=salir">Salir</a>
    </li>

    </ul>
    <div class="section-main">
            <?php

                if(isset($_GET['ruta'])){
                    if(
                        $_GET['ruta'] == 'inicio' ||
                        $_GET['ruta'] == 'ingreso' ||
                        $_GET['ruta'] == 'registro' ||
                        $_GET['ruta'] == 'userdata' ||
                        $_GET['ruta'] == 'salir'
                    ){
                        include "pages/" . $_GET['ruta'] . ".php";
                    } else{
                        include "pages/error404.php"; 
                    }
                }else{
                    include "pages/registro.php";
                }
            
            ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>    
</body>
</html>