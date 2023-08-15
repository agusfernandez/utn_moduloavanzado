<?php

require_once "control/plantilla.controlador.php";
require_once "control/formularios.controlador.php";
require_once "model/forms.model.php";

// Instanciar el objeto

$plantilla= new ControladorPlantilla();

// Ejecutar el metodo

$plantilla -> ctrGetPlantilla();