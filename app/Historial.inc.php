<?php

class Historial {

    private $idActividad;
    private $fecha_historial;
    private $accion;
    private $Planta_idPlanta;
    private $Usuario_idUsuario;

    public function __construct($idActividad, $fecha_historial, $accion, $Planta_idPlanta, $Usuario_idUsuario) {
        $this->idActividad = $idActividad;
        $this->fecha_historial = $fecha_historial;
        $this->accion = $accion;
        $this->Planta_idPlanta = $Planta_idPlanta;
        $this->Usuario_idUsuario = $Usuario_idUsuario;
    }

    public function getIdActividad() {
        return $this->idActividad;
    }

    public function getFechaHistorial() {
        return $this->fecha_historial;
    }

    public function getAccion() {
        return $this->accion;
    }

    public function getPlantaIdPlanta() {
        return $this->Planta_idPlanta;
    }

    public function getUsuarioIdUsuario() {
        return $this->Usuario_idUsuario;
    }

}
