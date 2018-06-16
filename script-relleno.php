<?php 

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Genero.inc.php';
include_once 'app/RepositorioGenero.inc.php';

Conexion::abrir_conexion();

for ($usuarios=0; $usuarios < 20; $usuarios++) {
	$nombre = sa(10);
	$apellido = sa(8);
	$telefono = '88888888';
	$email = sa(5).'@'.sa(3).'.com';
	$nombre_usuario = sa(6);
	$password = password_hash('123456', PASSWO_DEFAULT);

	$usuario = new Usuario('', $nombre, $apellido, $telefono, $email, $nombre_usuario, $password, '', '');

        Repositorio_Usuario::insertarUsuario(Conexion::obtener_conexion(), $usuario);
}


for ($i=0; $i < 20; $i++) { 
	$nombre_genero = sa(15);

	$genero = new Genero('', $nombre_genero);

        RepositorioGenero::insertarGenero(Conexion::obtener_conexion(), $genero);
                
}

function sa($longitud){
	$caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$numero_caracteres = strlen($caracteres);
	$string_aleatorio = '';

	for ($i=0; $i < $longitud; $i++) { 
		$string_aleatorio .= $caracteres[rand(0, $numero_caracteres-1)];
	}

	return $string_aleatorio;
}