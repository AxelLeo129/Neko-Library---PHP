<?php 


class ControladorPlantilla {

    /* Planitlla */
    public function plantilla() {
        include "views/template.php";
    }

    /* Estilos dinámicos */
    public function ctrTemplateStyle() {
        $tabla = "plantilla";
        $respuesta = ModeloPlantilla::mdlTemplateStyle($tabla);
        return $respuesta;
    }

}