<?php
include("DB.php");

class OfertaDAO{
	
public function Ingresar($oferta){
try{
   global $DB;
   $dia1=$oferta->GetFechaDia();
   $mes1=$oferta->GetFechaMes();
   $anio1=$oferta->GetFechaAnio();
   $Des1=$oferta->GetDescripcion();
   $Bene1=$oferta->GetBeneficios();
   $Ubi=$oferta->GetUbicacion();
   $Requi=$oferta->Getrequisitos();

   $Query = "INSERT INTO Ofertalaboral(fdia, fmes, fanio, Descripcion,      Beneficios,Ubicacion, requisitos)"; 
   $Query.= "VALUES ('".$dia1."','".$mes1."','".$anio1."','".$Des1."','".   $Bene1."','".$Ubi."','".$Requi."')";

   $DB->Execute($Query);
   $DB->close();
   return true;
   }catch(exception $e){   
   print_r("Error en la query");
   return false;
 }                         
}
            
	
public function Buscar($codigo){
	
try{
   global $DB;
   $rs=$DB->Execute("SELECT * FROM ofertalaboral WHERE Descripcion='$codigo'");
   if (!$rs){
   print $DB->ErrorMsg();
   return null;
   }else{
    while (!$rs->EOF) {
   $dia1=$rs->fields[0];
   $mes1=$rs->fields[1];
   $anio1=$rs->fields[2];
   $Des1=$rs->fields[3];
   $Bene1=$rs->fields[4];
   $Ubi=$rs->fields[5];
   $Requi=$rs->fields[6];
   $rs->MoveNext();
   }
   $Ofer= new OfertaLaboral($dia1,$mes1,$anio1,$Des1,$Bene1,$Ubi,$Requi);
   return $Ofer;
   }
   }catch(exception $e){
   print_r("Error en la query");
   return null;
 }
   
	
}




public function BuscarListaOfer(){
   
try{
   global $DB;
   $rs=$DB->Execute("SELECT * FROM ofertalaboral");
   if (!$rs){
   print $DB->ErrorMsg();
   return null;
   }else{
   $cont=0;
    while (!$rs->EOF) {
   $dia1=$rs->fields[0];
   $mes1=$rs->fields[1];
   $anio1=$rs->fields[2];
   $Des1=$rs->fields[3];
   $Bene1=$rs->fields[4];
   $Ubi=$rs->fields[5];
   $Requi=$rs->fields[6];
    $Ofer= new OfertaLaboral($dia1,$mes1,$anio1,$Des1,$Bene1,$Ubi,$Requi);
   $ListaOfertas[$cont++]=$Ofer;
   $rs->MoveNext();
   } 
   return $ListaOfertas;
   }
   }catch(exception $e){
   print_r("Error en la query");
   return null;
 }
}

	
}
	
?>