<div class="row clearfix">
    <div class="col-md-4">
        <div class="card" style="height: 300px">
            <div class="header bg-orange">
                <h2>NUEVA TABLA</h2>
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
            <div class="body" style="height: 300px">

                <div class="table-responsive" style="height: 200px">
                        <!--<table class="table table-bordered table-striped table-hover">-->
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr style="background: white">
                                <th>ID</th>
                                <th>Familia</th>
                                <th>Ingreso</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql_no_identificadas = "SELECT f.nombre_familia, p.fecha_ingreso, p.idPlanta 
                                                                            FROM planta p 
                                                                            INNER JOIN familia f ON p.Familia_idFamilia = f.idFamilia 
                                                                            WHERE p.revision = 0";

                            $consulta_no_identificadas = Conexion::obtener_conexion()->query($sql_no_identificadas);

                            while ($file_no_identificada = $consulta_no_identificadas->fetch(PDO::FETCH_ASSOC)) {

                                $id_no_identificada = $file_no_identificada['idPlanta'];

                                $fecha = $file_no_identificada['fecha_ingreso'];
                                $fecha = explode('-', $fecha);
                                $anno = $fecha[0];
                                $mes = $fecha[1];
                                $dia = $fecha[2];

                                $id_nuevo = str_pad($id_no_identificada, 4, "0", STR_PAD_LEFT);

                                $idMasc_no_identificada = $anno . $mes . $dia . $id_nuevo;

                                echo'
                                                        <tr valign="top">
                                                            <td>' . $id_nuevo . '</td> 
                                                            <td>' . $file_no_identificada['nombre_familia'] . '</td>
                                                            <td>' . $file_no_identificada['fecha_ingreso'] . '</td>
                                                            <td style="text-align:center;">
                                                                <a href="#" style="color: #5DADE2">
                                                                    <i class="material-icons">edit</i>
                                                                </a>
                                                                    <i>&nbsp;</i>
                                                                <a href="#" style="color: #E74C3C">
                                                                    <i class="material-icons">delete</i>
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

    <div class="col-md-4">
        <!--Especies no identificadas-->
        <div class="card" style="height: 300px">
            <div class="header bg-red">
                <h2>ESPECIES INDEFINIDAS</h2>
                <ul class="header-dropdown m-r--5">
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons">zoom_out_map</i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Agregar nuevo registro</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">

                <div class="table-responsive" style="height: 200px">
                <!--<table class="table table-bordered table-striped table-hover">-->
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr style="background: white">
                                <th>ID</th>
                                <th>Familia</th>
                                <th>Ingreso</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql_no_identificadas = "SELECT f.nombre_familia, p.fecha_ingreso, p.idPlanta 
                                                                            FROM planta p 
                                                                            INNER JOIN familia f ON p.Familia_idFamilia = f.idFamilia 
                                                                            WHERE p.revision = 0";

                            $consulta_no_identificadas = Conexion::obtener_conexion()->query($sql_no_identificadas);

                            while ($file_no_identificada = $consulta_no_identificadas->fetch(PDO::FETCH_ASSOC)) {

                                $id_no_identificada = $file_no_identificada['idPlanta'];

                                $fecha = $file_no_identificada['fecha_ingreso'];
                                $fecha = explode('-', $fecha);
                                $anno = $fecha[0];
                                $mes = $fecha[1];
                                $dia = $fecha[2];

                                $id_nuevo = str_pad($id_no_identificada, 4, "0", STR_PAD_LEFT);

                                $idMasc_no_identificada = $anno . $mes . $dia . $id_nuevo;

                                echo'
                                                        <tr valign="top">
                                                            <td>' . $id_nuevo . '</td> 
                                                            <td>' . $file_no_identificada['nombre_familia'] . '</td>
                                                            <td>' . $file_no_identificada['fecha_ingreso'] . '</td>
                                                            <td style="text-align:center;">
                                                                <a href="#" style="color: #5DADE2">
                                                                    <i class="material-icons">edit</i>
                                                                </a>
                                                                    <i>&nbsp;</i>
                                                                <a href="#" style="color: #E74C3C">
                                                                    <i class="material-icons">delete</i>
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

    <div class="col-md-4">
        <div class="card" style="height: 300px">
            <div class="header bg-orange">
                <h2>NUEVA TABLA</h2>
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
            <div class="body" style="height: 200px">
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <!--Especies no identificadas-->
        <div class="card" style="height: 300px">
            <div class="header bg-green">
                <h2>COLORES</h2>
                <ul class="header-dropdown m-r--5">
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons">zoom_out_map</i>
                        </a>
                    </li>
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
            <div>
                <div class="body">
                    <div class="table-responsive" style="height: 200px">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr style="background-color: white">
                                    <th>ID</th>
                                    <th>Color</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $sql_color = "SELECT idColor, nombre_color FROM color";

                                $consulta_color = Conexion::obtener_conexion()->query($sql_color);

                                while ($file_color = $consulta_color->fetch(PDO::FETCH_ASSOC)) {

                                    echo'
                                    <tr valign="top">
                                        <td>' . $file_color['idColor'] . '</td>
                                        <td>' . $file_color['nombre_color'] . '</td>
                                        <td style="text-align:center;">
                                            <a href="#" style="color: #5DADE2">
                                                <i class="material-icons">edit</i>
                                            </a>
                                                <i>&nbsp;</i>
                                            <a href="#" style="color: #E74C3C">
                                                <i class="material-icons">delete</i>
                                            </a>
                                        </td>
                                    </td>
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
    
    <div class="col-md-4">
        <!--Usuarios registrados-->
        <div class="card" style="height: 300px">
            <div class="header bg-cyan">
                <h2>USUARIOS ADMINISTRADORES</h2>
                <ul class="header-dropdown m-r--5">
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons">zoom_out_map</i>
                        </a>
                    </li>
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
            <div>
                <div class="body">
                    <div class="table-responsive" style="height: 200px">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr style="background: white">
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Teléfono</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql_usuarios = "SELECT nombre, apellido, email, telefono FROM usuario ORDER BY apellido ASC";

                                $consulta_usuarios = Conexion::obtener_conexion()->query($sql_usuarios);

                                while ($file_usuarios = $consulta_usuarios->fetch(PDO::FETCH_ASSOC)) {

                                    $nombre_completo = $file_usuarios['nombre'] . ' ' . $file_usuarios['apellido'];

                                    echo'
                                        <tr valign="top">
                                        <td>' . $nombre_completo . '</td> 
                                        <td>' . $file_usuarios['email'] . '</td>
                                        <td>' . $file_usuarios['telefono'] . '</td>
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

    <div class="col-md-4">
        <div class="card" style="height: 300px">
            <div class="header bg-orange">
                <h2>NUEVA TABLA</h2>
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
            <div class="body" style="height: 200px">
            </div>
        </div>
    </div>
</div>


