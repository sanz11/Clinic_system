<?php
require_once('modelo/Conectar.php');
require_once('modelo/admin.php');


if(@$_POST["actualizar"]){
    $mensaje="";
$resultado=null;
$dni="70";
@$telefono=$_POST['telefono'];
@$correo=$_POST['email'];
$foto=$_FILES["fotosub"]["name"];
$ruta=$_FILES["fotosub"]["tmp_name"];
$destino="im/admin/".$foto;
copy($ruta,$destino);
$dni=$_POST['dniactu'];
    
	$consulta= new admin();
    $mmsactualizar=$consulta->Update_admin($dni,$correo,$telefono,$destino);
}

?>