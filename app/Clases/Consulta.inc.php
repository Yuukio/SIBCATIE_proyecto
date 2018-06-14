<?php

class Consulta {

    private $idConsulta;
    private $consutla;
    private $fecha_consulta;
    private $url_foto;
    private $latitud;
    private $longitud;
    private $Visitante_idVisitante;

    public function __construct($idConsulta, $consutla, $fecha_consulta, $url_foto, $latitud, $longitud, $Visitante_idVisitante) {
        $this->idConsulta = $idConsulta;
        $this->consutla = $consutla;
        $this->fecha_consulta = $fecha_consulta;
        $this->url_foto = $url_foto;
        $this->latitud = $latitud;
        $this->longitud = $longitud;
        $this->Visitante_idVisitante = $Visitante_idVisitante;
    }

    public function getIdConsulta() {
        return $this->idConsulta;
    }

    public function getConsutla() {
        return $this->consutla;
    }f

    public function getFecha_consulta() {
        return $this->fecha_consulta;
    }

    public function getUrl_foto() {
        return $this->url_foto;
    }

    public function getLatitud() {
        return $this->latitud;
    }

    public function getLongitud() {
        return $this->longitud;
    }

    public function getVisitante_idVisitante() {
        return $this->Visitante_idVisitante;
    }

}
