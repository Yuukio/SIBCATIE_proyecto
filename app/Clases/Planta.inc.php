<?php

class Planta {

    private $idPlanta;
    private $nombre_comun;
    private $fecha_ingreso;
    private $autor;
    private $altura;
    private $reproduccion;
    private $visible;
    private $Forma_idForma;
    private $Color_idColor;
    private $TipoHoja_idTipoHoja;
    private $Continente_idContinente;
    private $ZonaCardinal_idZonaCardinal;
    private $Familia_idFamilia;
    private $DeterminadaPor_idDeterminadaPor;
    private $Genero_idGenero;
    private $Epiteto_idEpiteto;

    public function __construct($idPlanta, $nombre_comun, $fecha_ingreso, $autor, $altura, $reproduccion, $visible, $Forma_idForma, $Color_idColor, $TipoHoja_idTipoHoja, $Continente_idContinente, $ZonaCardinal_idZonaCardinal, $Familia_idFamilia, $DeterminadaPor_idDeterminadaPor, $Genero_idGenero, $Epiteto_idEpiteto) {

        $this->idPlanta = $idPlanta;
        $this->nombre_comun = $nombre_comun;
        $this->fecha_ingreso = $fecha_ingreso;
        $this->autor = $autor;
        $this->altura = $altura;
        $this->reproduccion = $reproduccion;
        $this->visible = $visible;
        $this->Forma_idForma = $Forma_idForma;
        $this->Color_idColor = $Color_idColor;
        $this->TipoHoja_idTipoHoja = $TipoHoja_idTipoHoja;
        $this->Continente_idContinente = $Continente_idContinente;
        $this->ZonaCardinal_idZonaCardinal = $ZonaCardinal_idZonaCardinal;
        $this->Familia_idFamilia = $Familia_idFamilia;
        $this->DeterminadaPor_idDeterminadaPor = $DeterminadaPor_idDeterminadaPor;
        $this->Genero_idGenero = $Genero_idGenero;
        $this->Epiteto_idEpiteto = $Epiteto_idEpiteto;
    }

    public function get_IdPlanta() {
        return $this->idPlanta;
    }

    public function get_NombreComun() {
        return $this->nombre_comun;
    }

    public function get_FechaIngreso() {
        return $this->fecha_ingreso;
    }

    public function get_Autor() {
        return $this->autor;
    }

    public function get_Altura() {
        return $this->altura;
    }

    public function get_Reproduccion() {
        return $this->reproduccion;
    }

    public function get_Visible() {
        return $this->visible;
    }

    public function get_Forma_IdForma() {
        return $this->Forma_idForma;
    }

    public function get_Color_idColor() {
        return $this->Color_idColor;
    }

    public function get_TipoHoja_idTipoHoja() {
        return $this->TipoHoja_idTipoHoja;
    }

    public function get_Continente_idContinente() {
        return $this->Continente_idContinente;
    }

    public function get_ZonaCardinal_idZonaCardinal() {
        return $this->ZonaCardinal_idZonaCardinal;
    }

    public function get_Familia_idFamilia() {
        return $this->Familia_idFamilia;
    }

    public function get_DeterminadaPor_idDeterminadaPor() {
        return $this->DeterminadaPor_idDeterminadaPor;
    }

    public function get_Genero_idGenero() {
        return $this->Genero_idGenero;
    }

    public function get_Epiteto_idEpiteto() {
        return $this->Epiteto_idEpiteto;
    }

    public function set_NombreComun($nombre_comun) {
        $this->nombre_comun = $nombre_comun;
    }

    public function set_Autor($autor) {
        $this->autor = $autor;
    }

    public function set_Altura($altura) {
        $this->altura = $altura;
    }

    public function set_Reproduccion($reproduccion) {
        $this->reproduccion = $reproduccion;
    }

    public function set_Visible($visible) {
        $this->visible = $visible;
    }

}
