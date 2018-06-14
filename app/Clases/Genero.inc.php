<?php

class Genero {

    private $idGenero;
    private $nombre_genero;

    public function __construct($idGenero, $nombre_genero) {
        $this->idGenero = $idGenero;
        $this->nombre_genero = $nombre_genero;
    }

    public function get_IdGenero() {
        return $this->idGenero;
    }

    public function get_NombreGenero() {
        return $this->nombre_genero;
    }

    public function set_NombreGenero($nombre_genero) {
        $this->nombre_genero = $nombre_genero;
    }

}
