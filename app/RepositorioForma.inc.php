<?php

include_once 'Conexion.inc.php';
include_once 'Forma.inc.php';

class RepositorioForma {

    public static function insertarForma($conexion, $forma) {

        $forma_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO Familia(nombre_familia) VALUES(:nombre_familia)";

                $sentencia = $conexion->prepare($sql);

                $nombre_forma = $forma->getNombreFamilia();
                $caracteristicas = $forma->getNombreForma();

                $sentencia->bindParam(':nombre_forma', $nombre_forma, PDO::PARAM_STR);
                $sentencia->bindParam(':caracteristicas', $caracteristicas, PDO::PARAM_STR);

                $forma_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }

            return $forma_insertado;
        }
    }

}