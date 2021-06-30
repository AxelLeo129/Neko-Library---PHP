<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="title" content="Libreria Neko">
    <meta name="description" content="...">
    <meta name="keyword" content="....">

    <?php 
    
        $icono = ControladorPlantilla::ctrTemplateStyle();
        echo '<link rel="icon" href="http://neko-library---php.test/admin/' . $icono["icono"] .'">';

        /* Ruta fija */
        $ruta = new Ruta();
        $enlace = $ruta->ctrRoute();

    ?>

    <title>Libreria Neko</title>

    <link rel="stylesheet" href="<?php echo $enlace ?>views/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $enlace ?>views/css/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed">
    <link rel="stylesheet" href="<?php echo $enlace ?>views/css/plantilla.css">
    <link rel="stylesheet" href="<?php echo $enlace ?>views/css/encabezado.css">
    <link rel="stylesheet" href="<?php echo $enlace ?>views/css/diapositivas.css">

    <script src="<?php echo $enlace ?>views/js/plugins/jquery.min.js"></script>
    <script src="<?php echo $enlace ?>views/js/plugins/bootstrap.min.js"></script>

</head>
<body>

<?php

    /* Header */    
    include "components/encabezado.php";

    /* Contenido dinámico */
    $rutas = array();
    $ruta = "";

    if(isset($_GET["ruta"])) {
        $rutas = explode("/", $_GET["ruta"]);

        $item = "ruta";
        $valor = $_GET["ruta"];

        /* URL's amigables de categorías */
        $controlador_producto = new ControladorProducto();
        $ruta_categorias = $controlador_producto->ctrShowCategories($item, $valor);

        if($rutas[0] == $ruta_categorias["ruta"]) {
            $ruta = $rutas[0];
        }

        /* URL's amigables de subcategorías */
        $ruta_subcategorias = $controlador_producto->ctrShowSubcategories($item, $valor);

        foreach ($ruta_subcategorias as $key => $value) {
            if($rutas[0] == $value["ruta"]) {
                $ruta = $rutas[0];
            }
        }

        /* Lista blanca */
        if($ruta != null) {
            include "components/productos.php";
        } else {
            include "components/error404.php";
        }
    } else {
        include "components/diapositivas.php";
    }

?>

<script src="<?php echo $enlace ?>views/js/plantilla.js"></script>
<script src="<?php echo $enlace ?>views/js/encabezado.js"></script>


</body>
</html>