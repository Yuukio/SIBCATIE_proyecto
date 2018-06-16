<?php

include_once 'app/Conexion.inc.php';
include_once 'app/Genero.inc.php';
include_once 'app/Usuario.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
include_once 'app/RepositorioGenero.inc.php';

Conexion::abrir_conexion();
//$total_usuarios = RepositorioUsuario::obtenerNumeroUsuarios(Conexion::obtener_conexion());
//Conexion::cerrar_conexion();

//echo $total_usuarios;

for ($i=0; $i < 19; $i++) {
	$nombre = sa(10);
	$apellido = sa(8);
	$email = sa(5).'@'.sa(3);
	$nombre_usuario = sa(6);
	$password = password_hash('123456', PASSWORD_DEFAULT);
        $telefono = 88888888;

	$usuario = new Usuario('', $nombre, $apellido, $email, $nombre_usuario, $password, '', '', '', $telefono);

        RepositorioUsuario::insertarUsuario(Conexion::obtener_conexion(), $usuario);
}


/*
for ($i=0; $i < 20; $i++) { 
	$nombre_genero = sa(15);

	$genero = new Genero('', $nombre_genero);

        RepositorioGenero::insertarGenero(Conexion::obtener_conexion(), $genero);
        
                
}*/

function sa($longitud){
	$caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$numero_caracteres = strlen($caracteres);
	$string_aleatorio = '';

	for ($i=0; $i < $longitud; $i++) { 
		$string_aleatorio .= $caracteres[rand(0, $numero_caracteres-1)];
	}

	return $string_aleatorio;
}