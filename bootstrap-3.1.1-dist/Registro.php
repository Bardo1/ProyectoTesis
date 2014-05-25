<?php
class Registro{
	
var $CorreoElectronico; 
var $Clave; 
var $ConfirmarClave; 
var $Rut; 
var $RutDig; 

public function __construct($CorreoElectronico1,$Clave1,$ConfirmarClave1,$Rut1,$RutDig1){
	    
$this->CorreoElectronico=$CorreoElectronico1; 
$this->Clave=$Clave1; 
$this->ConfirmarClave=$ConfirmarClave1; 
$this->Rut=$Rut1; 
$this->RutDig=$RutDig1; 
} 

public function GetCorreoElectronico(){
return $this->CorreoElectronico;
} 
public function GetClave(){
return $this->Clave;
}  
public function GetConfirmarClave(){
return $this->ConfirmarClave;
}  
public function GetRut(){
return $this->Rut;
}  
public function GetRutDig(){
return $this->RutDig;
}  

} 
?>