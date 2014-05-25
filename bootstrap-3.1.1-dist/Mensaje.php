<?php
class Mensaje{
   var $FechaDia;
   var $FechaMes;
   var $FechaAnio;
   var $MensajeTexto;
  

 public function __construct($FechaDia1,$FechaMes1,$FechaAnio1,$MensajeTexto1){
	
   $this->FechaDia=$FechaDia1;
   $this->FechaMes=$FechaMes1;
   $this->FechaAnio=$FechaAnio1;
   $this->MensajeTexto=$MensajeTexto1;

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
public function GetMensaje(){
return $this->MensajeTexto;
} 
} 
?>