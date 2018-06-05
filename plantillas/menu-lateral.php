<!-- Cargando pantalla -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Por favor espere...</p>
    </div>
</div>
<!-- #FINAL# Cargando pantalla-->

<!-- Superposición de barras laterales -->
<div class="overlay"></div>
<!-- #FINAL# Superposición de barras laterales -->

<section>
    <!-- Barra Lateral Izquierda -->
    <aside id="leftsidebar" class="sidebar">

        <!-- Informacion de usuario -->
        <div class="user-info">
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <h4>Administrador</h4>
                </div>

            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Luis Solano</div>
                <div class="email">luis82007@hotmail.com</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Perfil</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #FINAL# Informacion de usuario -->

        <!-- Menu -->

        <?php
        if (!isset($administrador) || empty($administrador)) {
            $administrador = '';
        }
        if (!isset($usuarios) || empty($usuarios)) {
            $usuarios = '';
        }
        if (!isset($bandeja) || empty($bandeja)) {
            $bandeja = '';
        }
        if (!isset($historial) || empty($historial)) {
            $historial = '';
        }
        if (!isset($mapa) || empty($mapa)) {
            $mapa = '';
        }
        ?>

        <div class="menu">
            <ul class="list">
                <li class="header">MENÚ DE NAVEGACIÓN</li>
                <li class= "<?php echo $administrador ?>" >
                    <a href="administracion.php">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li class= "<?php echo $usuarios ?>" >
                    <a href="usuarios.php">
                        <i class="material-icons">people</i>
                        <span>Administración de Usuarios</span>
                    </a>
                </li>
                <li class= "<?php echo $bandeja ?>" >
                    <a href="bandeja.php">
                        <i class="material-icons">inbox</i>
                        <span>Bandeja de Entrada</span>
                    </a>
                </li>
                <li class= "<?php echo $historial ?>" >
                    <a href="historial.php">
                        <i class="material-icons">history</i>
                        <span>Historial de Actividades</span>
                    </a>
                </li>
                <li class= "<?php echo $mapa ?>" >
                    <a href="mapa.php">
                        <i class="material-icons">map</i>
                        <span>Mapa del CATIE</span>
                    </a>
                </li>

                <li class="header">CONFIGURACIONES</li>
                <li>
                    <a href="http://localhost/SIBCATIE/">
                        <i class="material-icons col-light-blue">donut_large</i>
                        <span>Salir</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- #Menu -->

        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2018 <a href="javascript:void(0);">CATIE - Área Botánica</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.1
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #FINAL# Barra Lateral Izquierda -->

</section>