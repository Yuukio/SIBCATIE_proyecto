<!DOCTYPE html>
<html>

    <?php
    $titulo = 'Home';
    include_once '../plantillas/head-dashboard.php';
    ?>

    <body class="theme-red">

        <?php
        $home = "active";
        //------ Cargar Pantalla ------
        include_once '../plantillas/cargar-pantalla.php';
        //------ FINAL Cargar Pantalla ------
        //------ Barra superior ------
        include_once '../plantillas/barra-superior.php';
        // ------ FINAL - Barra ruperior ------
        // ------ Menu lateral ------
        include_once '../plantillas/menu-lateral.php';
        // ------ Final - Menu lateral ------
        ?>

        <!-- Centro del Contenido-->
        <section class="content">
            <div class="container-fluid">

                <!--Primeros datos contadores-->
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box hover-zoom-effect">
                            <div class="icon bg-verde">
                                <i class="material-icons">speaker_notes</i>
                            </div>
                            <div class="content">
                                <div class="text">ESPECIES IDENTIFICADAS</div>
                                <div class="number">1500</div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box hover-zoom-effect">
                            <div class="icon bg-verde">
                                <i class="material-icons">speaker_notes_off</i>
                            </div>
                            <div class="content">
                                <div class="text">ESPECIES NO IDENTIFICADAS</div>
                                <div class="number">45</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box hover-zoom-effect">
                            <div class="icon bg-verde">
                                <i class="material-icons">folder_shared</i>
                            </div>
                            <div class="content">
                                <div class="text">USUARIOS REGISTRADOS</div>
                                <div class="number">75</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box hover-zoom-effect">
                            <div class="icon bg-verde">
                                <i class="material-icons">work</i>
                            </div>
                            <div class="content">
                                <div class="text">CANTIDAD DE ADMINISTRADORES</div>
                                <div class="number">20</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Segunda fila de datos-->
                <div class="row clearflix">
                    <div class="col-md-7">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>
                                            STRIPED ROWS
                                        </h2>
                                        <ul class="header-dropdown m-r--5">
                                            <li class="dropdown">
                                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li><a href="javascript:void(0);">Action</a></li>
                                                    <li><a href="javascript:void(0);">Another action</a></li>
                                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="body table-responsive">
                                        <table class="table table-striped" style="height: 400px">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>FIRST NAME</th>
                                                    <th>LAST NAME</th>
                                                    <th>USERNAME</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Larry</td>
                                                    <td>Jellybean</td>
                                                    <td>@lajelly</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>Larry</td>
                                                    <td>Kikat</td>
                                                    <td>@lakitkat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Larry</td>
                                                    <td>Jellybean</td>
                                                    <td>@lajelly</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>Larry</td>
                                                    <td>Kikat</td>
                                                    <td>@lakitkat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Larry</td>
                                                    <td>Jellybean</td>
                                                    <td>@lajelly</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>Larry</td>
                                                    <td>Kikat</td>
                                                    <td>@lakitkat</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        hola
                    </div>


                </div>
            </div>
        </section>

        <?php
        include_once '../plantillas/dashboard-scripts.php';
        ?>