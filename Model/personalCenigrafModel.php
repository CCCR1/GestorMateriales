<?php
include_once('../../Conexion.php');

class PersonalC extends Conexion
{
    public function __construct(){

        $this->db=parent::__construct();
       
    }
public function addPersona($Documentoper,$Nombrepersona,$Cargoper)
{
    
  
   //crear la sentencia sql
   $statement = $this->db->prepare("INSERT INTO persona(DocumentoPer,NombrePersonal,CargoPer)values(:Documentoper,:Nombrepersona,:CargoPer)");
   $statement->bindParam(':Documentoper',$Documentoper);
   $statement->bindParam(':Nombrepersona',$Nombrepersona);
   $statement->bindParam(':CargoPer',$Cargoper);
 
   if($statement->execute())
   {
     
     print "<script>alert(\"Personal creado\");
		//window.location='../../index.php';</script>";
   }else
   {
      print "<script>alert(\"No se puede registrar el usuario.\");
		//window.location='../../index.php';</script>";

   }

}
}

?>