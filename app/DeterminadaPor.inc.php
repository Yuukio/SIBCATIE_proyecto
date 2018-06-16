<?php

class DeterminadaPor {

    private $idDeterminadaPor;
    private $nombre_determinada;
    private $fecha_determinada;

    function __construct($idDeterminadaPor, $nombre_determinada, $fecha_determinada) {
        $this->idDeterminadaPor = $idDeterminadaPor;
        $this->nombre_determinada = $nombre_determinada;
        $this->fecha_determinada = $fecha_determinada;
    }

    function getIdDeterminadaPor() {
        return $this->idDeterminadaPor;
    }

    function getNombre_determinada() {
        return $this->nombre_determinada;
    }

    function getFecha_determinada() {
        return $this->fecha_determinada;
    }

    function setIdDeterminadaPor($idDeterminadaPor) {
        $this->idDeterminadaPor = $idDeterminadaPor;
    }

    function setNombre_determinada($nombre_determinada) {
        $this->nombre_determinada = $nombre_determinada;
    }

    function setFecha_determinada($fecha_determinada) {
        $this->fecha_determinada = $fecha_determinada;
    }
}
