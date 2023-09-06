<?php
include_once('Conexion.php');

class buscador_usuario extends Conexion

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }
