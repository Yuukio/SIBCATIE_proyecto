<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-md-3">
            <div class="tabC">
                <button class="tablinks" onclick="openCity(event, 'Familia')" id="defaultOpen">Familias</button>
                <button class="tablinks" onclick="openCity(event, 'Genero')">Géneros</button>
                <button class="tablinks" onclick="openCity(event, 'Epiteto')">Epítetos</button>
                <button class="tablinks" onclick="openCity(event, 'Color')">Colores</button>
                <button class="tablinks" onclick="openCity(event, 'Determinado')">Determinados por</button>
                <button class="tablinks" onclick="openCity(event, 'Forma')">Formas</button>
                <button class="tablinks" onclick="openCity(event, 'Tipo')">Tipos de Hoja</button>
                <button class="tablinks" onclick="openCity(event, 'Uso')">Usos</button>
                <button class="tablinks" onclick="openCity(event, 'Estado')">Estados de Salud</button>
            </div>
        </div>

        <!--***********TAB FAMILIA************-->
        <div class="col-md-9">
            <div id="Familia" class="tabcontentC">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>FAMILIAS</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Agregar nueva familia</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                                <!--<table class="table table-bordered table-striped table-hover">-->
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr style="background: white">
                                        <th>ID</th>
                                        <th>Familia</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_familia = "SELECT `idFamilia`, `nombre_familia` FROM `familia`";

                                    $consulta_familia = Conexion::obtener_conexion()->query($sql_familia);

                                    while ($fila_familia = $consulta_familia->fetch(PDO::FETCH_ASSOC)) {

                                        $id_familia = $fila_familia['idFamilia'];

                                        $id_familia_nuevo = str_pad($id_familia, 3, "0", STR_PAD_LEFT);

                                        echo'
                                        <tr valign="top">
                                            <td>' . $id_familia_nuevo . '</td>
                                            <td>' . $fila_familia['nombre_familia'] . '</td>
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

        <!--***********TAB GENEROS************-->
        <div class="col-md-9">
            <div id="Genero" class="tabcontentC">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>GÉNEROS</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Agregar nuevo Género</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                                <!--<table class="table table-bordered table-striped table-hover">-->
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr style="background: white">
                                        <th>ID</th>
                                        <th>Género</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_genero = "SELECT `idGenero`, `nombre_genero` FROM `genero`";

                                    $consulta_genero = Conexion::obtener_conexion()->query($sql_genero);

                                    while ($fila_genero = $consulta_genero->fetch(PDO::FETCH_ASSOC)) {

                                        $id_genero = $fila_genero['idGenero'];

                                        $id_genero_nuevo = str_pad($id_genero, 3, "0", STR_PAD_LEFT);

                                        echo'
                                        <tr valign="top">
                                            <td>' . $id_genero_nuevo . '</td>
                                            <td>' . $fila_genero['nombre_genero'] . '</td>
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

        <!--***********TAB EPITETO************-->
        <div class="col-md-9">
            <div id="Epiteto" class="tabcontentC">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>EPÍTETOS</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Agregar nuev Epíteto</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                                <!--<table class="table table-bordered table-striped table-hover">-->
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr style="background: white">
                                        <th>ID</th>
                                        <th>Epíteto</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_epiteto = "SELECT `idEpiteto`, `nombre_epiteto` FROM `epiteto`";

                                    $consulta_epiteto = Conexion::obtener_conexion()->query($sql_epiteto);

                                    while ($fila_epiteto = $consulta_epiteto->fetch(PDO::FETCH_ASSOC)) {

                                        $id_epiteto = $fila_epiteto['idEpiteto'];

                                        $id_epiteto_nuevo = str_pad($id_epiteto, 3, "0", STR_PAD_LEFT);

                                        echo'
                                        <tr valign="top">
                                            <td>' . $id_epiteto_nuevo . '</td>
                                            <td>' . $fila_epiteto['nombre_epiteto'] . '</td>
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

        <!--***********TAB COLOR************-->
        <div class="col-md-9">
            <div id="Color" class="tabcontentC">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>COLORES</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Agregar nuevo Color</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                                <!--<table class="table table-bordered table-striped table-hover">-->
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr style="background: white">
                                        <th>ID</th>
                                        <th>Color</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_color = "SELECT `idColor`, `nombre_color` FROM `color`";

                                    $consulta_color = Conexion::obtener_conexion()->query($sql_color);

                                    while ($fila_color = $consulta_color->fetch(PDO::FETCH_ASSOC)) {

                                        $id_color = $fila_color['idColor'];

                                        $id_color_nuevo = str_pad($id_color, 3, "0", STR_PAD_LEFT);

                                        echo'
                                        <tr valign="top">
                                            <td>' . $id_color_nuevo . '</td>
                                            <td>' . $fila_color['nombre_color'] . '</td>
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

        <!--***********TAB DETERMINADO POR************-->
        <div class="col-md-9">
            <div id="Determinado" class="tabcontentC">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>DETERMINACIONES</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Agregar nuevo Determinador</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                                <!--<table class="table table-bordered table-striped table-hover">-->
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr style="background: white">
                                        <th>ID</th>
                                        <th>Determinadores</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_determinado = "SELECT `idDeterminadaPor`, `nombre_determinado` FROM `determinadapor`";

                                    $consulta_determinado = Conexion::obtener_conexion()->query($sql_determinado);

                                    while ($fila_determinado = $consulta_determinado->fetch(PDO::FETCH_ASSOC)) {

                                        $id_determinado = $fila_determinado['idDeterminadaPor'];

                                        $id_determinado_nuevo = str_pad($id_determinado, 3, "0", STR_PAD_LEFT);

                                        echo'
                                        <tr valign="top">
                                            <td>' . $id_determinado_nuevo . '</td>
                                            <td>' . $fila_determinado['nombre_determinado'] . '</td>
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

        <!--***********TAB FORMA************-->
        <div class="col-md-9">
            <div id="Forma" class="tabcontentC">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>FORMAS</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Agregar nueva Forma</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                                <!--<table class="table table-bordered table-striped table-hover">-->
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr style="background: white">
                                        <th>ID</th>
                                        <th>Forma</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_forma = "SELECT `idForma`, `nombre_forma` FROM `forma`";

                                    $consulta_forma = Conexion::obtener_conexion()->query($sql_forma);

                                    while ($fila_forma = $consulta_forma->fetch(PDO::FETCH_ASSOC)) {

                                        $id_forma = $fila_forma['idForma'];

                                        $id_forma_nuevo = str_pad($id_forma, 3, "0", STR_PAD_LEFT);

                                        echo'
                                        <tr valign="top">
                                            <td>' . $id_forma_nuevo . '</td>
                                            <td>' . $fila_forma['nombre_forma'] . '</td>
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

        <!--***********TAB TIPOS DE HOJA************-->
        <div class="col-md-9">
            <div id="Tipo" class="tabcontentC">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>TIPOS DE HOJAS</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Agregar nuevo Tipo de Hoja</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                                <!--<table class="table table-bordered table-striped table-hover">-->
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr style="background: white">
                                        <th>ID</th>
                                        <th>Tipo de Hoja</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_tipo = "SELECT `idTipoHoja`, `nombre_hoja` FROM `tipohoja`";

                                    $consulta_tipo = Conexion::obtener_conexion()->query($sql_tipo);

                                    while ($fila_tipo = $consulta_tipo->fetch(PDO::FETCH_ASSOC)) {

                                        $id_tipo = $fila_tipo['idTipoHoja'];

                                        $id_tipo_nuevo = str_pad($id_tipo, 3, "0", STR_PAD_LEFT);

                                        echo'
                                        <tr valign="top">
                                            <td>' . $id_tipo_nuevo . '</td>
                                            <td>' . $fila_tipo['nombre_hoja'] . '</td>
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

        <!--***********TAB USOS************-->
        <div class="col-md-9">
            <div id="Uso" class="tabcontentC">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>USOS</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Agregar nuevo Uso</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                                <!--<table class="table table-bordered table-striped table-hover">-->
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr style="background: white">
                                        <th>ID</th>
                                        <th>Uso</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_uso = "SELECT `idUso`, `nombre_uso` FROM `uso`";

                                    $consulta_uso = Conexion::obtener_conexion()->query($sql_uso);

                                    while ($fila_uso = $consulta_uso->fetch(PDO::FETCH_ASSOC)) {

                                        $id_uso = $fila_uso['idUso'];

                                        $id_uso_nuevo = str_pad($id_uso, 3, "0", STR_PAD_LEFT);

                                        echo'
                                        <tr valign="top">
                                            <td>' . $id_uso_nuevo . '</td>
                                            <td>' . $fila_uso['nombre_uso'] . '</td>
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

        <!--***********TAB ESTADOS DE SALUD************-->
        <div class="col-md-9">
            <div id="Estado" class="tabcontentC">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>ESTADOS DE SALUD</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Agregar nuevo Estado de Salud</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                                <!--<table class="table table-bordered table-striped table-hover">-->
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr style="background: white">
                                        <th>ID</th>
                                        <th>Estado de Salud</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_estado = "SELECT `idEstadoSalud`, `nombre_estado` FROM `estadosalud`";

                                    $consulta_estado = Conexion::obtener_conexion()->query($sql_estado);

                                    while ($fila_estado = $consulta_estado->fetch(PDO::FETCH_ASSOC)) {

                                        $id_estado = $fila_estado['idEstadoSalud'];

                                        $id_estado_nuevo = str_pad($id_estado, 3, "0", STR_PAD_LEFT);

                                        echo'
                                        <tr valign="top">
                                            <td>' . $id_estado_nuevo . '</td>
                                            <td>' . $fila_estado['nombre_estado'] . '</td>
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
</div>

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontentC");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>