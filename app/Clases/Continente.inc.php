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

    public function get_IdContinente() {
        return $this->idContinente;
    }

    public function get_NombreContinente() {
        return $this->nombre_Continente;
    }

    public function get_IdZonaCardinal() {
        return $this->ZonaCardinal_idZonaCardinal;
    }

    public function set_NombreContinente($nombre_Continente) {
        $this->nombre_Continente = $nombre_Continente;
    }

}
