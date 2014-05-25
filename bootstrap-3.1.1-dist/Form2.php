 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
   <HEAD>
      <TITLE>My first HTML document</TITLE>
   </HEAD>
   <BODY>
    


<?php


include("Mensaje.php"); 
$Mensa = new Mensaje("1","2","3","4");
 $obj_empresa_ser = urlencode(serialize($Mensa));
?>
<form name="QForm" action="OfertaDesplegada.php" method="post">
<input type="hidden" name="obj_empresa" value="<?php $obj_empresa_ser?>" ></input>
 </form> 
 


   </BODY>
</HTML>

