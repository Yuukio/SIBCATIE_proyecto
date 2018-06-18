<?php

include_once 'Conexion.inc.php';
include_once 'Planta_has_Uso.inc.php';

class RepositorioPlantaHasUso {

    public static function insertarPlantaHasUso($conexion, $planta_has_uso) {

        $planta_has_uso_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO Planta_Has_Uso(Planta_idPlanta, Uso_idUso) VALUES(:Planta_idPlanta, :Uso_idUso)";

                $sentencia = $conexion->prepare($sql);
                
                $planta_idplanta = $planta_has_uso-> getPlantaIdPlanta();
                $uso_iduso = $planta_has_uso-> getUsoIdUso();            

                $sentencia -> bindParam(':Planta_idPlanta', $planta_idplanta);
                $sentencia -> bindParam(':Uso_idUso', $uso_iduso);

                $planta_has_uso_insertado = $sentencia -> execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }

            return $planta_has_uso_insertado;
        }
    }
}
