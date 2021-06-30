<?php 

require_once "conexion.php";

class ModeloProducto {

    /* Get Categorias */
    static public function mdlShowCategories($tabla, $item, $valor) {

        if($item != null) {
            $pdo = new Conexion();
            $stmt = $pdo->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);  
            $stmt->execute();
            return $stmt->fetch();
        } else {
            $pdo = new Conexion();
            $stmt = $pdo->prepare("SELECT * FROM $tabla");
            $stmt->execute();
            return $stmt->fetchAll();
        }

        $stmt->close();
    }

    /* Get Subcategorias */
    static public function mdlShowSubcategories($tabla, $item, $valor) {
        $pdo = new Conexion();
        $stmt = $pdo->prepare("SELECT * FROM $tabla WHERE $item = :$item");
        $stmt->bindParam(":" . $item, $valor, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }

}