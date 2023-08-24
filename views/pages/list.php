
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

    $users = ControlForms::ctrSelectRegister(null, null);


?>

<div class="container">
    <div class="row">
        <?php foreach ($users as $key => $value): ?>

            <div class="card" style="width: 18rem;">

                    <div class="card-body">
                        <p class="card-text"><?php echo ($key+1); ?></p>
                        <h5 class="card-title"><?php echo $value["name"]; ?></h5>
                        <p class="card-text"><?php echo $value["email"]; ?></p>
                        <p class="card-text"><?php echo $value["fecha"]; ?></p>
                        <div class="actions">
                            <a href="index.php?ruta=edit&id=<?php echo $value["id"]; ?>" class="btn btn-primary">Editar</a>

                            <form method="post">
                                <input type="hidden" value="<?php echo $value["id"]; ?>" name="deleteRegister">
                                <button type="submit" class="btn btn-primary">Borrar</button>
                                <?php

                                    $delete = new ControlForms();
                                    $delete -> ctrDeleteRegister();
                                ?>

                            </form>
                        </div>
                    </div>

                </div>

        <?php endforeach ?>
    </div>
</div>



