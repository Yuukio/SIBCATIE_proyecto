<?php

include_once 'Conexion.inc.php';
include_once 'Historial.inc.php';

class RepositorioHistorial {

    public static function insertarHistorial($conexion, $historial) {

        $historial_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO Historial(fecha_historial, accion, Planta_idPlanta, Usuario_idUsuario) VALUES(NOW(), :accion, :Planta_idPlanta, :Usuario_idUsuario)";

                $sentencia = $conexion->prepare($sql);
                
                $accion = $historial-> getAccion();
                $planta_idplanta = $historial-> getPlantaIdPlanta();
                $usuario_idusuario = $historial-> getUsuarioIdUsuario();                

                $sentencia -> bindParam(':accion', $accion, PDO::PARAM_STR);
                $sentencia -> bindParam(':Planta_idPlanta', $planta_idplanta, PDO::PARAM_STR);
                $sentencia -> bindParam(':Usuario_idUsuario', $usuario_idusuario, PDO::PARAM_STR);

                $historial_insertado = $sentencia -> execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }

            return $historial_insertado;
        }
    }
}
