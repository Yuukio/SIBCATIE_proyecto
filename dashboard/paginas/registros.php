<!DOCTYPE html>
<html>

    <?php
    $titulo = 'Registros';
    include_once '../plantillas/head-dashboard.php';

    $opciones = '<a href="#" style="color: #1ABB24">
                    <i class="material-icons">search</i>
                </a>
                <i>&nbsp;</i>
                <a href="#" style="color: #21B6BD">
                    <i class="material-icons">add_circle_outline</i>
                </a>
                <i>&nbsp;</i>
                <a href="#" style="color: #FF5733">
                    <i class="material-icons">add_a_photo</i>
                </a>';
    ?>

    <body class="theme-red">

        <?php
        $registros = "active";
        //------ Cargar Pantalla ------
        include_once '../plantillas/cargar-pantalla.php';
        //------ FINAL Cargar Pantalla ------
        //------ Barra superior ------
        include_once '../plantillas/barra-superior.php';
        // ------ FINAL - Barra ruperior ------
        // ------ Menu lateral ------
        include_once '../plantillas/menu-lateral.php';
        // ------ Final - Menu lateral ------
        
        include_once '../../app/Conexion.inc.php';
        
        $sql = "SELECT * FROM Planta";
        
        $sentencia = Conexion::obtener_conexion()->query($sql);
        
        $sentencia -> execute();
        ?>

        <!-- Centro del Contenido-->
        <section class="content" style="height: 10em">
            <!-- Contadores -->
            <div class="container-fluid">
                <!-- Basic Examples -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    REGISTRO DE ESPECIES
                                </h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="javascript:void(0);">Agregar nuevo registro</a></li>
                                            <li><a href="javascript:void(0);">Otra accion</a></li>
                                            <li><a href="javascript:void(0);">Cualquier cosa</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Familia</th>
                                                <th>Género</th>
                                                <th>Epíteto</th>
                                                <th>Nombre Científico</th>
                                                <th>Autor</th>
                                                <th>Fuente de información</th>
                                                <th>Fecha de ingreso</th>
                                                <th>Altura</th>
                                                <th>Forma</th>
                                                <th>Color</th>
                                                <th>Tipo de Hoja</th>
                                                <th>Determinada por</th>
                                                <th>Reproducción</th>
                                                <th>Visible</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Familia</th>
                                                <th>Género</th>
                                                <th>Epíteto</th>
                                                <th>Nombre Científico</th>
                                                <th>Autor</th>
                                                <th>Fuente de información</th>
                                                <th>Fecha de ingreso</th>
                                                <th>Altura</th>
                                                <th>Forma</th>
                                                <th>Color</th>
                                                <th>Tipo de Hoja</th>
                                                <th>Determinada por</th>
                                                <th>Reproducción</th>
                                                <th>Visible</th>

                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Basic Examples -->
            </div>
        </section>
        <!-- #FINAL# Centro del Contenido-->

        <?php
        include_once '../plantillas/dashboard-scripts.php';
        ?>
