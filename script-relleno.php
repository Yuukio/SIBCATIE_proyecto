<?php

include_once 'app/Conexion.inc.php';
include_once 'app/Genero.inc.php';
include_once 'app/Usuario.inc.php';
include_once 'app/Colores.inc.php';
include_once 'app/Consulta.inc.php';
include_once 'app/Continente.inc.php';
include_once 'app/DeterminadaPor.inc.php';
include_once 'app/Epiteto.inc.php';
include_once 'app/EstadoSaludo.inc.php';
include_once 'app/Exportar.inc.php';
include_once 'app/Familia.inc.php';
include_once 'app/Favorito.inc.php';
include_once 'app/Forma.inc.php';
include_once 'app/Historial.inc.php';
include_once 'app/NombreComun.inc.php';
include_once 'app/Planta.inc.php';
include_once 'app/Planta_has_Uso.inc.php';
include_once 'app/TipoHoja.inc.php';
include_once 'app/Uso.inc.php';
include_once 'app/ZonaCardinal.inc.php';

include_once 'app/RepositorioGenero.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
include_once 'app/RepositorioColores.inc.php';
include_once 'app/RepositorioConsulta.inc.php';
include_once 'app/RepositorioContinente.inc.php';
include_once 'app/RepositorioDeterminadaPor.inc.php';
include_once 'app/RepositorioEpiteto.php';
include_once 'app/RepositorioEstadoSalud.inc.php';
//include_once 'app/RepositorioExportar.inc.php';
include_once 'app/RepositorioFamilia.inc.php';
//include_once 'app/RepositorioFavorito.inc.php';
include_once 'app/RepositorioForma.inc.php';
//include_once 'app/RepositorioFoto.inc.php';
//include_once 'app/RepositorioHistorial.inc.php';
include_once 'app/RepositorioNombreComun.inc.php';
include_once 'app/RepositorioPlanta.inc.php';
include_once 'app/RepositorioPlantaHasUso.inc.php';
include_once 'app/RepositorioTipoHoja.inc.php';
include_once 'app/RepositorioUso.inc.php';
include_once 'app/RepositorioZonaCardinal.inc.php';

Conexion::abrir_conexion();

/* * ****USUARIO */
for ($i = 0; $i < 50; $i++) {
    $nombre = sa(10);
    $apellido = sa(8);
    $email = sa(5) . '@' . sa(3) . '.com';
    $nombre_usuario = sa(6);
    $password = password_hash('123456', PASSWORD_DEFAULT);
    $telefono = 88888888;

    $usuario = new Usuario('', $nombre, $apellido, $email, $nombre_usuario, $password, '', '', '', $telefono);

    RepositorioUsuario::insertarUsuario(Conexion::obtener_conexion(), $usuario);
}
/* * ***GENERO */
for ($i = 0; $i < 30; $i++) {
    $nombre_genero = sa(15);

    $genero = new Genero('', $nombre_genero);

    RepositorioGenero::insertarGenero(Conexion::obtener_conexion(), $genero);
}

/* * ***COLOR */
for ($i = 0; $i < 10; $i++) {
    $nombre_color = sa(10);

    $color = new Colores('', $nombre_color);

    RepositorioColor::insertarColor(Conexion::obtener_conexion(), $color);
}

/* * ***CONSULTA */
for ($i = 0; $i < 1; $i++) {
    
}

/* * ***DETERMINADA POR */
for ($i = 0; $i < 15; $i++) {
    $nombre_determinada = sa(15);

    $determinada_por = new DeterminadaPor('', $nombre_determinada, '');

    RepositorioDeterminadaPor::insertarDeterminadaPor(Conexion::obtener_conexion(), $determinada_por);
}

/* * ***EPITETO */
for ($i = 0; $i < 30; $i++) {
    $nombre_epiteto = sa(10);
    $referencia = sa(2) . '.' . sa(10);

    $epiteto = new Epiteto('', $nombre_epiteto, $referencia);

    RepositorioEpiteto::insertarEpiteto(Conexion::obtener_conexion(), $epiteto);
}

