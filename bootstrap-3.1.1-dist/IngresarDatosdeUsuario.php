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
        <a href="https://www.facebook.com/" class="nbs-social-facebook"></a>        <a href="#" class="nbs-social-twitter"></a> 
        <a href="#" class="nbs-social-googleplus"></a> 
    </div>
  </div><!-- /container -->
</div>
<!-- /Header -->
         
<?php 
 include("ClaseLogica.php"); 
 require_once("ClaseLogica.php");
 include("Perfil.php"); 
 require_once("Perfil.php");



if (isset($_POST['Ingresar'])) {

echo "por aca si";
$Nombre1=$_POST['Nombre']; 
$ApellidoPaterno1=$_POST['ApellidoPaterno']; 
$ApellidoMaterno1=$_POST['ApellidoMaterno']; 
$Dia1=$_POST['Dia']; 
$Mes1=$_POST['Mes']; 
$Anio1=$_POST['Anio']; 
$Genero1=$_POST['Genero']; 
$Rut1=$_POST['Rut']; 
$RutDig1=$_POST['RutDig'];
$EstadoCivil1=$_POST['EstadoCivil']; 
$Nacionalidad1=$_POST['Nacionalidad']; 
$Direccion1=$_POST['Direccion']; 
$Residencia1=$_POST['Residencia']; 
$Region1=$_POST['Region']; 
$Comuna1=$_POST['Comuna'];
$Ciudad1=$_POST['Ciudad'];
$Telf11=$_POST['Telf1'];
$Telf21=$_POST['Telf2'];
$Telf31=$_POST['Telf3'];
$Cel11=$_POST['Cel1'];
$Cel21=$_POST['Cel2']; 

$Perfil= new Perfil($Nombre1,$ApellidoPaterno1,$ApellidoMaterno1,$Dia1,$Mes1,$Anio1,$Genero1,$Rut1,$RutDig1,$EstadoCivil1,$Nacionalidad1,$Direccion1,$Residencia1,$Region1,$Comuna1,$Ciudad1,$Telf11,$Telf21,$Telf31,$Cel11,$Cel21);
echo "creo perfil";
$Logica= new ClaseLogica();
$Logica->IngresarPerfil($Perfil);
}else{
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
      <legend>Panel de usuario</legend>
      <hr>
      <ul class="nav nav-pills nav-stacked">
        <li class="nav-header"></li>
        <li class="active"><a href="http://bootply.com" title="The Bootstrap Playground" target="ext">Perfil</a></li>
        <li><a href="/tagged/bootstrap-3">Datos de usuario</a></li>
        <li class="divider"></li>
        <li><a href="/61518" title="Bootstrap 3 Panel">Subir curriculum</a></li>
        <li><a href="/61521" title="Bootstrap 3 Icons">Glypicons</a></li>
        <li><a href="/61523" title="Bootstrap 3 ListGroup">List Groups</a></li>
        <li><a href="#">GitHub</a></li>
        <li><a href="/61518" title="Bootstrap 3 Slider">Carousel</a></li>
        <li><a href="/62603">Layout</a></li>
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
<legend>Ingreso datos de usuario</legend>

<!-- Fila 1-->
<legend>Identificación</legend>
<div class="row">
<!-- Text input-->
<div class="col-md-3">
  <label class="control-label" for="textinput">Nombre</label>
  <div class="controls">
    <input id="Nombre" name="Nombre" type="text" placeholder="" class="input-xlarge" required>
    
  </div>
</div>

<!-- Text input-->
<div class="col-md-3">
  <label class="control-label" for="textinput">Apellido paterno</label>
  <div class="controls">
    <input id="ApellidoPaterno" name="ApellidoPaterno" type="text" placeholder="" class="input-xlarge" required>
    
  </div>
</div>

<!-- Text input-->
<div class="col-md-3">
  <label class="control-label" for="textinput">Apellido materno</label>
  <div class="controls">
    <input id="ApellidoMaterno" name="ApellidoMaterno" type="text" placeholder="" class="input-xlarge" required>
    
  </div>
</div>
</div>

<!-- Fila 2-->
<div class="row">
<!-- Select Basic -->
<div class="col-md-2">
  <label class="control-label" for="selectbasic">Dia</label>
  <div class="controls">
    <select id="Dia" name="Dia" class="input-xlarge">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
      <option>11</option>
      <option>12</option>
      <option>13</option>
      <option>14</option>
      <option>15</option>
      <option>16</option>
      <option>17</option>
      <option>18</option>
      <option>19</option>
      <option>20</option>
      <option>21</option>
      <option>22</option>
      <option>23</option>
      <option>24</option>
      <option>25</option>
      <option>26</option>
      <option>27</option>
      <option>28</option>
      <option>29</option>
      <option>30</option>
      <option>31</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="col-md-2">
  <label class="control-label" for="selectbasic">Mes</label>
  <div class="controls">
    <select id="Mes" name="Mes" class="input-xlarge">
      <option>Enero</option>
      <option>Febrero</option>
      <option>Marzo</option>
      <option>Abril</option>
      <option>Mayo</option>
      <option>Junio</option>
      <option>Julio</option>
      <option>Agosto</option>
      <option>Septiembre</option>
      <option>Octubre</option>
      <option>Noviembre</option>
      <option>Diciembre</option>
    </select>
  </div>
</div>
<!-- Select Basic -->
<div class="col-md-2">
  <label class="control-label" for="selectbasic">Año</label>
  <div class="controls">
    <select id="Anio" name="Anio" class="input-xlarge">
      <option>1944</option>
      <option>1945</option>
      <option>1946</option>
      <option>1947</option>
      <option>1948</option>
      <option>1949</option>
      <option>1950</option>
      <option>1951</option>
      <option>1952</option>
      <option>1953</option>
      <option>1954</option>
      <option>1955</option>
      <option>1956</option>
      <option>1957</option>
      <option>1958</option>
      <option>1959</option>
      <option>1960</option>
      <option>1961</option>
      <option>1962</option>
      <option>1963</option>
      <option>1964</option>
      <option>1965</option>
      <option>1966</option>
      <option>1967</option>
      <option>1968</option>
      <option>1969</option>
      <option>1970</option>
      <option>1971</option>
      <option>1972</option>
      <option>1973</option>
      <option>1974</option>
      <option>1975</option>
      <option>1976</option>
      <option>1977</option>
      <option>1978</option>
      <option>1979</option>
      <option>1980</option>
      <option>1981</option>
      <option>1982</option>
      <option>1983</option>
      <option>1984</option>
      <option>1985</option>
      <option>1986</option>
      <option>1987</option>
      <option>1988</option>
      <option>1989</option>
      <option>1990</option>
      <option>1991</option>
      <option>1992</option>
      <option>1993</option>
      <option>1994</option>
      <option>1995</option>
      <option>1996</option>
      <option>1997</option>
      <option>1998</option>
      <option>1999</option>
      <option>2000</option>
      <option>2001</option>
      <option>2002</option>
      <option>2003</option>
      <option>2004</option>
      <option>2005</option>
      <option>2006</option>
      <option>2007</option>
      <option>2008</option>
      <option>2009</option>
      <option>2010</option>
      <option>2011</option>
      <option>2012</option>
      <option>2013</option>
      <option>2014</option>
    </select>
  </div>
</div>
<!-- Multiple Radios -->
<div class="col-md-2">
  <label class="control-label" for="radios">Genero</label>
  <div class="controls">
    <label class="radio" for="radios-0">
      <input type="radio" name="Genero" id="Genero" value="Masculino" checked="checked">
      Masculino
    </label>
    <label class="radio" for="radios-1">
      <input type="radio" name="Genero" id="Genero" value="Femenino">
      Femenino
    </label>
  </div>
</div>

<!-- Text input-->
<div class="col-md-2">
  <label class="control-label" for="textinput">Rut</label>
  <div class="controls">
    <input id="Rut" name="Rut" type="text" placeholder="" class="input-xlarge" required>
    
  </div>
</div>

<!-- Text input-->
<div class="col-md-2">
  <label class="control-label" for="textinput">-</label>
  <div class="controls">
    <input id="RutDig" size="3"name="RutDig" type="text" placeholder="" class="input-xlarge" required>
    
  </div>
</div>
</div>


<!-- Fila 2-->
<div class="row">
<!-- Text input-->
<div class="col-md-3">
  <label class="control-label" for="textinput">Estado civil</label>
  <div class="controls">
    <input id="EstadoCivil" name="EstadoCivil" type="text" placeholder="" class="input-xlarge" required>
    
  </div>
</div>

<!-- Text input-->
<div class="col-md-3">
  <label class="control-label" for="textinput">Nacionalidad</label>
  <div class="controls">
    <input id="Nacionalidad" name="Nacionalidad" type="text" placeholder="" class="input-xlarge" required>
  </div>
</div>
</div>


<br> </br>
<!-- Text input-->
<legend>Datos de contacto</legend>
<!-- Fila 3-->
<div class="row">
<!-- Text input-->
<div class="col-md-3">
  <label class="control-label" for="textinput">Direccion</label>
  <div class="controls">
    <input id="Direccion" name="Direccion" type="text" placeholder="" class="input-xlarge" required>
    
  </div>
</div>

<!-- Text input-->
<div class="col-md-3">
  <label class="control-label" for="textinput">Pais de residencia</label>
  <div class="controls">
    <input id="Residencia" name="Residencia" type="text" placeholder="" class="input-xlarge" required>
    
  </div>
</div>

<!-- Text input-->
<div class="col-md-3">
  <label class="control-label" for="textinput">Region</label>
  <div class="controls">
    <input id="Region" name="Region" type="text" placeholder="" class="input-xlarge" required>
    
  </div>
</div>
</div>

<!-- Fila 4-->
<div class="row">
<!-- Text input-->
<div class="col-md-3">
  <label class="control-label" for="textinput">Comuna</label>
  <div class="controls">
    <input id="Comuna" name="Comuna" type="text" placeholder="" class="input-xlarge" required>
    
  </div>
</div>

<!-- Text input-->
<div class="col-md-3">
  <label class="control-label" for="textinput">Ciudad</label>
  <div class="controls">
    <input id="Ciudad" name="Ciudad" type="text" placeholder="" class="input-xlarge" required>
    
  </div>
</div>

<!-- Text input-->
<div class="col-md-2">
  <label class="control-label" for="textinput">Telefono fijo</label>
  <div class="controls">
    <input id="Telf1" size="3" name="Telf1" type="text" placeholder="" class="input-xlarge" required>
    
  </div>
</div>

<!-- Text input-->
<div class="col-md-1">
  <label class="control-label" for="textinput">.</label>
  <div class="controls">
    <input id="Telf2" size="3" name="Telf2" type="text" placeholder="" class="input-xlarge" required>
  </div>
</div>

<!-- Text input-->
<div class="col-md-1">
  <label class="control-label" for="textinput">.</label>
  <div class="controls">
    <input id="Telf3" name="Telf3" type="text" placeholder="" class="input-xlarge" required>
    
  </div>
</div>
</div>


<div class="row">
<!-- Text input-->
<div class="col-md-4">
  <label class="control-label" for="textinput">Telefono celular</label>
  <div class="controls">
    <input id="Cel1" size="3" name="Cel1" type="text" placeholder="" class="input-xlarge" required>
    
  </div>
</div>

<!-- Text input-->
<div class="col-md-1">
  <label class="control-label" for="textinput">.</label>
  <div class="controls">
    <input id="Cel2" name="Cel2" type="text" placeholder="" class="input-xlarge" required>
  </div>
</div>
</div>
<br> </br>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="button1id"></label>
  <div class="controls">
    <button id="Ingresar" name="Ingresar" class="btn btn-success">Ingresar datos</button>
    <button id="button2id" name="button2id" class="btn btn-danger">Borrar datos</button>
  </div>
</div>
<br> </br>
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
    <script src="js/bootstrap.min.js"></script>
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