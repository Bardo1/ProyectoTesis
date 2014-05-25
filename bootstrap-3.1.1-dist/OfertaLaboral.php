<?php
class OfertaLaboral{
   var $FechaDia;
   var $FechaMes;
   var $FechaAnio;
   var $Descripcion;
   var $Beneficios;
   var $Ubicacion;
   var $Requisitos;

 public function __construct($FechaDia1,$FechaMes1,$FechaAnio1,$Descripcion1,$Beneficios1,$Ubicacion1,$Requisitos1){
	
   $this->FechaDia=$FechaDia1;
   $this->FechaMes=$FechaMes1;
   $this->FechaAnio=$FechaAnio1;
   $this->Descripcion=$Descripcion1;
   $this->Beneficios=$Beneficios1;
   $this->Ubicacion=$Ubicacion1;
   $this->Requisitos=$Requisitos1; 
} 
public function GetFechaDia(){
return $this->FechaDia;
} 
public function GetFechaMes(){
return $this->FechaMes;
} 
public function GetFechaAnio(){
return $this->FechaAnio;
} 
public function GetDescripcion(){
return $this->Descripcion;
} 
public function GetBeneficios(){
return $this->Beneficios;
} 
public function GetUbicacion(){
return $this->Ubicacion;
} 
public function GetRequisitos(){
return $this->Requisitos;
}   
} 
?>