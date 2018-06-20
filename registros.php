<!DOCTYPE html>
<html>

    <?php
    $titulo = 'Registros';
    include_once 'plantillas/head-dashboard.php';

    include_once 'app/LeerPlantas.inc.php';

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
        <section class="content" style="height: 10em">
            <!-- Contadores -->
            <div class="container-fluid">
                <!-- Basic Examples -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <!--<div class="header">
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
                            </div>-->
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
                                                <th>Ingreso</th>
                                                <!--<th>Fuente de información</th>
                                                <th>Altura</th>
                                                <th>Forma</th>
                                                <th>Color</th>
                                                <th>Tipo de Hoja</th>
                                                <th>Determinada por</th>
                                                <th>Reproducción</th>-->
                                                <th>Visible</th>
                                                <th>Revisión</th>
                                                <th>Opciones</th>
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
                                                <th>Ingreso</th>
                                                <!--<th>Fuente de información</th>
                                                <th>Altura</th>
                                                <th>Forma</th>
                                                <th>Color</th>
                                                <th>Tipo de Hoja</th>
                                                <th>Determinada por</th>
                                                <th>Reproducción</th>-->
                                                <th>Visible</th>
                                                <th>Revisión</th>
                                                <th>Opciones</th>

                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT P.idPlanta, P.autor, P.fecha_ingreso, P.fuente_informacion, P.altura, P.reproduccion, P.visible, P.revision, Fa.nombre_familia, 
                                                    Ge.nombre_genero, Ep.nombre_epiteto, Fo.nombre_forma, Co.nombre_color, De.nombre_determinado, Ti.nombre_hoja 
                                                    FROM Planta P 
                                                    INNER JOIN Familia Fa ON P.Familia_idFamilia = Fa.idFamilia
                                                    INNER JOIN Genero Ge ON P.Genero_idGenero = Ge.idGenero
                                                    INNER JOIN Epiteto Ep ON P.Epiteto_idEpiteto = Ep.idEpiteto
                                                    INNER JOIN Forma Fo ON P.Forma_idForma = Fo.idForma
                                                    INNER JOIN Color Co ON P.Color_idColor = Co.idColor
                                                    INNER JOIN TipoHoja Ti ON P.TipoHoja_idTipoHoja = Ti.idTipoHoja
                                                    INNER JOIN DeterminadaPor De ON P.DeterminadaPor_idDeterminadaPor = De.idDeterminadaPor";

                                            $consulta = Conexion::obtener_conexion()->query($sql);

                                            while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {

                                                $nombre_cientifico = $fila['nombre_genero'] . ' ' . $fila['nombre_epiteto'];
                                                $revision = $fila['revision'];
                                                $visible = $fila['visible'];

                                                /* ingreso de id mascara */
                                                $id = $fila['idPlanta'];

                                                $fecha = $fila['fecha_ingreso'];
                                                $fecha = explode('-', $fecha);
                                                $anno = $fecha[0];
                                                $mes = $fecha[1];
                                                $dia = $fecha[2];

                                                $id_nuevo = str_pad($id, 4, "0", STR_PAD_LEFT);

                                                $idMasc = $anno . $mes . $dia . $id_nuevo;

                                                /* ingreso de iconos de revision */
                                                if ($revision == 0) {

                                                    $revision = '
                                                        <a style="color: #E74C3C">
                                                            <i class="material-icons">close</i>
                                                        </a>
                                                        ';
                                                } else {
                                                    $revision = '
                                                        <a style="color: #27AE60">
                                                            <i class="material-icons">check</i>
                                                        </a>
                                                        ';
                                                }

                                                /* ingreso de iconos de visible */
                                                if ($visible == 0) {

                                                    $visible = '
                                                        <a style="color: #E74C3C">
                                                            <i class="material-icons">visibility_off</i>
                                                        </a>
                                                        ';
                                                } else {
                                                    $visible = '
                                                        <a style="color: #27AE60">
                                                            <i class="material-icons">visibility</i>
                                                        </a>
                                                        ';
                                                }

                                                /* comparar fechas 
                                                $sql_fecha = "SELECT MAX(p.fecha_ingreso), idPlanta FROM planta p";
                                                $consulta2 = Conexion::obtener_conexion()->query($sql_fecha);
                                                $fila_fecha = $consulta2->fetch(PDO::FETCH_ASSOC);
                                                
                                                $time = time();
                                                $hoy = date("Y-m-d", $time);
                                                $fecha_max = $fila_fecha['p.fecha_ingreso'];
                                                
                                                echo $hoy;
                                                echo $fecha_max;*/


                                                /* asignando en tabla */
                                                echo'
                                                <tr valign="top">
                                                <td>' . $idMasc . '</td> 
                                                <td>' . $fila['nombre_familia'] . '</td>
                                                <td>' . $fila['nombre_genero'] . '</td>
                                                <td>' . $fila['nombre_epiteto'] . '</td>
                                                <td>' . $nombre_cientifico . '</td>
                                                <td>' . $fila['autor'] . '</td>
                                                <td>' . $fila['fecha_ingreso'] . '</td>
                                                <td style="text-align:center; width: 5px;">' . $visible . '</td>
                                                <td style="text-align:center; width: 5px;">' . $revision . '</td>
                                                <td style="text-align:center;">
                                                    <a href="#" style="color: #3498DB">
                                                        <i class="material-icons">search</i>
                                                    </a>
                                                        <i>&nbsp;</i>
                                                    <a href="#" style="color: #F39C12">
                                                        <i class="material-icons">add_a_photo</i>
                                                    </a>
                                                </td>
                                                </tr>
                                                ';
                                            }
                                            ?>
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
        include_once 'plantillas/dashboard-scripts.php';
        ?>
