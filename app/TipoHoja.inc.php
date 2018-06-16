<?php

class TipoHoja {

    private $idTipoHoja;
    private $nombre_hoja;

    public function __construct($idTipoHoja, $nombre_hoja) {
        $this->idTipoHoja = $idTipoHoja;
        $this->nombre_hoja = $nombre_hoja;
    }

    public function getIdHoja() {
        return $this->idTipoHoja;
    }

    public function getNombreHoja() {
        return $this->nombre_hoja;
    }

    public function setNombreHoja($nombre_hoja) {
        $this->nombre_hoja = $nombre_hoja;
    }

}
