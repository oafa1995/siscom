<?php session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio de sesión</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="img/tittle.ico">
    <script src="js/jquery.min.js"> </script>
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css"/>
  
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
	
	
	 <script language="javascript">
	 
	 
	 function alertaExito(){
	alertify.success("<h1>Exito</h1>"+"<p>Se han enviado sus credenciales con exito a su correo</p>"+"<img src='img/bien.png'>").set({transition:'flipx'});
	}	
	
	
	function alertaErrorCorreo(){
	alertify.error("<h1>Error</h1>"+"<p>Este correo no esta vinculado con ninguna cuenta</p>"+"<img src='img/error.png'>").set({transition:'flipx'});
	}	
	
	function alertaErrorC(){
	alertify.error("<h1>Error</h1>"+"<p>Correo Electronico no valido</p>"+"<img src='img/error.png'>").dismissOthers();


	}
	 
	 
function verificar(){
	
	

				
		
	if(document.getElementById('correoE').value==""){
			
		alertaError();
			
		}else{
			        	
                   $(document).ready(function() {
	
    
		
	var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);	
		
        if($("#correoE").val().indexOf('@', 0) == -1 || $("#correoE").val().indexOf('.', 0) == -1 || caract.test($('#correoE').val())==false    ) {
           alertaErrorC();
   
			
        }else{
	
                    document.getElementById('bandera').value="add";
				
					document.frmsis.submit();			
			
		}

     //   alert('El email introducido es correcto.');
   
});		
			
						
			
}

}

function alertaError(){
	alertify.error("<h1>Error</h1>"+"<p>Campos sin llenar</p>"+"<img src='img/error.png'>").dismissOthers();	
	}
	
	function alertaErrorLogin(){
	alertify.error("<h1>Error</h1>"+"<p>Usuario o contraseña no existen</p>"+"<img src='img/error.png'>").dismissOthers();	
		
	}

	function alertaErrorLogin2(){
	alertify.error("<h1>Error</h1>"+"<p>No tiene permitido el acceso hasta que el admnistrador lo apruebe</p>"+"<img src='img/error.png'>").dismissOthers();	
		
	}
	
	
</script>
	  
	  
	  <script type="text/javascript">
function boton(e) {
 tecla = (document.all) ? e.keyCode : e.which;
  if (tecla==13) verificar();
}

</script>
	
	<!-- Compiled and minified Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- Minified JS library -->
<script src="js/jquery.min.js"></script>
<!-- Compiled and minified Bootstrap JavaScript -->
<script src="js/bootstrap.min.js" ></script>




<!-- include alertify.css -->
<link rel="stylesheet" href="alertas/build/css/alertify.css">

<!-- include boostrap theme  -->
<link rel="stylesheet" href="alertas/build/css/themes/bootstrap.css">

<!-- include alertify script -->
<script src="alertas/build/alertify.js"></script>

<script type="text/javascript">
//override defaults
alertify.defaults.transition = "slide";
alertify.defaults.theme.ok = "btn btn-primary";
alertify.defaults.theme.cancel = "btn btn-danger";
alertify.defaults.theme.input = "form-control";
</script>


	 
	 
	
</head>
<body class="full-cover-background" style="background-image:url(assets/img/p1.png);">


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="col-md-6">

  <div class="form-container">
	<h4 class="text-center all-tittles" style="margin-bottom: 30px;">Sistema de control de membresia IPNJ</h4>
	
        <p class="text-center" style="margin-top: 17px;">
           <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
       </p>
       <h4 class="text-center all-tittles" style="margin-bottom: 30px;">Ingrese su correo electronico para la recuperacion de contraseña</h4>
  <form role="form" action="" method="post" id="frmsis" name="frmsis">
		 <input type="hidden" name="bandera" id="bandera"/>
<input type="hidden" name="baccion" id="baccion"/>
            <div class="group-material-login">
                    <input type="email" name="correoE" id="correoE"  class="material-login-control" onKeypress="if (event.keyCode == 13) event.returnValue = false;" class="form-control" placeholder="Correo Electronico" autocomplete="off" required>
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
             
            </div><br>
           
			
			
			
			 <button type="button" class="btn btn-lg btn-primary btn-block" onClick="verificar()">Recuperar Contraseña</button>
			 <br>

        </form>

 </div> 
 
 
  </div> 

  
  <br>
  <br><br>
  <br><br>
   <br><br>
 <br><br>
 <br><br>
	

  <div class="col-md-6" >
  <h3 style="color:rgba(255,255,255,3.9);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IPNJ-El Salvador 2019</h3>
  </div>
</body>
</html>
<?php
include("config/conexion.php"); 
if(isset($_REQUEST["bandera"])){
	
$bandera=$_REQUEST["bandera"];
$correo=$_REQUEST["correoE"];
$niv=0;

if($bandera=="add"){
pg_query("BEGIN");	
	
	
$query_s2=pg_query($conexion,"select * from pastor where correo='$correo' ");
	$rows = pg_num_rows($query_s2);

	if($rows==0){
	
	
	
	
	echo "<script language='javascript'>";
				echo "alertaErrorCorreo();";
				echo "</script>";
		  		  
		  
		  
	
	
	
		
	}else{
		
			 	  $query_s= pg_query($conexion,"select * from pastor where correo='$correo' ");

		
		 while($fila= pg_fetch_array($query_s)){
			 
			 
			 $nomUsuario=$fila[12];
			 $claveU=$fila[13];
		 }
		
		 $nomUsuario=base64_decode($nomUsuario);
         $claveU=base64_decode($claveU);
	
$mail = "usuario: ".$nomUsuario."\ncontraseña: ".$claveU ;
//Titulo
$titulo = "RECUPERACION DE CLAVE SISTEMA CDI";
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: Sistema CDI < oafa1995@gmail.com >\r\n";
//Enviamos el mensaje a tu_dirección_email 
$bool = mail($correo,$titulo,$mail,$headers);
if($bool){
  //  echo "Mensaje enviado";
	
	
	echo "<script language='javascript'>";
				echo "alertaExito();";
				echo "</script>";
		  		  
	
	
}else{
    echo "Mensaje no enviado";
}
	
	}
	
	
	
	
	
	
	
	
}///////llave que cierra if de bandera add
	
	
}





?>




