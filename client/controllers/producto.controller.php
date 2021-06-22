<?php 

class ControladorProducto {

    /* Get Categorias */
    public function ctrShowCategories() {
        $tabla = "categorias";
        $respuesta = ModeloProducto::mdlShowCategories($tabla);
        return $respuesta;
    }

    /* Get Subcategorias */
    static public function ctrShowSubcategories($id) {
        $tabla = "subcategorias";
        $respuesta = ModeloProducto::mdlShowSubcategories($tabla, $id);
        return $respuesta;
    }

}