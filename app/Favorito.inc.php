<?php

class Favorito {

    private $idFavorito;
    private $Planta_idPlanta;
    private $Usuario_idUsuario;

    public function __construct($idFavorito, $Planta_idPlanta, $Usuario_idUsuario) {
        $this->idFavorito = $idFavorito;
        $this->Planta_idPlanta = $Planta_idPlanta;
        $this->Usuario_idUsuario = $Usuario_idUsuario;
    }

    public function getIdFavorito() {
        return $this->idFavorito;
    }

    public function getPlanta_idPlanta() {
        return $this->Planta_idPlanta;
    }

    public function getVisitante_idVisitante() {
        return $this->Usuario_idUsuario;
    }

}
