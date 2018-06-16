<?php

class Planta_has_Uso {

    private $Planta_idPlanta;
    private $Uso_idUso;

    public function __construct($Planta_idPlanta, $Uso_idUso) {
        $this->Planta_idPlanta = $Planta_idPlanta;
        $this->Uso_idUso = $Uso_idUso;
    }

    public function getPlanta_idPlanta() {
        return $this->Planta_idPlanta;
    }

    public function getUso_idUso() {
        return $this->Uso_idUso;
    }

}
