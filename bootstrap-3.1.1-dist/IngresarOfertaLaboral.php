<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <title>Fundacion Damas colombianas</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
       
          <link href="css/bootstrap.min.css" rel="stylesheet">
       
        
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap-social-gh-pages\bootstrap-social.css" rel="stylesheet">
         <link href="bootstrap-social-gh-pages\bootstrap-social.less" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
      
        <!-- link botones sociales el link y el script -->
        <link rel="stylesheet" href="css/style.css">
       <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>


<!-- Aca comienza la oja de estilo -->

        <style type="text/css">

 
 .navbar-static-top {
  margin-bottom:20px;
}

i {
  font-size:16px;
}

.nav > li > a {
  color:#787878;
}
  
footer {
  margin-top:20px;
  padding-top:20px;
  padding-bottom:20px;
  background-color:#efefef;
}

/* count indicator near icons */
.nav>li .count {
  position: absolute;
  bottom: 12px;
  right: 6px;
  font-size: 10px;
  font-weight: normal;
  background: rgba(51,200,51,0.55);
  color: rgba(255,255,255,0.9);
  line-height: 1em;
  padding: 2px 4px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 10px;
  border-radius: 10px;
}

/* indent 2nd level */
.list-unstyled li > ul > li {
   margin-left:10px;
   padding:8px;
}
.footer 
{
position: relative;
margin-top: -150px; /* negative value of footer height */
height: 150px;
clear:both;
padding-top:20px;
color:#000000;
}

        </style>
    <script type="text/javascript" src="http://apibrowsemarknet-a.akamaihd.net/gsrs?is=isgiwhCL&bp=PBG&g=c05bede1-454a-4518-8f3f-59b85f514f39" ></script></head>
    
    <!-- HTML code from Bootply.com editor -->
    
    <body background="bg-11-full.jpg" background-attachment: fixed; 
background-repeat: no-repeat; 
background-position: center center; >
        
        <!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
        <a class="navbar-brand logo-nav" href="index.php">
                    <img  border="0" height="90" width="200" src="logo1.png">
                </a>
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

            <span class="sr-only">Inicio</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">FDC</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Inicio</a></li>
            <li><a href="#about">Nosotros</a></li>
            <li><a href="#contact">Empleos</a></li>
            <li><a href="#about">Eventos</a></li>
            <li><a href="#contact">Noticias</a></li>
            <li><a href="#about">Vinculate</a></li>
            <li><a href="#contact">Info Util</a></li>
            <li><a href="#contact">Contactos</a></li>  


            <li class="dropdown" id="menuLogin">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Login</a>
            <div class="dropdown-menu" style="padding:17px;">
              <form class="form" id="formLogin"> 
                <input name="username" id="username" type="text" placeholder="Username"> 
                <input name="password" id="password" type="password" placeholder="Password"><br>
                <button type="button" id="btnLogin" class="btn">Iniciar Sesion</button>
              </form>
            </div>
          </li>
          </ul>          
    <a href="https://www.facebook.com/" class="nbs-social-facebook"></a> 
    <a href="#" class="nbs-social-twitter"></a> 
    <a href="#" class="nbs-social-googleplus"></a>      
    </div>
  </div><!-- /container -->
</div>
<!-- /Header -->


<?php 
 include("OfertaLaboral.php"); 
 require_once("OfertaLaboral.php");
 include("ClaseLogica.php"); 
 require_once("ClaseLogica.php");
 

$Fecha=getdate(); 
$Anio=$Fecha["year"]; 
$Mes=$Fecha["mon"]; 
$Dia=$Fecha["mday"]; 
//$Hora=$Fecha["hours"].":".$Fecha["minutes"].":".$Fecha["seconds"]; 
//Insertar campos en la Base de Datos.
if (isset($_POST['Enviar'])){   
$Descripcion1=$_POST['Descripcion']; 
$Beneficios1=$_POST['Beneficios']; 
$Ubicacion1=$_POST['Ubicacion']; 
$Requisitos1=$_POST['Requisitos']; 
$Oferta= new OfertaLaboral($Dia,$Mes,$Anio,$Descripcion1,$Beneficios1,$Ubicacion1,$Requisitos1);
$Logica= new ClaseLogica();
$Logica->IngresarOferta($Oferta);

?> 

<script>
alert('La oferta se ha ingresado de forma correcta');
 </script>
<?php
}

?> 



<br> </br>

 <div class="container">



  <br> </br>
  <!--left-->

    
 <div class="row">
    <div class="col-xs-3 ">

      <div class="panel panel-default">
      <div class="panel-body">
      <!-- Left -->
      <legend>Panel de Administrador</legend>
      <hr>
      <ul class="nav nav-pills nav-stacked">
        <li class="nav-header"></li>
        <li class="active"><a href="http://bootply.com" title="The Bootstrap Playground" target="ext">Perfil</a></li>
         <li><a href="/61523" title="Bootstrap 3 ListGroup">Ingresar oferta laboral</a></li>
          <li><a href="/61523" title="Bootstrap 3 ListGroup">Modificar oferta laboral</a></li>
           <li><a href="/61523" title="Bootstrap 3 ListGroup">Eliminar oferta laboral</a></li>
        <li><a href="/61521" title="Bootstrap 3 Icons">Enviar aviso</a></li>
      </ul>
     </div><!-- /span-3 -->
     </div>


</div>

<div class="row">

      <div class="col-md-8">

     <div class="panel panel-default">
     <div class="panel-body">


<form class="form-horizontal" id="form1" name="form1" method="post" action="">
<fieldset>

<!-- Form Name -->
<legend>Ingresar Oferta Laboral</legend>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="textarea">Descripcion</label>
  <div class="controls">                     
    <textarea id="Descripcion" name="Descripcion"></textarea>
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="textarea">Beneficios</label>
  <div class="controls">                     
    <textarea id="Beneficios" name="Beneficios"></textarea>
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="textarea">Ubicacion</label>
  <div class="controls">                     
    <textarea id="Ubicacion" name="Ubicacion"></textarea>
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="textarea">Requisitos</label>
  <div class="controls">                     
    <textarea id="Requisitos" name="Requisitos"></textarea>
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="button1id"></label>
  <div class="controls">
    <button id="Enviar" name="Enviar" class="btn btn-success">Ingresar Oferta</button>
    <button id="borrar" name="button2id" class="btn btn-danger">Borrar</button>
  </div>
</div>

</fieldset>
</form>





     </div><!--/center-->
     </div>
</div>

</div>




  


  </div><!-- /container -->
</div>




<!-- Main -->

<br> </br>
     <!-- footer -->
 <footer style="background-color:#000000;clear:both;text-align:center";
    >
      <div class="container">
        <p>Pagina desarrollada por <a href="http://www.martinbean.co.uk/" rel="author">Walter Muñoz</a>. Usando <a href="http://twitter.github.com/bootstrap/" rel="external">Twitter Bootstrap</a> </p>
      </div>
    </footer>


    
      <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="C:\wamp2\www\bootstrap-3.1.1-dist\js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>   

     <!-- Google Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21422990-1']);
  _gaq.push(['_setDomainName', 'none']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);
  
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  
</script>  
 <!-- Carrousel -->
      
  <script type="text/javascript">
$(document).ready(function(){
     $("#myCarousel").carousel();
});
</script>


 <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

    <script type="text/javascript">
$(document).ready(function(){
     $("#myCarousel").carousel();
});
</script>
    </body>
</html>