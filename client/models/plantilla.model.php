<?php 

require_once "conexion.php";

class ModeloPlantilla {

    static public function mdlTemplateStyle($tabla) {
        $pdo = new Conexion();
        $stmt = $pdo->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt->fetch();
        $stmt->close();

    }

}
