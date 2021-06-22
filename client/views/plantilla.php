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

    ?>

    <title>Libreria Neko</title>

    <link rel="stylesheet" href="views/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed">
    <link rel="stylesheet" href="views/css/plantilla.css">
    <link rel="stylesheet" href="views/css/encabezado.css">

    <script src="views/js/plugins/jquery.min.js"></script>
    <script src="views/js/plugins/bootstrap.min.js"></script>

</head>
<body>

<?php

    /* Header */    
    include "components/encabezado.php";

    if(isset($_GET["ruta"])) {
        echo $_GET["ruta"];
    }

?>

<script src="views/js/plantilla.js"></script>
<script src="views/js/encabezado.js"></script>


</body>
</html>