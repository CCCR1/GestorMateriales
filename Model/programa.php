<?php
include_once('Conexion.php');

class ProgramaModel {

    private $idPrograma;
    private $nombrePrograma;

    public function getIdPrograma() {
        return $this->idPrograma;
    }

    public function setIdPrograma($idPrograma) {
        $this->idPrograma = $idPrograma;
    }

    public function getNombrePrograma() {
        return $this->nombrePrograma;
    }

    public function setNombrePrograma($nombrePrograma) {
        $this->nombrePrograma = $nombrePrograma;
    }
}
