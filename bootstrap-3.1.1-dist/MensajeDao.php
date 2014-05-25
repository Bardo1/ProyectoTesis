<?php
include("DB.php");

class MensajeDao{
	
public function Ingresar($Mensaje){
try{
   global $DB;
   $dia1=$Mensaje->GetFechaDia();
   $mes1=$Mensaje->GetFechaMes();
   $anio1=$Mensaje->GetFechaAnio();
   $Mensaje1=$Mensaje->GetMensaje();
  

   $Query = "INSERT INTO Mensajes (FechaDia, FechaMes, FechaAnio, Mensaje)"; 
   $Query.= "VALUES ('".$dia1."','".$mes1."','".$anio1."','".$Mensaje."')";

   $DB->Execute($Query);
   $DB->close();
   return true;
   }catch(exception $e){   
   print_r("Error en la query");
   return false;
 }
                            
}
            
	
public function Buscar(){
	
try{
   global $DB;
   $rs=$DB->Execute("SELECT * FROM Mensajes");
   if (!$rs){
   print $DB->ErrorMsg();
   return null;
   }else{
   $cont=0;
    while (!$rs->EOF) {
   $dia1=$rs->fields[0];
   $mes1=$rs->fields[1];
   $anio1=$rs->fields[2];
    echo $rs->fields[2];
   $Mensaje1=$rs->fields[3];
   echo $rs->fields[3];
   $Mensa= new Mensaje($dia1,$mes1,$anio1,$Mensaje1);
   $ListaMensaje[$cont++]=$Mensa;
   $rs->MoveNext();
   }
   
   return $ListaMensaje;
   }
   }catch(exception $e){
   print_r("Error en la query");
   return null;
 }
   
	
}

	
}
	
?>