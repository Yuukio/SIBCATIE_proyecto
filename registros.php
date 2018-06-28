<!DOCTYPE html>
<html>

    <?php
    $titulo = 'Registros';
    include_once 'plantillas/head-dashboard.php';
    ?>

    <body class="theme-red">

        <?php
        $registros = "active";
        //------ Cargar Pantalla ------
        include_once 'plantillas/cargar-pantalla.php';
        //------ FINAL Cargar Pantalla ------
        //------ Barra superior ------
        include_once 'plantillas/barra-superior.php';
        // ------ FINAL - Barra ruperior ------
        // ------ Menu lateral ------
        include_once 'plantillas/menu-lateral.php';
        // ------ Final - Menu lateral ------
        ?>
        

        <!-- Centro del Contenido-->
        <section class="content">
            <div class="container-fluid">

                <!--*******************************-->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <ul class="nav nav-tabs" style="font-size: 18px">
                        <li class="active"><a data-toggle="tab" href="#home">Especies</a></li>
                        <li><a data-toggle="tab" href="#menu1">Usuarios</a></li>
                        <li><a data-toggle="tab" href="#menu2">Catálogos</a></li>
                    </ul>

                    <div class="tab-content">

                        <!--******************************TAB 1-->
                        <div id="home" class="tab-pane fade in active" style="padding-top: 20px">

                            <!--**********REGISTRO DE ESPECIES****************************-->
                            <?php
                            include_once './plantillas/registro-plantas.inc.php';
                            ?>

                            <select class="form-control">
                                <?php
                                /* $sql = "SELECT nombre_familia from familia ORDER BY nombre_familia ASC";
                                  $consulta = Conexion::obtener_conexion()->query($sql);
                                  while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {

                                  echo '<option>' . $fila['nombre_familia'] . '</option>';
                                  } */
                                ?>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>

                        </div>

                        <!--******************************TAB 2-->
                        <div id="menu1" class="tab-pane fade" style="padding-top: 20px">
                            <div class="row clearfix">

                                <!--**********LISTA DE USUARIOS****************************-->
                                <?php
                                include_once './plantillas/lista-usuarios.inc.php';
                                ?>

                                <!--**********REGISTRO DE USUARIOS********************-->
                                <?php
                                include_once './plantillas/registro-usuarios.inc.php';
                                ?>

                            </div>
                        </div>

                        <!--******************************TAB 3-->
                        <div id="menu2" class="tab-pane fade" style="padding-top: 20px">

                            <!--**********CATALOGOS DE MANTENIMIENTO********************-->

                            <?php
                            include_once './plantillas/mantenimiento_catalogos.inc.php';
                            ?>

                        </div>
                    </div>
                </div>
                <!--*******************************-->

            </div>
        </section>

        <?php
        include_once './plantillas/modal.inc.php';
        ?>
        <!-- #FINAL# Centro del Contenido-->

        <?php
        include_once 'plantillas/dashboard-scripts.php';
        ?>