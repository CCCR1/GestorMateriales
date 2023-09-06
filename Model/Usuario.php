<?php
include_once('Conexion.php');

class UsuarioC extends Conexion

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }
