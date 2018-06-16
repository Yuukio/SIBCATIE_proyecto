<?php

class Historial {

    private $idActividad;
    private $fecha;
    private $accion;
    private $Planta_idPlanta;
    private $Usuario_idUsuario;

    public function __construct($idActividad, $fecha, $accion, $Planta_idPlanta, $Usuario_idUsuario) {
        $this->idActividad = $idActividad;
        $this->fecha = $fecha;
        $this->accion = $accion;
        $this->Planta_idPlanta = $Planta_idPlanta;
        $this->Usuario_idUsuario = $Usuario_idUsuario;
    }

    public function getIdActividad() {
        return $this->idActividad;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getAccion() {
        return $this->accion;
    }

    public function getPlanta_idPlanta() {
        return $this->Planta_idPlanta;
    }

    public function getUsuario_idUsuario() {
        return $this->Usuario_idUsuario;
    }

}
