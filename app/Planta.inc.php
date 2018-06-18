<?php

class Planta {

    private $idplanta;
    private $idmascara;
    private $genero_idgenero;
    private $epiteto_idepiteto;
    private $nombre_cientifico;
    private $autor;
    private $fecha_ingreso;
    private $fuente_informacion;
    private $altura;
    private $forma_idforma;
    private $color_idcolor;
    private $tipohoja_idtipohoja;
    private $continente_idcontinente;
    private $zonacardinal_idzonacardinal;
    private $familia_idfamilia;
    private $determinadapor_iddeterminadapor;
    private $reproduccion;
    private $identificada;
    private $visible;
    private $revision;

    public function __construct($idplanta, $idmascara, $genero_idgenero, $epiteto_idepiteto, $nombre_cientifico, $autor, $fecha_ingreso, $fuente_informacion, $altura, $forma_idforma, $color_idcolor, $tipohoja_idtipohoja, $continente_idcontinente, $zonacardinal_idzonacardinal, $familia_idfamilia, $determinadapor_iddeterminadapor, $reproduccion, $identificada, $visible, $revision) {
        $this->idplanta = $idplanta;
        $this->idmascara = $idmascara;
        $this->genero_idgenero = $genero_idgenero;
        $this->epiteto_idepiteto = $epiteto_idepiteto;
        $this->nombre_cientifico = $nombre_cientifico;
        $this->autor = $autor;
        $this->fecha_ingreso = $fecha_ingreso;
        $this->fuente_informacion = $fuente_informacion;
        $this->altura = $altura;
        $this->forma_idforma = $forma_idforma;
        $this->color_idcolor = $color_idcolor;
        $this->tipohoja_idtipohoja = $tipohoja_idtipohoja;
        $this->continente_idcontinente = $continente_idcontinente;
        $this->zonacardinal_idzonacardinal = $zonacardinal_idzonacardinal;
        $this->familia_idfamilia = $familia_idfamilia;
        $this->determinadapor_iddeterminadapor = $determinadapor_iddeterminadapor;
        $this->reproduccion = $reproduccion;
        $this->identificada = $identificada;
        $this->visible = $visible;
        $this->revision = $revision;
    }

    public function getIdplanta() {
        return $this->idplanta;
    }

    public function getIdmascara() {
        return $this->idmascara;
    }

    public function getGenero_idgenero() {
        return $this->genero_idgenero;
    }

    public function getEpiteto_idepiteto() {
        return $this->epiteto_idepiteto;
    }

    public function getNombre_cientifico() {
        return $this->nombre_cientifico;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getFecha_ingreso() {
        return $this->fecha_ingreso;
    }

    public function getFuente_informacion() {
        return $this->fuente_informacion;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getForma_idforma() {
        return $this->forma_idforma;
    }

    public function getColor_idcolor() {
        return $this->color_idcolor;
    }

    public function getTipohoja_idtipohoja() {
        return $this->tipohoja_idtipohoja;
    }

    public function getContinente_idcontinente() {
        return $this->continente_idcontinente;
    }

    public function getZonacardinal_idzonacardinal() {
        return $this->zonacardinal_idzonacardinal;
    }

    public function getFamilia_idfamilia() {
        return $this->familia_idfamilia;
    }

    public function getDeterminadapor_iddeterminadapor() {
        return $this->determinadapor_iddeterminadapor;
    }

    public function getReproduccion() {
        return $this->reproduccion;
    }

    public function getIdentificada() {
        return $this->identificada;
    }

    public function getVisible() {
        return $this->visible;
    }

    public function getRevision() {
        return $this->revision;
    }

    public function setGenero_idgenero($genero_idgenero) {
        $this->genero_idgenero = $genero_idgenero;
    }

    public function setEpiteto_idepiteto($epiteto_idepiteto) {
        $this->epiteto_idepiteto = $epiteto_idepiteto;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setFuente_informacion($fuente_informacion) {
        $this->fuente_informacion = $fuente_informacion;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setForma_idforma($forma_idforma) {
        $this->forma_idforma = $forma_idforma;
    }

    public function setColor_idcolor($color_idcolor) {
        $this->color_idcolor = $color_idcolor;
    }

    public function setTipohoja_idtipohoja($tipohoja_idtipohoja) {
        $this->tipohoja_idtipohoja = $tipohoja_idtipohoja;
    }

    public function setContinente_idcontinente($continente_idcontinente) {
        $this->continente_idcontinente = $continente_idcontinente;
    }

    public function setZonacardinal_idzonacardinal($zonacardinal_idzonacardinal) {
        $this->zonacardinal_idzonacardinal = $zonacardinal_idzonacardinal;
    }

    public function setFamilia_idfamilia($familia_idfamilia) {
        $this->familia_idfamilia = $familia_idfamilia;
    }

    public function setDeterminadapor_iddeterminadapor($determinadapor_iddeterminadapor) {
        $this->determinadapor_iddeterminadapor = $determinadapor_iddeterminadapor;
    }

    public function setReproduccion($reproduccion) {
        $this->reproduccion = $reproduccion;
    }

    public function setIdentificada($identificada) {
        $this->identificada = $identificada;
    }

    public function setVisible($visible) {
        $this->visible = $visible;
    }

    public function setRevision($revision) {
        $this->revision = $revision;
    }

}
