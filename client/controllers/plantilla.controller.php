<?php 


class ControladorPlantilla {

    /* Planitlla */
    public function plantilla() {
        include "views/plantilla.php";
    }

    /* Estilos dinámicos */
    public function ctrTemplateStyle() {
        $tabla = "plantilla";
        $respuesta = ModeloPlantilla::mdlTemplateStyle($tabla);
        return $respuesta;
    }

}