/* * ***ESTADO SALUD */
for ($i = 0; $i < 1; $i++) {

    $nombre_estado1 = '1- Apariencia muy saludable (80-100%)';
    $nombre_estado2 = '2- Apariencia 60-80% saludable';
    $nombre_estado3 = '3- Apariencia 40-60% saludable';
    $nombre_estado4 = '4-Apariencia 20-40% saludable';
    $nombre_estado5 = '5- Apariencia hasta un 29% saludable (poco saludable)';

    $estado_salud1 = new EstadoSaludo('', $nombre_estado1);
    $estado_salud2 = new EstadoSaludo('', $nombre_estado2);
    $estado_salud3 = new EstadoSaludo('', $nombre_estado3);
    $estado_salud4 = new EstadoSaludo('', $nombre_estado4);
    $estado_salud5 = new EstadoSaludo('', $nombre_estado5);

    RepositorioEstadoSalud::insertarEstadoSalud(Conexion::obtener_conexion(), $estado_salud1);
    RepositorioEstadoSalud::insertarEstadoSalud(Conexion::obtener_conexion(), $estado_salud2);
    RepositorioEstadoSalud::insertarEstadoSalud(Conexion::obtener_conexion(), $estado_salud3);
    RepositorioEstadoSalud::insertarEstadoSalud(Conexion::obtener_conexion(), $estado_salud4);
    RepositorioEstadoSalud::insertarEstadoSalud(Conexion::obtener_conexion(), $estado_salud5);
}

/* * ***FAMILIA */
for ($i = 0; $i < 50; $i++) {
    $nombre_familia = sa(15);

    $familia = new Familia('', $nombre_familia);

    RepositorioFamilia::insertarFamilia(Conexion::obtener_conexion(), $familia);
}

/* * ***FORMA */
for ($i = 0; $i < 5; $i++) {
    $nombre_forma = sa(10);
    $caracteristicas = lorem();

    $forma = new Forma('', $nombre_forma, $caracteristicas);

    RepositorioForma::insertarForma(Conexion::obtener_conexion(), $forma);
}

/* * ***FOTO */
for ($i = 0; $i < 1; $i++) {
    
}

/* * ***TIPO HOJA */
for ($i = 0; $i < 1; $i++) {
    $nombre_hoja = sa(10);
    $forma = sa(8);

    $hoja = new TipoHoja('', $nombre_hoja, $forma);

    RepositorioTipoHoja::insertarTipoHoja(Conexion::obtener_conexion(), $hoja);
}

/* * ***USO */
for ($i = 0; $i < 20; $i++) {
    $nombre_uso = sa(10);

    $uso = new Uso('', $nombre_uso);

    RepositorioUso::insertarUso(Conexion::obtener_conexion(), $uso);
}
/* * ***ZONA CARDINAL */
for ($i = 0; $i < 4; $i++) {
    $nombre_cardinal = sa(10);

    $cardinal = new ZonaCardinal('', $nombre_cardinal);

    RepositorioZonaCardinal::insertarZonaCardinal(Conexion::obtener_conexion(), $cardinal);
}

/* * ***CONTINENTE */
for ($i = 0; $i < 1; $i++) {

    $continente1 = new Continente('', 'America');
    $continente2 = new Continente('', 'Africa');
    $continente3 = new Continente('', 'Asia');
    $continente4 = new Continente('', 'Europa');
    $continente5 = new Continente('', 'Oceania');

    RepositorioContinente::insertarContinente(Conexion::obtener_conexion(), $continente1);
    RepositorioContinente::insertarContinente(Conexion::obtener_conexion(), $continente2);
    RepositorioContinente::insertarContinente(Conexion::obtener_conexion(), $continente3);
    RepositorioContinente::insertarContinente(Conexion::obtener_conexion(), $continente4);
    RepositorioContinente::insertarContinente(Conexion::obtener_conexion(), $continente5);
}

