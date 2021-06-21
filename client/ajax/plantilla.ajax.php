<?php 

require_once "../controllers/plantilla.controller.php";
require_once "../models/plantilla.model.php";

class AjaxPlantilla {

    public function ajaxTemplateStyle() {
       
        $controlador_plantilla = new ControladorPlantilla;
        $respuesta = $controlador_plantilla->ctrTemplateStyle();


        echo json_encode($respuesta);
    }

}

$objeto = new AjaxPlantilla();
$objeto->ajaxTemplateStyle();