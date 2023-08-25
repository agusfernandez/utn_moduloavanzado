<?php

require_once '../control/formularios.controlador.php';
require_once '../model/forms.model.php';

class AjaxFormularios{
    public $validarEmail;

    public function ajaxValidarEmail(){
        $item="email";
        $value= $this ->validarEmail;

        $response=ControlForms::ctrSelectRegister($item, $value);
        echo json_encode($response);
    }

}

if(isset($_POST["validarEmail"])){

    $valEmail = new AjaxFormularios;
    $valEmail->validarEmail = $_POST["validarEmail"];
    $valEmail->ajaxValidarEmail();

}