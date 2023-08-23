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

<table class="tabla">
    <thead>
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Fecha</th>
        <th>Acciones</th>
    </tr>
    </thead>

    <tbody>

    <?php foreach ($usuarios as $key => $value): ?>

        <tr>
            <td><?php echo ($key+1); ?></td>
            <td><?php echo $value["name"]; ?></td>
            <td><?php echo $value["email"]; ?></td>
            <td><?php echo $value["date"]; ?></td>
            <td>

                <div>
                    <a href="index.php?ruta=editar&id=<?php echo $value["id"]; ?>" class="boton_editar">Editar</a>

                    <form method="post">

                        <input type="hidden" value="<?php echo $value["id"]; ?>" name="deleteRegister">

                        <button type="submit" class="boton_borrar">Borrar</button>

                        <?php

                        $eliminar = new ControlForms();
                        $eliminar -> ctrDeleteRegister();

                        ?>

                    </form>

                </div>


            </td>
        </tr>

    <?php endforeach ?>

    </tbody>
</table>


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




