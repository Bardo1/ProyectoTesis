<?php
class Perfil{
  
var $Nombre; 
var $ApellidoPaterno; 
var $ApellidoMaterno; 
var $Dia; 
var $Mes;
var $Anio; 
var $Genero;
var $Rut; 
var $RutDig;
var $EstadoCivil; 
var $Nacionalidad; 
var $Direccion; 
var $Residencia; 
var $Region; 
var $Comuna;
var $Ciudad;
var $Telf1;
var $Telf2;
var $Telf3;
var $Cel1;
var $Cel2; 

public function __construct($Nombre1, $ApellidoPaterno1,$ApellidoMaterno1, $Dia1,$Mes1,$Anio1,$Genero1,$Rut1,$RutDig1,$EstadoCivil1,$Nacionalidad1,$Direccion1,$Residencia1,$Region1,$Comuna1,$Ciudad1,$Telf11,$Telf21,$Telf31,$Cel11,$Cel21){
   
   
$this->Nombre=$Nombre1; 
$this->ApellidoPaterno=$ApellidoPaterno1; 
$this->ApellidoMaterno=$ApellidoMaterno1; 
$this->Dia=$Dia1; 
$this->Mes=$Mes1; 
$this->Anio=$Anio1;
$this->Genero=$Genero1; 
$this->Rut=$Rut1; 
$this->RutDig=$RutDig1;
$this->EstadoCivil=$EstadoCivil1; 
$this->Nacionalidad=$Nacionalidad1; 
$this->Direccion=$Direccion1; 
$this->Residencia=$Residencia1; 
$this->Region=$Region1; 
$this->Comuna=$Comuna1;
$this->Ciudad=$Ciudad1;
$this->Telf1=$Telf11;
$this->Telf2=$Telf21;
$this->Telf3=$Telf31;
$this->Cel1=$Cel11;
$this->Cel2=$Cel21; 
}   

public function GetNombre(){
return $this->Nombre;
} 
public function GetApellidoPaterno(){
return $this->ApellidoPaterno;
} 
public function GetApellidoMaterno(){
return $this->ApellidoMaterno;
} 
public function GetDia(){
return $this->Dia;
} 
public function GetMes(){
return $this->Mes;
} 
public function GetAnio(){
return $this->Anio;
} 
public function GetGenero(){
return $this->Genero;
} 
public function GetRut(){
return $this->Rut;
} 
public function GetRutDig(){
return $this->RutDig;
} 
public function GetEstadoCivil(){
return $this->EstadoCivil;
} 
public function GetNacionalidad(){
return $this->Nacionalidad;
} 
public function GetDireccion(){
return $this->Direccion;
} 
public function GetResidencia(){
return $this->Residencia;
} 
public function GetRegion(){
return $this->Region;
} 
public function GetComuna(){
return $this->Comuna;
} 
public function GetCiudad(){
return $this->Ciudad;
} 
public function GetTelf1(){
return $this->Telf1;
} 
public function GetTelf2(){
return $this->Telf2;
} 
public function GetTelf3(){
return $this->Telf3;
} 
public function GetCel1(){
return $this->Cel1;
} 
public function GetCel2(){
return $this->Cel2;
} 

} 
?>