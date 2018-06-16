<?php

class Colores {

    private $idColor;
    private $nombre_color;

    public function __construct($idColor, $nombre_color) {
        $this->idColor = $idColor;
        $this->nombre_color = $nombre_color;
    }

    public function get_IdColor() {
        return $this->idColor;
    }

    public function get_NombreColor() {
        return $this->nombre_color;
    }

    public function set_NombreColor($nombre_color) {
        $this->nombre_color = $nombre_color;
    }

}
