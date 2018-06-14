<?php

class Usuario {

    private $idUsuario;
    private $nombre;
    private $apellido;
    private $email;
    private $usuario;
    private $password;
    private $fecha_registro;
    private $activo;
    private $rol;

    public function __construct($idUsuario, $nombre, $apellido, $email, $usuario, $password, $fecha_registro, $activo, $rol) {
        $this->idUsuario = $idUsuario;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->usuario = $usuario;
        $this->password = $password;
        $this->fecha_registro = $fecha_registro;
        $this->activo = $activo;
        $this->rol = $rol;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getFecha_registro() {
        return $this->fecha_registro;
    }

    public function getActivo() {
        return $this->activo;
    }

    public function getRol() {
        return $this->rol;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setActivo($activo) {
        $this->activo = $activo;
    }

    public function setRol($rol) {
        $this->rol = $rol;
    }

}
