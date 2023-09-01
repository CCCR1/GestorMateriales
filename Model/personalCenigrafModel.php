<?php
include_once('Conexion.php');

class PersonalC extends Conexion
{
    public function __construct(){

        $this->db=parent::__construct();
       
    }
public function CrearPersonal()
{
    //debe definir las funciones del modelo personal
}
    	
}

?>