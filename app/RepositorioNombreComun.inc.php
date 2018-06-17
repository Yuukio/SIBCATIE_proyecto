<?php

include_once 'Conexion.inc.php';
include_once 'Genero.inc.php';

class RepositorioNombreComun {

    public static function insertarNombreComun($conexion, $nombre_comun) {

        $nombre_comun_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO NombreComun(nombre_nombre_comun, lengua, planta_idplanta) VALUES(:nombre_comun, :lengua, :planta_idplanta)";

                $sentencia = $conexion->prepare($sql);
                
                $nombre_nombre_comun = $nombre_comun-> getNombreComun();
                $lengua = $nombre_comun-> getLengua();
                $planta_idplanta = $nombre_comun-> getPlantaIdPlanta();                

                $sentencia -> bindParam(':accion', $nombre_nombre_comun, PDO::PARAM_STR);
                $sentencia -> bindParam(':Planta_idPlanta', $lengua, PDO::PARAM_STR);
                $sentencia -> bindParam(':Usuario_idUsuario', $planta_idplanta, PDO::PARAM_STR);

                $nombre_comun_insertado = $sentencia -> execute();
                
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }

            return $nombre_comun_insertado;
        }
    }
}
