<?php

class Favorito {

    private $idFavorito;
    private $Planta_idPlanta;
    private $Visitante_idVisitante;

    public function __construct($idFavorito, $Planta_idPlanta, $Visitante_idVisitante) {
        $this->idFavorito = $idFavorito;
        $this->Planta_idPlanta = $Planta_idPlanta;
        $this->Visitante_idVisitante = $Visitante_idVisitante;
    }

    public function getIdFavorito() {
        return $this->idFavorito;
    }

    public function getPlanta_idPlanta() {
        return $this->Planta_idPlanta;
    }

    public function getVisitante_idVisitante() {
        return $this->Visitante_idVisitante;
    }

}
