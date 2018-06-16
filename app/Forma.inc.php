<?php

class Forma {

    private $idForma;
    private $nombre_forma;
    private $caracteristicas;

    public function __contruct($idForma, $nombre_forma, $caracteristicas) {
        $this->idForma = $idForma;
        $this->nombre_forma = $nombre_forma;
        $this->caracteristicas = $caracteristicas;
    }

    public function get_IdForma() {
        return $this->idForma;
    }

    public function get_NombreForma() {
        return $this->nombre_forma;
    }

    public function get_Caracteristicas() {
        return $this->caracteristicas;
    }

    public function set_NombreForma($nombre_forma) {
        $this->nombre_forma = $nombre_forma;
    }

    public function set_Caracteristicas($caracteristicas) {
        $this->caracteristicas = $caracteristicas;
    }

}
