<?php

include_once 'Conexion.inc.php';
include_once 'Planta.inc.php';

class RepositorioPlanta {

    public static function insertarPlanta($conexion, $planta) {

        $planta_insertada = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO Planta(fecha_ingreso, fuente_informacion, autor, altura, reproduccion, identificada, revision, Forma_idForma, Color_idColor, TipoHoja_idTipoHoja, Continente_idContinente, ZonaCardinal_idZonaCardinal, Familia_idFamilia, DeterminadaPor_idDeterminadaPor, Genero_idGenero, Epiteto_idEpiteto) "
                        . "VALUES(NOW(), :fuente_informacion, :autor, :altura, :reproduccion, :identificada, 1, :Forma_idForma, :Color_idColor, :TipoHoja_idTipoHoja, :Continente_idContinente, :ZonaCardinal_idZonaCardinal, :Familia_idFamilia, :DeterminadaPor_idDeterminadaPor, :Genero_idGenero, :Epiteto_idEpiteto)";

                $sentencia = $conexion->prepare($sql);
                
                $fuente_informacion = $planta -> getFuenteInformacion();
                $autor = $planta -> getAutor();
                $altura = $planta -> getAltura();
                $reproduccion = $planta -> getReproduccion();
                $identificada = $planta -> getIdentificada();
                $forma_idforma = $planta -> getFormaIdForma();
                $color_idcolor = $planta -> getColorIdColor();
                $tipohoja_idtipohoja = $planta -> getTipoHojaIdTipoHoja();
                $continente_idcontinente = $planta -> getContinenteIdContinente();
                $zonacardinal_idzonacardinal = $planta -> getZonaCardinalIdZonaCardinal();
                $familia_idfamilia = $planta -> getFamiliaIdFamilia();
                $determinadapor_iddeterminadapor = $planta -> getDeterminadaPorIdDeterminadaPor();
                $genero_idgenero = $planta -> getGeneroIdGenero();
                $epiteto_idepiteto = $planta -> getEpitetoIdEpiteto();

                $sentencia -> bindParam(':fuente_informacion', $fuente_informacion, PDO::PARAM_STR);
                $sentencia -> bindParam(':autor', $autor, PDO::PARAM_STR);
                $sentencia -> bindParam(':altura', $altura, PDO::PARAM_STR);
                $sentencia -> bindParam(':reproduccion', $reproduccion, PDO::PARAM_STR);
                $sentencia -> bindParam(':identificada', $identificada, PDO::PARAM_STR);
                $sentencia -> bindParam(':forma_idforma', $forma_idforma, PDO::PARAM_STR);
                $sentencia -> bindParam(':color_idcolor', $color_idcolor, PDO::PARAM_STR);
                $sentencia -> bindParam(':tipohoja_idtipohoja', $tipohoja_idtipohoja, PDO::PARAM_STR);
                $sentencia -> bindParam(':continente_idcontinente', $continente_idcontinente, PDO::PARAM_STR);
                $sentencia -> bindParam(':zonacardinal_idzonacardinal', $zonacardinal_idzonacardinal, PDO::PARAM_STR);
                $sentencia -> bindParam(':familia_idfamilia', $familia_idfamilia, PDO::PARAM_STR);
                $sentencia -> bindParam(':determinadapor_iddeterminadapor', $determinadapor_iddeterminadapor, PDO::PARAM_STR);
                $sentencia -> bindParam(':genero_idgenero', $genero_idgenero, PDO::PARAM_STR);
                $sentencia -> bindParam(':epiteto_idepiteto', $epiteto_idepiteto, PDO::PARAM_STR);

                $planta_insertada = $sentencia -> execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }

            return $planta_insertada;
        }
    }
}