/* * ***PLANTA */
/*for ($i = 0; $i < 1; $i++) {
    $genero = sa(10);
    $epiteto = sa(10);
    $fuente_informacion = sa(15);
    $nombre_comun = sa(10);
    $autor = sa(10);
    $altura = rand(0, 20);
    $reproduccion = rand(0, 1);
    $forma_idforma = rand(0, 5);
    $color_idcolor = rand(0, 10);
    $tipohoja_idtipohoja = rand(0, 5);
    $continente_idcontinente = rand(0, 5);
    $zonacardinal_idzonacardinal = rand(0, 4);
    $familia_idfamilia = rand(0, 50);
    $determinadapor_iddeterminadapor = rand(0, 20);
    $nombre_cientifico = $genero . ' ' . $epiteto;
    $id_mascara = 1;
    $hoy = date(mm/dd/yyyy);

    $max_date = 'SELECT MAX (fecha_ingreso) AS "Max Date" FROM PLANTA';

    if ($max_date == $hoy) {
        $id_mascara = $id_mascara + 1;
    } else {
        $id_mascara = 1;
    }

    $hoy = explode('/', $hoy);
    $mes = $hoy[0];
    $dia = $hoy[1];
    $anno = $hoy[2];

    $id_mascara = $mes . $dia . $anno . $id_mascara;

    $planta = new Planta('', $id_mascara, $nombre_comun, '', $fuente_informacion, $autor, $altura, $reproduccion, '', $forma_idforma, $color_idcolor, $tipohoja_idtipohoja, $continente_idcontinente, $zonacardinal_idzonacardinal, 
            $familia_idfamilia, $determinadapor_iddeterminadapor, $genero_idgenero, $epiteto_idepiteto, '', '');

    RepositorioPlanta::insertarPlanta(Conexion::obtener_conexion(), $planta);
}*/

/*
  SELECT MAX (ord_date) AS "Max Date"
  FROM orders;

 * selecciona la fecha maxima de la tabla, luego la comparo con la fecha actual, si son iguales, extraigo el id y le sumo uno, si no
 * pongo que el id sea 01. Luego concateno la fecha extrayendo por separado el dia mes y anno con...

  $ date = "07/08/2015";
  $ date = explode ('/', $ date);

 * luego los meto en variables y los concateno todos juntos.

  $month = $date[0];
  $day   = $date[1];
  $year  = $date[2];


 */

/* * ***PLANTA HAS USO */
for ($i = 0; $i < 15; $i++) {
    $planta_idplanta = rand(0, 1);
    $uso_iduso = rand(0, 20);

    $planta_has_uso = new Planta_has_Uso($planta_idplanta, $uso_iduso);

    RepositorioPlantaHasUso::insertarPlantaHasUso(Conexion::obtener_conexion(), $planta_has_uso);
}

/* * ***NOMBRE COMUN */
for ($i = 0; $i < 30; $i++) {
    $nombre_nombre_comun = sa(10);
    $lengua = sa(5);
    $planta_idplanta = rand(0, 1);

    $nombre_comun = new NombreComun('', $nombre_nombre_comun, $lengua, $planta_idplanta);

    RepositorioNombreComun::insertarNombreComun(Conexion::obtener_conexion(), $nombre_comun);
}

/* * ***HISTORIAL */
for ($i = 0; $i < 1; $i++) {
    $accion = sa(20);
    $planta_idplanta = rand(0, 1);
    $usuario_idusuario = rand(0, 50);

    $historial = new Historial('', '', $accion, $planta_idplanta, $usuario_idusuario);

    RepositorioHistorial::insertarHistorial(Conexion::obtener_conexion(), $historial);
}

/* * ***EXPORTAR */
for ($i = 0; $i < 10; $i++) {
    $planta_idplanta = rand(0, 1);
    $usuario_idusuario = rand(0, 50);

    $exportar = new Exportar($planta_idplanta, $usuario_idusuario);

    RepositorioExportar::insertarExportar(Conexion::obtener_conexion(), $exportar);
}

/* * ***FAVORITO */
for ($i = 0; $i < 10; $i++) {
    $planta_idplanta = rand(0, 1);
    $usuario_idusuario = rand(0, 50);

    $favorito= new Favorito($planta_idplanta, $usuario_idusuario);

    RepositorioFavorito::insertarFavorito(Conexion::obtener_conexion(), $favorito);
}

function sa($longitud) {
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numero_caracteres = strlen($caracteres);
    $string_aleatorio = '';

    for ($i = 0; $i < $longitud; $i++) {
        $string_aleatorio .= $caracteres[rand(0, $numero_caracteres - 1)];
    }

    return $string_aleatorio;
}

function lorem() {

    $lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id tristique enim, vel venenatis erat.';

    return $lorem;
}
