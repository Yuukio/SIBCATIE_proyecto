<?php

class Planta {

    private $idPlanta;
    private $nombre_comun;
    private $fecha_ingreso;
    private $autor;
    private $altura;
    private $reproduccion;
    private $visible;
    private $revision;
    private $identificada;
    private $Forma_idForma;
    private $Color_idColor;
    private $TipoHoja_idTipoHoja;
    private $Continente_idContinente;
    private $ZonaCardinal_idZonaCardinal;
    private $Familia_idFamilia;
    private $DeterminadaPor_idDeterminadaPor;
    private $Genero_idGenero;
    private $Epiteto_idEpiteto;

    public function __construct($idPlanta, $nombre_comun, $fecha_ingreso, $autor, $altura, $reproduccion, $visible, $Forma_idForma, $Color_idColor, $TipoHoja_idTipoHoja, $Continente_idContinente, $ZonaCardinal_idZonaCardinal, $Familia_idFamilia, $DeterminadaPor_idDeterminadaPor, $Genero_idGenero, $Epiteto_idEpiteto, $revision, $identificada) {

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
        $this->revision = $revision;
        $this->identificada = $identificada;
    }

    public function getIdPlanta() {
        return $this->idPlanta;
    }

    public function getNombreComun() {
        return $this->nombre_comun;
    }

    public function getFechaIngreso() {
        return $this->fecha_ingreso;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getReproduccion() {
        return $this->reproduccion;
    }

    public function getVisible() {
        return $this->visible;
    }

    public function getForma_IdForma() {
        return $this->Forma_idForma;
    }

    public function getColor_idColor() {
        return $this->Color_idColor;
    }

    public function getTipoHoja_idTipoHoja() {
        return $this->TipoHoja_idTipoHoja;
    }

    public function getContinente_idContinente() {
        return $this->Continente_idContinente;
    }

    public function getZonaCardinal_idZonaCardinal() {
        return $this->ZonaCardinal_idZonaCardinal;
    }

    public function getFamilia_idFamilia() {
        return $this->Familia_idFamilia;
    }

    public function getDeterminadaPor_idDeterminadaPor() {
        return $this->DeterminadaPor_idDeterminadaPor;
    }

    public function getGenero_idGenero() {
        return $this->Genero_idGenero;
    }

    public function getEpiteto_idEpiteto() {
        return $this->Epiteto_idEpiteto;
    }

    public function getRevision(){
        return $this->revision;
    }

    public function getIdentificada(){
        return $this->identificada;
    }

    public function setNombreComun($nombre_comun) {
        $this->nombre_comun = $nombre_comun;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setReproduccion($reproduccion) {
        $this->reproduccion = $reproduccion;
    }

    public function setRevision($revision) {
        $this->revision = $revision;
    }

    public function setVisible($visible) {
        $this->visible = $visible;
    }

    public function setIdentificada($identificada) {
        $this->identificada = $identificada;
    }
}
