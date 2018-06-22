<!DOCTYPE html>
<html>

    <?php
    $titulo = 'Usuarios';
    include_once 'plantillas/head-dashboard.php';
    ?>

    <body class="theme-red">

        <?php
        $usuarios = "active";
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
        <!-- Centro del Contenido-->
        <section class="content">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-12">
                                <!--Especies no identificadas-->
                                <div class="card">
                                    <div class="header bg-red">
                                        <h2>Usuarios Administradores y ayudantes</h2>
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
                                    <div>
                                        <div class="scrollable-area">
                                            <div class="row">
                                                <div class="table-responsive">
                                                <!--<table class="table table-bordered table-striped table-hover">-->
                                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                        <thead>
                                                            <tr style="background: white">
                                                                <th>Nombre</th>
                                                                <th>Email</th>
                                                                <th>Teléfono</th>
                                                                <th>Rol</th>
                                                                <th>Sección</th>
                                                                <th>Opciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $sql_usuario = "SELECT usuario.nombre, usuario.idUsuario, usuario.apellido, usuario.email, usuario.telefono, rol.nombre_rol, seccion.nombre_seccion FROM `usuario` 
                                                                            INNER JOIN rol ON usuario.rol_idrol=rol.idRol
                                                                            INNER JOIN seccion ON usuario.seccion_idseccion=seccion.idseccion 
                                                                            WHERE usuario.rol_idrol=1 OR usuario.rol_idrol=2 ";

                                                            $consulta_usuario = Conexion::obtener_conexion()->query($sql_usuario);

                                                            while ($file_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC)) {

                                                                $usuario_nombre = $file_usuario['nombre'];
                                                                $usuario_apellido = $file_usuario['apellido'];

                                                                $nombre_usuario = $usuario_nombre . ' ' . $usuario_apellido;

                                                                echo'
                                                                <tr valign="top">
                                                                    <td>' . $nombre_usuario . '</td> 
                                                                    <td>' . $file_usuario['email'] . '</td>
                                                                    <td>' . $file_usuario['telefono'] . '</td>
                                                                    <td>' . $file_usuario['nombre_rol'] . '</td>
                                                                    <td>' . $file_usuario['nombre_seccion'] . '</td>
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
                                </div>
                            </div>

                            <div class="col-md-12">
                                <!--Usuarios registrados-->
                                <div class="card">
                                    <div class="header bg-cyan">
                                        <h2>PÚBLICO REGISTRADO</h2>
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
                                        <div class="scrollable-area">
                                            <div class="row">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                        <thead>
                                                            <tr style="background: white">
                                                                <th>Nombre</th>
                                                                <th>Email</th>
                                                                <th>Opciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $sql_usuarios = "SELECT nombre_usuario, email FROM `usuario` WHERE rol_idrol=2";

                                                            $consulta_usuarios = Conexion::obtener_conexion()->query($sql_usuarios);

                                                            while ($file_usuarios = $consulta_usuarios->fetch(PDO::FETCH_ASSOC)) {

                                                                echo'
                                                                <tr valign="top">
                                                                <td>' . $file_usuarios['nombre_usuario'] . '</td> 
                                                                <td>' . $file_usuarios['email'] . '</td>
                                                                <td style="text-align:center;">
                                                                    <a href="#" style="color: #5DADE2">
                                                                        <i class="material-icons">edit</i>
                                                                    </a>
                                                                        <i>&nbsp;</i>
                                                                    <a href="#" style="color: #E74C3C">
                                                                        <i class="material-icons">delete</i>
                                                                    </a>
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
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="container-fluid">
                            <div class="card">
                                <div class="header bg-red">
                                    <h2>ESPECIES INDEFINIDAS</h2>
                                </div>
                                <div class="body" style="height: 675px">
                                    <div class="container-fluid" style="height: 675px">
                                        <div class="row" style="height: 675px">
                                            <form class="contact100-form validate-form">
                                                <label class="label-input100" for="first-name">Nombre Completo *</label>
                                                <div class="wrap-input100 rs1 validate-input">
                                                    <input id="first-name" class="input100" type="text" name="first-name" placeholder="Nombre">
                                                    <span class="focus-input100"></span>
                                                </div>
                                                <div class="wrap-input100 rs1 validate-input">
                                                    <input class="input100" type="text" name="last-name" placeholder="Apellido">
                                                    <span class="focus-input100"></span>
                                                </div>

                                                <label class="label-input100" for="email">Dirección de correo electrónico *</label>
                                                <div class="wrap-input100 validate-input">
                                                    <input id="email" class="input100" type="text" name="email" placeholder="ejemplo@email.com">
                                                    <span class="focus-input100"></span>
                                                </div>

                                                <label class="label-input100" for="phone">Número telefónico</label>
                                                <div class="wrap-input100">
                                                    <input id="phone" class="input100" type="text" name="phone" placeholder="#### ####">
                                                    <span class="focus-input100"></span>
                                                </div>

                                                <label class="label-input100" for="rol">Rol y sección del usuario nuevo*</label>
                                                <div class="rs1 validate-input">

                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" value="">Administrador
                                                    </label>
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" value="">Ayudante
                                                    </label>
                                                </div>

                                                <div class="rs1">
                                                    <select class="" id="sel1">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                    </select>
                                                </div>

                                                <div class="container">
                                                    <button type="button" class="btn btn-primary btn-lg"
                                                            style="margin-top: 20px; height: 50px; width: 100%; font-size: 20px;">
                                                        Registrar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- #FINAL# Centro del Contenido-->

        <?php
        include_once 'plantillas/dashboard-scripts.php';
        ?>