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
                <div class="row clearfix">
                    <div class="col-md-3">
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
                    <div class="col-md-3">
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
                    <div class="col-md-3">
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
                    <div class="col-md-3">
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
                    <div class="col-md-7">
                        <!--Especies no identificadas-->
                        <div class="card">
                            <div class="header">
                                <h2>REGISTRO DE ESPECIES</h2>
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
                            <div>
                                <div class="scrollable-area2">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table table2 table-bordered table-striped table-hover js-basic-example">
                                                <thead>
                                                    <tr style="background: white">
                                                        <th>
                                                            Rank
                                                        </th>
                                                        <th>
                                                            Name
                                                        </th>
                                                        <th>
                                                            Nat.
                                                        </th>
                                                        <th>
                                                            Team
                                                        </th>
                                                        <th class="age">
                                                            Age
                                                        </th>
                                                        <th class="result">
                                                            Result
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr valign="top">
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>
                                                            Tony MARTIN
                                                        </td>
                                                        <td>
                                                            GER
                                                        </td>
                                                        <td>
                                                            <!--GER-->
                                                            <span title="GERMANY">GER</span>
                                                        </td>
                                                        <td class="age">
                                                            26
                                                        </td>
                                                        <td class="result">
                                                            53:43.85
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            2
                                                        </td>
                                                        <td>
                                                            Bradley WIGGINS
                                                        </td>
                                                        <td>
                                                            GBR
                                                        </td>
                                                        <td>
                                                            <!--GBR-->
                                                            <span title="GREAT BRITAIN">GBR</span>
                                                        </td>
                                                        <td class="age">
                                                            31
                                                        </td>
                                                        <td class="result">
                                                            +1:15.83
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            3
                                                        </td>
                                                        <td>
                                                            Fabian CANCELLARA
                                                        </td>
                                                        <td>
                                                            SUI
                                                        </td>
                                                        <td>
                                                            <!--SUI-->
                                                            <span title="SWITZERLAND">SUI</span>
                                                        </td>
                                                        <td class="age">
                                                            30
                                                        </td>
                                                        <td class="result">
                                                            +1:20.59
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            4
                                                        </td>
                                                        <td>
                                                            Bert GRABSCH
                                                        </td>
                                                        <td>
                                                            GER
                                                        </td>
                                                        <td>
                                                            <!--GER-->
                                                            <span title="GERMANY">GER</span>
                                                        </td>
                                                        <td class="age">
                                                            36
                                                        </td>
                                                        <td class="result">
                                                            +1:31.76
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            5
                                                        </td>
                                                        <td>
                                                            Jack BOBRIDGE
                                                        </td>
                                                        <td>
                                                            AUS
                                                        </td>
                                                        <td>
                                                            <!--AUS-->
                                                            <span title="AUSTRALIA">AUS</span>
                                                        </td>
                                                        <td class="age">
                                                            22
                                                        </td>
                                                        <td class="result">
                                                            +2:13.86
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            6
                                                        </td>
                                                        <td>
                                                            Richie PORTE
                                                        </td>
                                                        <td>
                                                            AUS
                                                        </td>
                                                        <td>
                                                            <!--AUS-->
                                                            <span title="AUSTRALIA">AUS</span>
                                                        </td>
                                                        <td class="age">
                                                            26
                                                        </td>
                                                        <td class="result">
                                                            +2:29.54
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            7
                                                        </td>
                                                        <td>
                                                            David MILLAR
                                                        </td>
                                                        <td>
                                                            GBR
                                                        </td>
                                                        <td>
                                                            <!--GBR-->
                                                            <span title="GREAT BRITAIN">GBR</span>
                                                        </td>
                                                        <td class="age">
                                                            34
                                                        </td>
                                                        <td class="result">
                                                            +2:45.62
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            8
                                                        </td>
                                                        <td>
                                                            Lieuwe WESTRA
                                                        </td>
                                                        <td>
                                                            NED
                                                        </td>
                                                        <td>
                                                            <!--NED-->
                                                            <span title="NETHERLANDS">NED</span>
                                                        </td>
                                                        <td class="age">
                                                            29
                                                        </td>
                                                        <td class="result">
                                                            +3:18.52
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            9
                                                        </td>
                                                        <td>
                                                            Alexsandr DYACHENKO
                                                        </td>
                                                        <td>
                                                            KAZ
                                                        </td>
                                                        <td>
                                                            <!--KAZ-->
                                                            <span title="KAZAKHSTAN">KAZ</span>
                                                        </td>
                                                        <td class="age">
                                                            28
                                                        </td>
                                                        <td class="result">
                                                            +3:19.76
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            10
                                                        </td>
                                                        <td>
                                                            Jakob FUGLSANG
                                                        </td>
                                                        <td>
                                                            DEN
                                                        </td>
                                                        <td>
                                                            <!--DEN-->
                                                            <span title="DENMARK">DEN</span>
                                                        </td>
                                                        <td class="age">
                                                            26
                                                        </td>
                                                        <td class="result">
                                                            +3:30.59
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            11
                                                        </td>
                                                        <td>
                                                            Jonathan CASTROVIEJO NICOLAS
                                                        </td>
                                                        <td>
                                                            ESP
                                                        </td>
                                                        <td>
                                                            <!--ESP-->
                                                            <span title="SPAIN">ESP</span>
                                                        </td>
                                                        <td class="age">
                                                            24
                                                        </td>
                                                        <td class="result">
                                                            +3:34.37
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            12
                                                        </td>
                                                        <td>
                                                            Gustav LARSSON
                                                        </td>
                                                        <td>
                                                            SWE
                                                        </td>
                                                        <td>
                                                            <!--SWE-->
                                                            <span title="SWEDEN">SWE</span>
                                                        </td>
                                                        <td class="age">
                                                            31
                                                        </td>
                                                        <td class="result">
                                                            +3:34.62
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            13
                                                        </td>
                                                        <td>
                                                            Svein TUFT
                                                        </td>
                                                        <td>
                                                            CAN
                                                        </td>
                                                        <td>
                                                            <!--CAN-->
                                                            <span title="CANADA">CAN</span>
                                                        </td>
                                                        <td class="age">
                                                            34
                                                        </td>
                                                        <td class="result">
                                                            +3:35.89
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            14
                                                        </td>
                                                        <td>
                                                            Janez BRAJKOVIC
                                                        </td>
                                                        <td>
                                                            SLO
                                                        </td>
                                                        <td>
                                                            <!--SLO-->
                                                            <span title="SLOVENIA">SLO</span>
                                                        </td>
                                                        <td class="age">
                                                            28
                                                        </td>
                                                        <td class="result">
                                                            +3:44.74
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <!--Registro de actividad-->
                        <div class="card">
                            <div class="header">
                                <h2>ESPECIES NO IDENTIFICADAS</h2>
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
                            <div>
                                <div class="scrollable-area1">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table table1 table-bordered table-striped table-hover table-dark">
                                                <thead>
                                                    <tr style="background: white">
                                                        <th>
                                                            Ranked
                                                        </th>
                                                        <th>
                                                            Nameee
                                                        </th>
                                                        <th>
                                                            Nat.ee
                                                        </th>
                                                        <th>
                                                            Teamff
                                                        </th>
                                                        <th class="age">
                                                            Age
                                                        </th>
                                                        <th class="result">
                                                            Result
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr valign="top">
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>
                                                            Tony MARTIN
                                                        </td>
                                                        <td>
                                                            GER
                                                        </td>
                                                        <td>
                                                            <!--GER-->
                                                            <span title="GERMANY">GER</span>
                                                        </td>
                                                        <td class="age">
                                                            26
                                                        </td>
                                                        <td class="result">
                                                            53:43.85
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            2
                                                        </td>
                                                        <td>
                                                            Bradley WIGGINS
                                                        </td>
                                                        <td>
                                                            GBR
                                                        </td>
                                                        <td>
                                                            <!--GBR-->
                                                            <span title="GREAT BRITAIN">GBR</span>
                                                        </td>
                                                        <td class="age">
                                                            31
                                                        </td>
                                                        <td class="result">
                                                            +1:15.83
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            3
                                                        </td>
                                                        <td>
                                                            Fabian CANCELLARA
                                                        </td>
                                                        <td>
                                                            SUI
                                                        </td>
                                                        <td>
                                                            <!--SUI-->
                                                            <span title="SWITZERLAND">SUI</span>
                                                        </td>
                                                        <td class="age">
                                                            30
                                                        </td>
                                                        <td class="result">
                                                            +1:20.59
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            4
                                                        </td>
                                                        <td>
                                                            Bert GRABSCH
                                                        </td>
                                                        <td>
                                                            GER
                                                        </td>
                                                        <td>
                                                            <!--GER-->
                                                            <span title="GERMANY">GER</span>
                                                        </td>
                                                        <td class="age">
                                                            36
                                                        </td>
                                                        <td class="result">
                                                            +1:31.76
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            5
                                                        </td>
                                                        <td>
                                                            Jack BOBRIDGE
                                                        </td>
                                                        <td>
                                                            AUS
                                                        </td>
                                                        <td>
                                                            <!--AUS-->
                                                            <span title="AUSTRALIA">AUS</span>
                                                        </td>
                                                        <td class="age">
                                                            22
                                                        </td>
                                                        <td class="result">
                                                            +2:13.86
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            6
                                                        </td>
                                                        <td>
                                                            Richie PORTE
                                                        </td>
                                                        <td>
                                                            AUS
                                                        </td>
                                                        <td>
                                                            <!--AUS-->
                                                            <span title="AUSTRALIA">AUS</span>
                                                        </td>
                                                        <td class="age">
                                                            26
                                                        </td>
                                                        <td class="result">
                                                            +2:29.54
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            7
                                                        </td>
                                                        <td>
                                                            David MILLAR
                                                        </td>
                                                        <td>
                                                            GBR
                                                        </td>
                                                        <td>
                                                            <!--GBR-->
                                                            <span title="GREAT BRITAIN">GBR</span>
                                                        </td>
                                                        <td class="age">
                                                            34
                                                        </td>
                                                        <td class="result">
                                                            +2:45.62
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            8
                                                        </td>
                                                        <td>
                                                            Lieuwe WESTRA
                                                        </td>
                                                        <td>
                                                            NED
                                                        </td>
                                                        <td>
                                                            <!--NED-->
                                                            <span title="NETHERLANDS">NED</span>
                                                        </td>
                                                        <td class="age">
                                                            29
                                                        </td>
                                                        <td class="result">
                                                            +3:18.52
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            9
                                                        </td>
                                                        <td>
                                                            Alexsandr DYACHENKO
                                                        </td>
                                                        <td>
                                                            KAZ
                                                        </td>
                                                        <td>
                                                            <!--KAZ-->
                                                            <span title="KAZAKHSTAN">KAZ</span>
                                                        </td>
                                                        <td class="age">
                                                            28
                                                        </td>
                                                        <td class="result">
                                                            +3:19.76
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            10
                                                        </td>
                                                        <td>
                                                            Jakob FUGLSANG
                                                        </td>
                                                        <td>
                                                            DEN
                                                        </td>
                                                        <td>
                                                            <!--DEN-->
                                                            <span title="DENMARK">DEN</span>
                                                        </td>
                                                        <td class="age">
                                                            26
                                                        </td>
                                                        <td class="result">
                                                            +3:30.59
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            11
                                                        </td>
                                                        <td>
                                                            Jonathan CASTROVIEJO NICOLAS
                                                        </td>
                                                        <td>
                                                            ESP
                                                        </td>
                                                        <td>
                                                            <!--ESP-->
                                                            <span title="SPAIN">ESP</span>
                                                        </td>
                                                        <td class="age">
                                                            24
                                                        </td>
                                                        <td class="result">
                                                            +3:34.37
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            12
                                                        </td>
                                                        <td>
                                                            Gustav LARSSON
                                                        </td>
                                                        <td>
                                                            SWE
                                                        </td>
                                                        <td>
                                                            <!--SWE-->
                                                            <span title="SWEDEN">SWE</span>
                                                        </td>
                                                        <td class="age">
                                                            31
                                                        </td>
                                                        <td class="result">
                                                            +3:34.62
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            13
                                                        </td>
                                                        <td>
                                                            Svein TUFT
                                                        </td>
                                                        <td>
                                                            CAN
                                                        </td>
                                                        <td>
                                                            <!--CAN-->
                                                            <span title="CANADA">CAN</span>
                                                        </td>
                                                        <td class="age">
                                                            34
                                                        </td>
                                                        <td class="result">
                                                            +3:35.89
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            14
                                                        </td>
                                                        <td>
                                                            Janez BRAJKOVIC
                                                        </td>
                                                        <td>
                                                            SLO
                                                        </td>
                                                        <td>
                                                            <!--SLO-->
                                                            <span title="SLOVENIA">SLO</span>
                                                        </td>
                                                        <td class="age">
                                                            28
                                                        </td>
                                                        <td class="result">
                                                            +3:44.74
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <!--Registro de actividad-->
                        <div class="card">
                            <div class="header">
                                <h2>REGISTRO DE ACTIVIDAD</h2>
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
                            <div>
                                <div class="scrollable-area3">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table table3 table-bordered table-striped table-hover table-dark">
                                                <thead>
                                                    <tr style="background: white">
                                                        <th>
                                                            Ranked
                                                        </th>
                                                        <th>
                                                            Nameee
                                                        </th>
                                                        <th>
                                                            Nat.ee
                                                        </th>
                                                        <th>
                                                            Teamff
                                                        </th>
                                                        <th class="age">
                                                            Age
                                                        </th>
                                                        <th class="result">
                                                            Result
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr valign="top">
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>
                                                            Tony MARTIN
                                                        </td>
                                                        <td>
                                                            GER
                                                        </td>
                                                        <td>
                                                            <!--GER-->
                                                            <span title="GERMANY">GER</span>
                                                        </td>
                                                        <td class="age">
                                                            26
                                                        </td>
                                                        <td class="result">
                                                            53:43.85
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            2
                                                        </td>
                                                        <td>
                                                            Bradley WIGGINS
                                                        </td>
                                                        <td>
                                                            GBR
                                                        </td>
                                                        <td>
                                                            <!--GBR-->
                                                            <span title="GREAT BRITAIN">GBR</span>
                                                        </td>
                                                        <td class="age">
                                                            31
                                                        </td>
                                                        <td class="result">
                                                            +1:15.83
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            3
                                                        </td>
                                                        <td>
                                                            Fabian CANCELLARA
                                                        </td>
                                                        <td>
                                                            SUI
                                                        </td>
                                                        <td>
                                                            <!--SUI-->
                                                            <span title="SWITZERLAND">SUI</span>
                                                        </td>
                                                        <td class="age">
                                                            30
                                                        </td>
                                                        <td class="result">
                                                            +1:20.59
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            4
                                                        </td>
                                                        <td>
                                                            Bert GRABSCH
                                                        </td>
                                                        <td>
                                                            GER
                                                        </td>
                                                        <td>
                                                            <!--GER-->
                                                            <span title="GERMANY">GER</span>
                                                        </td>
                                                        <td class="age">
                                                            36
                                                        </td>
                                                        <td class="result">
                                                            +1:31.76
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            5
                                                        </td>
                                                        <td>
                                                            Jack BOBRIDGE
                                                        </td>
                                                        <td>
                                                            AUS
                                                        </td>
                                                        <td>
                                                            <!--AUS-->
                                                            <span title="AUSTRALIA">AUS</span>
                                                        </td>
                                                        <td class="age">
                                                            22
                                                        </td>
                                                        <td class="result">
                                                            +2:13.86
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            6
                                                        </td>
                                                        <td>
                                                            Richie PORTE
                                                        </td>
                                                        <td>
                                                            AUS
                                                        </td>
                                                        <td>
                                                            <!--AUS-->
                                                            <span title="AUSTRALIA">AUS</span>
                                                        </td>
                                                        <td class="age">
                                                            26
                                                        </td>
                                                        <td class="result">
                                                            +2:29.54
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            7
                                                        </td>
                                                        <td>
                                                            David MILLAR
                                                        </td>
                                                        <td>
                                                            GBR
                                                        </td>
                                                        <td>
                                                            <!--GBR-->
                                                            <span title="GREAT BRITAIN">GBR</span>
                                                        </td>
                                                        <td class="age">
                                                            34
                                                        </td>
                                                        <td class="result">
                                                            +2:45.62
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            8
                                                        </td>
                                                        <td>
                                                            Lieuwe WESTRA
                                                        </td>
                                                        <td>
                                                            NED
                                                        </td>
                                                        <td>
                                                            <!--NED-->
                                                            <span title="NETHERLANDS">NED</span>
                                                        </td>
                                                        <td class="age">
                                                            29
                                                        </td>
                                                        <td class="result">
                                                            +3:18.52
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            9
                                                        </td>
                                                        <td>
                                                            Alexsandr DYACHENKO
                                                        </td>
                                                        <td>
                                                            KAZ
                                                        </td>
                                                        <td>
                                                            <!--KAZ-->
                                                            <span title="KAZAKHSTAN">KAZ</span>
                                                        </td>
                                                        <td class="age">
                                                            28
                                                        </td>
                                                        <td class="result">
                                                            +3:19.76
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            10
                                                        </td>
                                                        <td>
                                                            Jakob FUGLSANG
                                                        </td>
                                                        <td>
                                                            DEN
                                                        </td>
                                                        <td>
                                                            <!--DEN-->
                                                            <span title="DENMARK">DEN</span>
                                                        </td>
                                                        <td class="age">
                                                            26
                                                        </td>
                                                        <td class="result">
                                                            +3:30.59
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            11
                                                        </td>
                                                        <td>
                                                            Jonathan CASTROVIEJO NICOLAS
                                                        </td>
                                                        <td>
                                                            ESP
                                                        </td>
                                                        <td>
                                                            <!--ESP-->
                                                            <span title="SPAIN">ESP</span>
                                                        </td>
                                                        <td class="age">
                                                            24
                                                        </td>
                                                        <td class="result">
                                                            +3:34.37
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            12
                                                        </td>
                                                        <td>
                                                            Gustav LARSSON
                                                        </td>
                                                        <td>
                                                            SWE
                                                        </td>
                                                        <td>
                                                            <!--SWE-->
                                                            <span title="SWEDEN">SWE</span>
                                                        </td>
                                                        <td class="age">
                                                            31
                                                        </td>
                                                        <td class="result">
                                                            +3:34.62
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            13
                                                        </td>
                                                        <td>
                                                            Svein TUFT
                                                        </td>
                                                        <td>
                                                            CAN
                                                        </td>
                                                        <td>
                                                            <!--CAN-->
                                                            <span title="CANADA">CAN</span>
                                                        </td>
                                                        <td class="age">
                                                            34
                                                        </td>
                                                        <td class="result">
                                                            +3:35.89
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            14
                                                        </td>
                                                        <td>
                                                            Janez BRAJKOVIC
                                                        </td>
                                                        <td>
                                                            SLO
                                                        </td>
                                                        <td>
                                                            <!--SLO-->
                                                            <span title="SLOVENIA">SLO</span>
                                                        </td>
                                                        <td class="age">
                                                            28
                                                        </td>
                                                        <td class="result">
                                                            +3:44.74
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <!--Especies no identificadas-->
                        <div class="card">
                            <div class="header">
                                <h2>USUARIOS ADMINISTRADORES</h2>
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
                            <div>
                                <div class="scrollable-area4">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table table4 table-bordered table-striped table-hover js-basic-example">
                                                <thead>
                                                    <tr style="background-color: white">
                                                        <th>
                                                            Rank
                                                        </th>
                                                        <th>
                                                            Name
                                                        </th>
                                                        <th>
                                                            Nat.
                                                        </th>
                                                        <th>
                                                            Team
                                                        </th>
                                                        <th class="age">
                                                            Age
                                                        </th>
                                                        <th class="result">
                                                            Result
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr valign="top">
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>
                                                            Tony MARTIN
                                                        </td>
                                                        <td>
                                                            GER
                                                        </td>
                                                        <td>
                                                            <!--GER-->
                                                            <span title="GERMANY">GER</span>
                                                        </td>
                                                        <td class="age">
                                                            26
                                                        </td>
                                                        <td class="result">
                                                            53:43.85
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            2
                                                        </td>
                                                        <td>
                                                            Bradley WIGGINS
                                                        </td>
                                                        <td>
                                                            GBR
                                                        </td>
                                                        <td>
                                                            <!--GBR-->
                                                            <span title="GREAT BRITAIN">GBR</span>
                                                        </td>
                                                        <td class="age">
                                                            31
                                                        </td>
                                                        <td class="result">
                                                            +1:15.83
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            3
                                                        </td>
                                                        <td>
                                                            Fabian CANCELLARA
                                                        </td>
                                                        <td>
                                                            SUI
                                                        </td>
                                                        <td>
                                                            <!--SUI-->
                                                            <span title="SWITZERLAND">SUI</span>
                                                        </td>
                                                        <td class="age">
                                                            30
                                                        </td>
                                                        <td class="result">
                                                            +1:20.59
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            4
                                                        </td>
                                                        <td>
                                                            Bert GRABSCH
                                                        </td>
                                                        <td>
                                                            GER
                                                        </td>
                                                        <td>
                                                            <!--GER-->
                                                            <span title="GERMANY">GER</span>
                                                        </td>
                                                        <td class="age">
                                                            36
                                                        </td>
                                                        <td class="result">
                                                            +1:31.76
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            5
                                                        </td>
                                                        <td>
                                                            Jack BOBRIDGE
                                                        </td>
                                                        <td>
                                                            AUS
                                                        </td>
                                                        <td>
                                                            <!--AUS-->
                                                            <span title="AUSTRALIA">AUS</span>
                                                        </td>
                                                        <td class="age">
                                                            22
                                                        </td>
                                                        <td class="result">
                                                            +2:13.86
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            6
                                                        </td>
                                                        <td>
                                                            Richie PORTE
                                                        </td>
                                                        <td>
                                                            AUS
                                                        </td>
                                                        <td>
                                                            <!--AUS-->
                                                            <span title="AUSTRALIA">AUS</span>
                                                        </td>
                                                        <td class="age">
                                                            26
                                                        </td>
                                                        <td class="result">
                                                            +2:29.54
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            7
                                                        </td>
                                                        <td>
                                                            David MILLAR
                                                        </td>
                                                        <td>
                                                            GBR
                                                        </td>
                                                        <td>
                                                            <!--GBR-->
                                                            <span title="GREAT BRITAIN">GBR</span>
                                                        </td>
                                                        <td class="age">
                                                            34
                                                        </td>
                                                        <td class="result">
                                                            +2:45.62
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            8
                                                        </td>
                                                        <td>
                                                            Lieuwe WESTRA
                                                        </td>
                                                        <td>
                                                            NED
                                                        </td>
                                                        <td>
                                                            <!--NED-->
                                                            <span title="NETHERLANDS">NED</span>
                                                        </td>
                                                        <td class="age">
                                                            29
                                                        </td>
                                                        <td class="result">
                                                            +3:18.52
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            9
                                                        </td>
                                                        <td>
                                                            Alexsandr DYACHENKO
                                                        </td>
                                                        <td>
                                                            KAZ
                                                        </td>
                                                        <td>
                                                            <!--KAZ-->
                                                            <span title="KAZAKHSTAN">KAZ</span>
                                                        </td>
                                                        <td class="age">
                                                            28
                                                        </td>
                                                        <td class="result">
                                                            +3:19.76
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            10
                                                        </td>
                                                        <td>
                                                            Jakob FUGLSANG
                                                        </td>
                                                        <td>
                                                            DEN
                                                        </td>
                                                        <td>
                                                            <!--DEN-->
                                                            <span title="DENMARK">DEN</span>
                                                        </td>
                                                        <td class="age">
                                                            26
                                                        </td>
                                                        <td class="result">
                                                            +3:30.59
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            11
                                                        </td>
                                                        <td>
                                                            Jonathan CASTROVIEJO NICOLAS
                                                        </td>
                                                        <td>
                                                            ESP
                                                        </td>
                                                        <td>
                                                            <!--ESP-->
                                                            <span title="SPAIN">ESP</span>
                                                        </td>
                                                        <td class="age">
                                                            24
                                                        </td>
                                                        <td class="result">
                                                            +3:34.37
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            12
                                                        </td>
                                                        <td>
                                                            Gustav LARSSON
                                                        </td>
                                                        <td>
                                                            SWE
                                                        </td>
                                                        <td>
                                                            <!--SWE-->
                                                            <span title="SWEDEN">SWE</span>
                                                        </td>
                                                        <td class="age">
                                                            31
                                                        </td>
                                                        <td class="result">
                                                            +3:34.62
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            13
                                                        </td>
                                                        <td>
                                                            Svein TUFT
                                                        </td>
                                                        <td>
                                                            CAN
                                                        </td>
                                                        <td>
                                                            <!--CAN-->
                                                            <span title="CANADA">CAN</span>
                                                        </td>
                                                        <td class="age">
                                                            34
                                                        </td>
                                                        <td class="result">
                                                            +3:35.89
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td>
                                                            14
                                                        </td>
                                                        <td>
                                                            Janez BRAJKOVIC
                                                        </td>
                                                        <td>
                                                            SLO
                                                        </td>
                                                        <td>
                                                            <!--SLO-->
                                                            <span title="SLOVENIA">SLO</span>
                                                        </td>
                                                        <td class="age">
                                                            28
                                                        </td>
                                                        <td class="result">
                                                            +3:44.74
                                                        </td>
                                                    </tr>
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
        </section>

        <?php
        include_once '../plantillas/dashboard-scripts.php';
        ?>