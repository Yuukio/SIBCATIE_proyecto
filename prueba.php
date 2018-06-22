<?php

include_once 'app/Conexion.inc.php';
include_once 'app/Planta.inc.php';
include_once 'app/RepositorioPlanta.inc.php';

Conexion::abrir_conexion();

/* * ***PLANTA */
for ($i = 0; $i < 1; $i++) {
    
    $idMascara = 1;
    $genero_idgenero = 1;
    $epiteto_idepiteto = 1;
    $autor = sa(15);
    $fuente_informacion = sa(20);
    $altura = 1;
    $forma_idforma = 1;
    $color_idcolor = 1;
    $tipohoja_idtipohoja = 1;
    $familia_idfamilia = 1;
    $determinadapor_iddeterminadapor = 1;
    $reproduccion = 1;
    
     /*$hoy = date('Y-m-d');

    $max_date = 'SELECT MAX (fecha_ingreso) AS "Max Date" FROM PLANTA';

    if ($max_date == $hoy) {
        $id_mascara = $id_mascara + 1;
    } else {
        $id_mascara = 1;
    }

    $hoy = explode('-', $hoy);
    $mes = $hoy[1];
    $dia = $hoy[2];
    $anno = $hoy[0];

    $id_mascara = $anno . $mes . $dia . $id_mascara;

*/     
    
    $planta = new Planta($idMascara, $familia_idfamilia, $genero_idgenero, $epiteto_idepiteto, $autor, '', $fuente_informacion, $altura, $forma_idforma, $color_idcolor, $tipohoja_idtipohoja, 
            $determinadapor_iddeterminadapor, $reproduccion, '', '', '');
    
    RepositorioPlanta::insertarPlanta(Conexion::obtener_conexion(), $planta);
}

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

function sa($longitud){
	$caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$numero_caracteres = strlen($caracteres);
	$string_aleatorio = '';

	for ($i=0; $i < $longitud; $i++) { 
		$string_aleatorio .= $caracteres[rand(0, $numero_caracteres-1)];
	}

	return $string_aleatorio;
}