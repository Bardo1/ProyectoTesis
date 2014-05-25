<?php
include("DB.php"); 
class PerfilDao{
public function Ingresar($Perfil){
try{
   global $DB;  
   $Nombre1= $Perfil->GetNombre(); 
   $ApellidoPaterno1= $Perfil->GetApellidoPaterno(); 
   $ApellidoMaterno1 =$Perfil->GetApellidoMaterno(); 
   $Dia1= $Perfil->GetDia(); 
   $Mes1= $Perfil->GetMes();
   $Anio1= $Perfil->GetAnio(); 
   $Genero1= $Perfil->GetGenero();
   $Rut1= $Perfil->GetRut(); 
   $RutDig1= $Perfil->GetRutDig();
   $EstadoCivil1= $Perfil->GetEstadoCivil(); 
   $Nacionalidad1= $Perfil->GetNacionalidad(); 
   $Direccion1= $Perfil->GetDireccion(); 
   $Residencia1= $Perfil->GetResidencia(); 
   $Region1= $Perfil->GetRegion(); 
   $Comuna1= $Perfil->GetComuna();
   $Ciudad1= $Perfil->GetCiudad();
   $Telf11= $Perfil->GetTelf1();
   $Telf21= $Perfil->GetTelf2();
   $Telf31= $Perfil->GetTelf3();
   $Cel11= $Perfil->GetCel1();
   $Cel21= $Perfil->GetCel2(); 

$que="INSERT INTO datosperfil(Nombres,ApellidoPaterno,ApellidoMaterno,Fndia,Fnmes,Fnanio,Genero,Nidentidad,NidentidadDig,EstadoCivil,Nacionalidad,Direccion,PaisDeResidencia,Region,Comuna,Ciudad,Telfij1,Telfij2,Telfij3,TelCel1,TelCel2)"; 
$que.= "VALUES('".$Nombre1."','".$ApellidoPaterno1."','".$ApellidoMaterno1."','".$Dia1."','".$Mes1."','".$Anio1."','".$Rut1."','".$Genero1."','".$RutDig1."','".$EstadoCivil1."','".$Nacionalidad1."','".$Direccion1."','".$Residencia1."','".$Region1."','".$Comuna1."','".$Ciudad1."','".$Telf11."','".$Telf21."','".$Telf31."','".$Cel11."','".$Cel21."')";

   $DB->Execute($que);
   echo"executo la query";
   return 1;
   }catch(exception $e){
   print_r("Error en la query");

 }
                            
}




public function Buscar($codigo){
	
try{
   global $DB;
   $rs= $DB->Execute("SELECT * FROM  datosperfil WHERE Nombres='$codigo'");

   if (!$rs){
     print $DB->ErrorMsg();
	 return null;
  }else{
    while (!$rs->EOF) {
   $Nombre1= $rs->fields[0]; 
   $ApellidoPaterno1= $rs->fields[1]; 
   $ApellidoMaterno1=$rs->fields[2];
   $Dia1=$rs->fields[3]; 
   $Mes1=$rs->fields[4];
   $Anio1=$rs->fields[5]; 
   $Genero1=$rs->fields[6];
   $Rut1=$rs->fields[7];
   $RutDig1=$rs->fields[8];
   $EstadoCivil1=$rs->fields[9]; 
   $Nacionalidad1=$rs->fields[10]; 
   $Direccion1=$rs->fields[11]; 
   $Residencia1=$rs->fields[12]; 
   $Region1=$rs->fields[13];
   $Comuna1=$rs->fields[14];
   $Ciudad1=$rs->fields[15];
   $Telf11=$rs->fields[16];
   $Telf21=$rs->fields[17];
   $Telf31=$rs->fields[18];
   $Cel11=$rs->fields[19];
   $Cel21=$rs->fields[20];
   $rs->MoveNext();
   }
   
   $Per= new Perfil($Nombre1,$ApellidoPaterno1,$ApellidoMaterno1,$Dia1,$Mes1,$Anio1,$Genero1,$Rut1,$RutDig1,$EstadoCivil1,$Nacionalidad1,$Direccion1,$Residencia1,$Region1,$Comuna1,$Ciudad1,$Telf11,$Telf21,$Telf31,$Cel11,$Cel21);
   return $Per;
   }

   }catch(exception $e){
   print_r("Error en la query");
   return null;
 }
   
	
}

	
	
}
?>