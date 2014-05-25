<?php

include("OfertaDAO.php"); 
include("RegistroDao.php"); 
include("PerfilDao.php");
include("MensajeDao.php");
 
class ClaseLogica {
public function IngresarOferta($oferta)
{
	 $OfertaD= new OfertaDao();
	 $valor=$OfertaD->Ingresar($oferta);
	 if($valor== null){
	 return null ;
     }else{
	 return 1;
	 }
}
public function IngresarRegistro($registro)
{
	 $RegistroD= new RegistroDao();
	 $valor=$RegistroD->Ingresar($registro);
	 if($valor== null){
	 return false;
     }else{
	 return true;
	 }
}
public function IngresarPerfil($perfil)
{
     $PerfilD= new PerfilDao();
	 $valor=$PerfilD->Ingresar($perfil);
	 if($valor== null){
	 return false;
     }else{
	 return true;
	 }
}
public function IngresarMensaje($mensaje)
{
     $MensajeD= new MensajeDao();
	 $valor=$MensajeD->Ingresar($perfil);
	 if($valor== null){
	 return false;
     }else{
	 return true;
	 }
}
public function BuscarPerfil($codigo)
{
	 $PerfilD= new PerfilDao();
     $perfil1= $PerfilD->Buscar($codigo);
	 if($perfil1== null){
	 return null ;
     }else{
	 return $perfil1;
	 }
}
public function BuscarOfertaLaboral($codigo)
{
     $OfertaD= new OfertaDao();
     $Oferta1= $OfertaD->Buscar($codigo);
	 if($Oferta1== null){
	 return null ;
     }else{
	 return $Oferta1;
	 }
}

public function BuscarUsuario($user,$password)
{
     $RegistroD= new RegistroDao();
     $DatosUsuario= $RegistroD->BuscarUsuarioLogin($user,$password);
	 if($DatosUsuario== null){
	 return null ;
     }else{
	 return $DatosUsuario;
	 }
}


public function BuscarListaOfertas()
{
     $OfertaD= new OfertaDAO();
     $ListaOfertas1= $OfertaD->BuscarListaOfer();
	 if($ListaOfertas1== null){
	 return null ;
     }else{
	 return $ListaOfertas1;
	 }
}

public function BuscarRegistro($codigo)
{
     $RegistroD= new RegistroDao();
     $Registro1= $RegistroD->Buscar($codigo);
	 if($Registro1== null){
	 return null ;
     }else{
	 return $Registro1;
	 }
}

public function BuscarClaveRegistro($correo1)
{
     $RegistroD= new RegistroDao();
     $ResultadoCorreo= $RegistroD->BuscarClaveRegistro($correo1);
	 if($ResultadoCorreo== null){
	 return null;
     }else{
	 return $ResultadoCorreo;
	 }
}
public function BuscarMensajes()
{
     $MensaD= new MensajeDao();
     $ListaMensaje1= $MensaD->Buscar();
	 if($ListaMensaje1==null){
	 return null ;
     }else{
	 return $ListaMensaje1;
	 }
}
}

?>
