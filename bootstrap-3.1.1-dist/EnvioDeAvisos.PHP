<?php 
session_start(); 
function verificar_login($user,$password,&$result) 
    { 
		      
$conn = mysql_connect('localhost','root','');
mysql_select_db('NuevaBase',$conn);
$username = mysql_real_escape_string($user);
$query = "SELECT CorreoElectronico, Clave, ConfirmarClave, Rut, RutDig
         FROM registrodatosdeusuario WHERE CorreoElectronico='$user';";
$nombre=
		 		
$rec = mysql_query($query);
      
        $count = 0; 
        while($row = mysql_fetch_object($rec)) 
        { 
            $count++; 
            $result = $row; 
        } 
        if($count == 1) 
        { 
            return 1; 
        } 
        else 
        { 
            return 0; 
        } 
    } 



if(!isset($_SESSION['userid']))
{ 
    if(isset($_POST['login']))
    { 
        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1) 
        { 
          echo $result->GetCorreoElectronico();  
		    $_SESSION['userid'] = $result->CorreoElectronico; 			
			
	 $var1=$_POST['user'];
	 header("location:EntroEnvioDeAvisos.php?var2=$var1");
        } 
        else 
        { 
          //  echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>'; 
		?> 
			
			<script>
           alert('Su usuario es incorrecto, itente nuevamente');
            </script>
		<?php	
        } 
    } 
?> 


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Fundacion Damas Colombianas </title>
<meta name="keywords" content="free css templates, contact, form, message, blue ice, CSS, HTML, templatemo" />
<meta name="description" content="Contact Blue Ice - Free CSS Templates from templatemo.com" />
<link href="../templatemo_301_blue_ice/templatemo_style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body,td,th {
	font-size: 13px;
}
</style>
</head>
<body>

<div id="templatemo_wrapper"> 

	<div id="templatemo_header">

    	<a href="http://www.templatemo.com" rel="nofollow"><img src="images/logo1.png" alt="logo" width="204" height="87" /></a>
    	<div id="site_title">
            <h1>&nbsp;</h1>
        </div> <!-- end of site_title -->
        
        <ul id="social_box">
            <li></li>
            <li></li>
            <li><a href="#"><img src="images/gmas.png" alt="linkin" /></a></li>
            <li><a href="#"><img src="../templatemo_301_blue_ice/images/facebook.png" alt="facebook" /></a></li>
            <li></li>
            <a href="#"><img src="../templatemo_301_blue_ice/images/twitter.png" alt="twitter" /></a>                
        </ul>
        
    </div> <!-- end of templatemo_header -->
    
  <div id="templatemo_menu">
   	  <div class="home"><a href="../templatemo_301_blue_ice/index.html"></a></div>
        <ul>
            <li><a href="../templatemo_301_blue_ice/services.html"><span>Nosotros</span></a></li>
            <li><a href="../templatemo_301_blue_ice/news.html"><span>Empleos</span></a></li>
            <li><a href="../templatemo_301_blue_ice/news.html"><span>Eventos</span></a><a href="../templatemo_301_blue_ice/news.html"><span>Noticias</span></a><a href="../templatemo_301_blue_ice/news.html"><span>Vinculate</span></a><a href="../templatemo_301_blue_ice/about.html"><span>Info Util</span></a></li>
            <li><a href="../templatemo_301_blue_ice/news.html"><span>Contacto</span></a></li>
        </ul>    	
    </div> <!-- end of templatemo_menu -->
    
    

  <div  id="menu_1" style="display:block;">
    <div style="background-image: url('http://static.freepik.com/foto-gratis/luz-brillante-con-rayos-de-color-azul-celeste-de-fondo-vector_293-255.jpg');" WIDTH=800 HEIGHT=800 ><strong>  </strong>
    <form id="form2" name="form2" method="post" action="" class="login" >
      <table width="975" height="80" border="1">
        <tr>
          <td width="233" height="74"><p align="center"><strong>
            <label for="asd3">Iniciar sesion<br/></label>
            </strong> </p>
            <label style="float: left; width: 25%" for="asd3"><strong>Nombre</strong></label>
            <input  style="float: right; width: 60%" type="text" name="user" id="asd3" />
            </p>
            <p> <strong>
              <label style="float: left; width: 25%"  for="password">password</label>
              </strong>
              <input  style="float: right; width: 60%" type="text" name="password" id="password" />
            </p>
         
            <p>
              <input  style="float: right; width: 60%"  type="submit" name="login" id="enviar" value="login" />
            </p>
     
     <A style="float: left; width: 30%" HREF="RegistroDatosPerfil.html">Registrarse </A>
     <A style="float: left; width: 50%" HREF="ReenviarContrasenia.html">Olvidó Contraseña? </A>
     
      <p>&nbsp;</p></td>
          <td width="726">&nbsp;</td>
        </tr>

 
      
  </table>
    </form>
</div>
</div>
<p>&nbsp;</p> 
  <div id="templatemo_content_wrapper">
    	<div id="templatemo_content_top"></div>
        <div id="templatemo_content">
          <h2>Enviar aviso</h2>
            <p>&nbsp;</p>
            <p><strong>Escriba el mensaje a enviar a todos los usuarios registrados de la FDC.</strong></p>
          <form id="form1" name="form1" method="post" action="">
              <p>
                <textarea name="Mensaje" id="Mensaje" cols="45" rows="5"></textarea>
              </p>
        <span class="col_w340 float_r">
          <input type="submit" class="submit_btn float_l" name="submit" id="submit" value="Enviar" />
        </span>
          </form>
<p>&nbsp;</p>
            <p>&nbsp;</p>
            <div class="cleaner"></div>
            
    </div>
        <div id="templatemo_content_bottom"></div>
  </div>
  <div id="templatemo_footer"></div> <!-- end of templatemo_footer -->
    
</div> <!-- end of templatemo_wrapper -->    
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js'></script>
<script type='text/javascript' src='../templatemo_301_blue_ice/js/logging.js'></script>
</body>
</html>
