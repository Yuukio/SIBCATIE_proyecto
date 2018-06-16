<?php

class TipoHoja {

    private $idTipoHoja;
    private $nombre_hoja;

    public function __construct($idTipoHoja, $nombre_hoja) {
        $this->idTipoHoja = $idTipoHoja;
        $this->nombre_hoja = $nombre_hoja;
    }

    public function get_IdHoja() {
        return $this->idTipoHoja;
    }

    public function get_NombreHoja() {
        return $this->nombre_hoja;
    }

    public function set_NombreHoja($nombre_hoja) {
        $this->nombre_hoja = $nombre_hoja;
    }

}
