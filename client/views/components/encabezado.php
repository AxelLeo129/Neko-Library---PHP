<!--- TOP -->

<div class="container-fluid superior--bar" id="cima">
    <div class="container">
        <div class="row">
            <!-- Redes sociales -->
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 social">
                <ul>

                    <?php 
                    
                        $social = ControladorPlantilla::ctrTemplateStyle();
                        $json_redes_sociales = json_decode($social["redes_sociales"], true);
                        foreach ($json_redes_sociales as $key => $value) {
                            echo '<li>
                                    <a href="'. $value["url"] .'" target="_blank">
                                        <i class="fa '. $value["red"] . ' social--network ' . $value["estilo"] . '" aria-hidden="true"></i>
                                    </a> 
                                </li>';
                        }

                    ?>

                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 register">
                <ul>
                    <li>
                        <a href="#ventana_login" data-toggle="modal">Ingresar</a> 
                    </li>
                    <li>|</li>
                    <li>
                        <a href="#modal_registro" data-toggle="modal">Crear una cuenta</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--- HEADER -->
<header class="container-fluid">
    <div class="container">
        <div class="row" id="cabezote">
            <!--- Logo -->
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logo">
                <a href="#">
                    <img src="http://neko-library---php.test/admin/<?php echo $social["logo"]; ?>" class="img-responsive">
                </a>
            </div>
            <!--- Categorías y buscador -->
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                <!--- Botón categorías -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 back--color" id="btn_categorias">
                    <p>CATEGORÍAS 
                        <span class="pull-right"><i class="fa fa-bars" aria-hidden="true"></i></span>
                    </p>
                </div>
                <!--- Buscador -->
                <div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12" id="buscador"> 
                    <input type="search" name="buscar" class="form-control" placeholder="Buscar...">
                    <span class="input-group-btn">
                        <a href="#">
                            <button class="btn btn-default back--color" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </a>
                    </span>
                </div>
            </div>
            <!--- Carrito de compras -->
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="carrito">
                <a href="#">
                    <button class="btn btn-default pull-left back--color">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </button>
                </a>
                <p>TU CESTA <span class="quantity-cart"></span> <br> USD $ <span class="sum-cart"></span></p>
            </div>
        </div>
        <!--- Categorías -->
        <div class="col-sx-12 back--color" id="categorias">

            <?php 
            
                $controlador_producto = new ControladorProducto();
                $categorias = $controlador_producto->ctrShowCategories(null, null);
                
                foreach ($categorias as $key => $value) {
                    echo '<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                            <h4>
                                <a href="' . $value['ruta'] . '" class="pixel--categories">'. $value['nombre'] . '</a>
                            </h4>
                            <hr>
                            <ul>';

                            $subcategorias = ControladorProducto::ctrShowSubcategories("categoria_id", $value["id"]);
                            
                            foreach ($subcategorias as $key => $value) {
                                echo '<li><a href="' . $value['ruta'] . '" class="pixel--subcategories">'. $value['nombre'] .'</a></li>';
                            }

                            echo '</ul>
                        </div>';
                }
            

            ?>

        </div>
    </div>
</header>