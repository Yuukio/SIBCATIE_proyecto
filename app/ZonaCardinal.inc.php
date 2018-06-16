<?php

class ZonaCardinal {

    private $idZonaCardinal;
    private $nombre_cardinal;

    public function __contruct($idZonaCardinal, $nombre_cardinal) {
        $this->idZonaCardinal = $idZonaCardinal;
        $this->nombre_cardinal = $nombre_cardinal;
    }

    public function get_IdZonaCardinal() {
        return $this->idZonaCardinal;
    }

    public function get_NombreZonaCardinal() {
        return $this->nombre_cardinal;
    }

    public function set_idZonaCardinal($nombre_cardinal) {
        $this->nombre_cardinal = $nombre_cardinal;
    }
}
