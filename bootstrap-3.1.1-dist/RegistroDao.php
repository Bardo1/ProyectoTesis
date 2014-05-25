<?php
include("DB.php");
include("Registro.php");

class RegistroDAO{
public function Ingresar($registro){
try{
   global $DB;    
$query = "INSERT INTO registrodatosdeusuario(CorreoElectronico,Clave,ConfirmarClave,Rut,RutDig)"; 
$query.= "VALUES ('".$registro->GetCorreoElectronico()."','".$registro->GetClave()."','".$registro->GetConfirmarClave()."','".$registro->GetRut()."','".$registro->GetRutDig()."')";
 
   $DB->Execute($query);
   return true;
   }catch(exception $e){
   print_r("Error en la query");
   return null;
 }                            
}


public function Buscar($codigo){	
   try{
   global $DB;
   $rs= $DB->Execute("SELECT * FROM  registrodatosdeusuario WHERE  nombre='%$Codigo%'");
   if($rs=!null){
   $CorreoElectronico1=$rs["CorreoElectronico"];
   $Clave1=$rs["Clave"];
   $ConfirmarClave1=$rs["ConfirmarClave"];
   $Rut1=$rs["Rut"];
   $RutDig1=$rs["RutDig"];
   $Registro1= new Registro($CorreoElectronico1,$Clave1,$ConfirmarClave1,$Rut1,$RutDig1);
   return $Registro1;
   }else{
   return null;
   }			
   }catch(exception $e){
   print_r("Error en la query");
   return null;
   }	
}


public function BuscarClaveRegistro($correo1){  
try{
   global $DB;
   $rs=$DB->Execute("SELECT * FROM registrodatosdeusuario WHERE CorreoElectronico='$correo1'");
   if (!$rs){
   print $DB->ErrorMsg();
   return null;
   }else{
    while (!$rs->EOF) {
   $CorreoElectronico1=$rs->fields[0];
   $rs->MoveNext();
   }
   return  $CorreoElectronico1;
   }
   }catch(exception $e){
   print_r("Error en la query");
   return null;
 }   
}





public function BuscarUsuarioLogin($user,$password){
   
try{
   global $DB;
    $rs=$DB->Execute("SELECT * FROM registrodatosdeusuario WHERE CorreoElectronico='$user' and Clave='$password'");
   if (!$rs){
   return null;
   print $DB->ErrorMsg();
   }else{
    while(!$rs->EOF){
   $CorreoElectronico1=$rs->fields[0];
   $Clave1=$rs->fields[1];
   $ConfirmarClave1=$rs->fields[2];
   $Rut1=$rs->fields[3];
   $RutDig1=$rs->fields[4];
   $rs->MoveNext();
   }
   $Registro1= new Registro($CorreoElectronico1,$Clave1,$ConfirmarClave1,$Rut1,$RutDig1);
   return $Registro1;
   }
   }catch(exception $e){
   print_r("Error en la query");
   return null;
 }
   
   
}





}
?>