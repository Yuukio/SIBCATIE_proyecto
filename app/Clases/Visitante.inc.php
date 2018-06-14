<?php

class Visitante {

    private $idVisitante;
    private $usuario;
    private $password;
    private $email;

    public function __construct($idVisitante, $usuario, $password, $email) {
        $this->idVisitante = $idVisitante;
        $this->usuario = $usuario;
        $this->password = $password;
        $this->email = $email;
    }

    public function getIdVisitante() {
        return $this->idVisitante;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

}
