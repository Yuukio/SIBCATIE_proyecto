<?php

class Familia {

    private $idFamilia;
    private $nombre_familia;

    public function __construct($idFamilia, $nombre_familia) {
        $this->idFamilia = $idFamilia;
        $this->nombre_familia = $nombre_familia;
    }

    public function get_IdFamilia() {
        return $this->idFamilia;
    }

    public function get_NombreFamilia() {
        return $this->nombre_familia;
    }

    public function setNombre_familia($nombre_familia) {
        $this->nombre_familia = $nombre_familia;
    }

}
