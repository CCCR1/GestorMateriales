<?php

include_once('Conexion.php');

class PersonalC extends Conexion {

    public function getIdFicha() {
        return $this->idFicha;
    }

    public function setIdFicha($idFicha) {
        $this->idFicha = $idFicha;
    }

    public function getNumeroFicha() {
        return $this->numeroFicha;
    }

    public function setNumeroFicha($numeroFicha) {
        $this->numeroFicha = $numeroFicha;
    }

