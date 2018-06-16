<?php

class Epiteto {

    private $idEpiteto;
    private $nombre_epiteto;
    private $referencia;

    public function __construct($idEpiteto, $nombre_epiteto, $referencia) {
        $this->idEpiteto = $idEpiteto;
        $this->nombre_epiteto = $nombre_epiteto;
        $this->referencia = $referencia;
    }

    public function get_IdEpiteto() {
        return $this->idEpiteto;
    }

    public function get_NombreEpiteto() {
        return $this->nombre_epiteto;
    }

    public function set_NombreEpiteto($nombre_epiteto) {
        $this->nombre_epiteto = $nombre_epiteto;
    }

    public function set_Referencia($referencia) {
        $this->referencia = $referencia;
    }

}
