<?php
require_once('../../Conexion.php');
require_once('../../Model/personalCenigrafModel.php');
if($_POST)
{
	$Persona = new PersonalC();
    $Documentoper=$_POST['txtdocumentoper'];
	$Nombreper= $_POST['txtnombreper'];
	$Cargoper=$_POST['txtcargoper'];
	


$Persona->addPersona($Documentoper,$Nombreper,$Cargoper);
if($admin){
  	print "<script>alert(\"Personal registrado\");
		window.location='../../index.php';</script>";
  }else {
  	print "<script>alert(\"No se puede registrar el Personal.\");
		window.location='../../index.php';</script>";
  }

}


?>