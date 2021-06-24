<?php 

class ControladorProducto {

    /* Get Categorias */
    public function ctrShowCategories($item, $valor) {
        $tabla = "categorias";
        $respuesta = ModeloProducto::mdlShowCategories($tabla, $item, $valor);
        return $respuesta;
    }

    /* Get Subcategorias */
    static public function ctrShowSubcategories($id) {
        $tabla = "subcategorias";
        $respuesta = ModeloProducto::mdlShowSubcategories($tabla, $id);
        return $respuesta;
    }

}