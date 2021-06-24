<?php 

//Controladores
require_once "controllers/plantilla.controller.php";
require_once "controllers/producto.controller.php";
//Modelos
require_once "models/plantilla.model.php";
require_once "models/producto.model.php";
require_once "models/ruta.php";

$plantilla = new ControladorPlantilla();
$plantilla->plantilla();