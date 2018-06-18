<?php

include_once 'Conexion.inc.php';
include_once 'Planta.inc.php';

class RepositorioPlanta {

    public static function insertarPlanta($conexion, $planta) {

        $planta_insertada = false;

        if (isset($conexion)) {
            try {
                //$sql = "INSERT INTO Planta(idMascara, Genero_idGenero, Epiteto_idEpiteto, autor, fecha_ingreso, fuente_informacion, altura, Forma_idForma, Color_idColor, TipoHoja_idTipoHoja, Continente_idContinente, ZonaCardinal_idZonaCardinal, Familia_idFamilia, DeterminadaPor_idDeterminadaPor) VALUES(:idMascara, :Genero_idGenero, :Epiteto_idEpiteto, :autor, NOW(), :fuente_informacion, :altura, :Forma_idForma, :Color_idColor, :TipoHoja_idTipoHoja, :Continente_idContinente, :ZonaCardinal_idZonaCardinal, :Familia_idFamilia, :DeterminadaPor_idDeterminadaPor)";
                
                //$sql = "INSERT INTO Planta(idMascara, Genero_idGenero, Epiteto_idEpiteto, autor, fecha_ingreso, fuente_informacion, altura, Forma_idForma, Color_idColor, TipoHoja_idTipoHoja, Continente_idContinente, ZonaCardinal_idZonaCardinal, Familia_idFamilia, DeterminadaPor_idDeterminadaPor) VALUES(1, 1, 1, 'asdfg', NOW(), 'gasdgw', 12, 1, 1, 1, 1, 1, 1, 1)";
                
                $sql = "INSERT INTO Planta(idMascara, Genero_idGenero, Epiteto_idEpiteto, nombre_cientifico, autor, fecha_ingreso, fuente_informacion, altura, Forma_idForma, Color_idColor, TipoHoja_idTipoHoja, Continente_idContinente, ZonaCardinal_idZonaCardinal, Familia_idFamilia, DeterminadaPor_idDeterminadaPor) "
                        . "VALUES(:idMascara, :Genero_idGenero, :Epiteto_idEpiteto, :nombre_cientifico, :autor, NOW(), :fuente_informacion, :altura, :Forma_idForma, :Color_idColor, :TipoHoja_idTipoHoja, :Continente_idContinente, :ZonaCardinal_idZonaCardinal, :Familia_idFamilia, :DeterminadaPor_idDeterminadaPor)";

                
                $sentencia = $conexion->prepare($sql);
                
                $idmascara = $planta -> getIdmascara();
                $genero_idgenero = $planta -> getGenero_idgenero();
                $epiteto_idepiteto = $planta -> getEpiteto_idepiteto();
                $nombre_cientifico = $planta -> getNombre_cientifico();
                $autor = $planta -> getAutor();
                $fuente_informacion = $planta -> getFuente_informacion();
                $altura = $planta -> getAltura();
                $forma_idforma = $planta -> getForma_idforma();
                $color_idcolor = $planta -> getColor_idcolor();
                $tipohoja_idtipohoja = $planta -> getTipohoja_idtipohoja();
                $continente_idcontinente = $planta -> getContinente_idcontinente();
                $zonacardinal_idzonacardinal = $planta -> getZonacardinal_idzonacardinal();
                $familia_idfamilia = $planta -> getFamilia_idfamilia();
                $determinadapor_iddeterminadapor = $planta -> getDeterminadapor_iddeterminadapor();
                
                $sentencia -> bindParam(':idMascara', $idmascara);
                $sentencia -> bindParam(':Genero_idGenero', $genero_idgenero);
                $sentencia -> bindParam(':Epiteto_idEpiteto', $epiteto_idepiteto);
                $sentencia -> bindParam(':nombre_cientifico', $nombre_cientifico);
                $sentencia -> bindParam(':autor', $autor);
                $sentencia -> bindParam(':fuente_informacion', $fuente_informacion);
                $sentencia -> bindParam(':altura', $altura);
                $sentencia -> bindParam(':Forma_idForma', $forma_idforma);
                $sentencia -> bindParam(':Color_idColor', $color_idcolor);
                $sentencia -> bindParam(':TipoHoja_idTipoHoja', $tipohoja_idtipohoja);
                $sentencia -> bindParam(':Continente_idContinente', $continente_idcontinente);
                $sentencia -> bindParam(':ZonaCardinal_idZonaCardinal', $zonacardinal_idzonacardinal);
                $sentencia -> bindParam(':Familia_idFamilia', $familia_idfamilia);
                $sentencia -> bindParam(':DeterminadaPor_idDeterminadaPor', $determinadapor_iddeterminadapor);

                $planta_insertada = $sentencia -> execute();
            } catch (PDOException $ex) {
                print 'ERROR ' . $ex->getMessage();
            }

            return $planta_insertada;
        }
    }
}
