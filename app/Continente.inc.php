<?php

class Continente {

    private $idContinente;
    private $nombre_Continente;
    private $ZonaCardinal_idZonaCardinal;

    public function __construct($idContinente, $nombre_Continente, $ZonaCardinal_idZonaCardinal) {
        $this->idContinente = $idContinente;
        $this->nombre_Continente = $nombre_Continente;
        $this->ZonaCardinal_idZonaCardinal = $ZonaCardinal_idZonaCardinal;
    }

    public function getIdContinente() {
        return $this->idContinente;
    }

    public function getNombreContinente() {
        return $this->nombre_Continente;
    }

    public function getIdZonaCardinal() {
        return $this->ZonaCardinal_idZonaCardinal;
    }

    public function setNombreContinente($nombre_Continente) {
        $this->nombre_Continente = $nombre_Continente;
    }

}
