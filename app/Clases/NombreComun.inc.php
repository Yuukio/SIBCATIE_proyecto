<?php 

class NombreComun{

    private $idNombreComun;
    private $nombre_comun;
    private $lengua;
    private $Planta_idPlanta;
    
    public function __construct($idNombreComun, $nombre_comun, $lengua, $Planta_idPlanta) {
        $this->idNombreComun = $idNombreComun;
        $this->nombre_comun = $nombre_comun;
        $this->lengua = $lengua;
        $this->Planta_idPlanta = $Planta_idPlanta;
    }
    
    public function getIdNombreComun() {
        return $this->idNombreComun;
    }

    public function getNombre_comun() {
        return $this->nombre_comun;
    }

    public function getLengua() {
        return $this->lengua;
    }

    public function getPlanta_idPlanta() {
        return $this->Planta_idPlanta;
    }

    public function setNombre_comun($nombre_comun) {
        $this->nombre_comun = $nombre_comun;
    }

    public function setLengua($lengua) {
        $this->lengua = $lengua;
    }
}
