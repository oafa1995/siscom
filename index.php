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
function verificar(){
	if(document.getElementById('usuariox').value=="" || document.getElementById('clavex').value==""){
		alertaError();
			
		}else{
			document.getElementById('bandera').value="add";
					
					document.frmsis.submit();
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
       <h4 class="text-center all-tittles" style="margin-bottom: 30px;">inicio de sesión</h4>
  <form role="form" action="" method="post" id="frmsis" name="frmsis">
		 <input type="hidden" name="bandera" id="bandera"/>
<input type="hidden" name="baccion" id="baccion"/>
            <div class="group-material-login">
              <input type="text" class="material-login-control" name="usuariox" id="usuariox" required="" maxlength="70" autocomplete="off" onkeypress="boton(event)">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; Usuario</label>
            </div><br>
            <div class="group-material-login">
              <input type="password" class="material-login-control" name="clavex" id="clavex" required="" maxlength="70" autocomplete="off" onkeypress="boton(event)">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-lock"></i> &nbsp; Contrase&ntilde;a</label>
			  		Mostrar contrase&ntilde;a:	<input type="checkbox" id="show" onchange="document.getElementById('clavex').type = this.checked ? 'text' : 'password'"/>

            </div>
            
			
			 <button type="button" class="btn btn-lg btn-primary btn-block" onClick="verificar()">Entrar</button>
			 <br>
			             <a class="btn-login" href="recuperarClave.php" type="button">Olvido su contraseña? &nbsp; <i class="zmdi zmdi-arrow-right"></i></a>

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

if(isset($_REQUEST["bandera"])){
    $bandera=$_REQUEST["bandera"];
	$usuariox=$_REQUEST["usuariox"];

    $usuariox=base64_encode($usuariox);
		
	
	$clavex=$_REQUEST["clavex"];
    $clavex=base64_encode($clavex);
		

		
		
		
	
	
	include("config/conexion.php");
	
	if($bandera=="add"){
	pg_query("BEGIN");
	
	

	
	$usuariox=pg_escape_literal($usuariox);////para evitar inyecciones
	$clavex=pg_escape_literal($clavex);/// para evitar inyecciones
	
	 $query_s2= pg_query($conexion,"select * from pastor as p,cargo as c,cargo_pastor as cp where p.usuario={$usuariox} and p.clave={$clavex} and p.idpastor=cp.idpastor and c.nivel=0 and cp.idcargo=c.idcargo");
	
	$rows = pg_num_rows($query_s2);
	


	
	if($rows==0){
	
	 	  $query_s= pg_query($conexion,"select * from pastor where usuario={$usuariox} and clave={$clavex} ");
	  
	 
	 	
		  
		 
	  while($fila= pg_fetch_array($query_s)){
		  $_SESSION["idUsuario"]=$fila[0];
		  $_SESSION["nombresP"]=$fila[1];
		  $_SESSION["apellidosP"]=$fila[2];
		  
		  $_SESSION["usuarioP"]=$fila[12];
		
	 	  //$query_s22= pg_query($conexion,"select nivel,nombre from cargo where idpastor='$fila[0]' ");

		  // $query_s22= pg_query($conexion,"SELECT nivel,nombre FROM cargo as c,cargo_pastor as cp,pastor as p WHERE nivel = (SELECT max(nivel) FROM cargo where cp.idcargo=c.idcargo and cp.idpastor='$fila[0]' ); ");
		  
		//  $query_s22=pg_query($conexion,"SELECT c.nivel,c.nombre FROM cargo as c WHERE nivel = (SELECT max(nivel) FROM cargo as c2,cargo_pastor as cp where cp.idpastor='fila[0]')");
		  
	//	    $query_s22=pg_query($conexion,"SELECT c.nivel,c.nombre FROM cargo as c WHERE nivel = (SELECT max(nivel) FROM cargo as c2,cargo_pastor as cp where cp.idpastor='$fila[0]' and c2.idcargo=cp.idcargo)"); 
		
$query_s22=pg_query($conexion,"SELECT c.nivel,c.nombre FROM cargo as c,cargo_pastor as cpp WHERE nivel = (SELECT max(nivel) FROM cargo as c2,cargo_pastor as cp where cp.idpastor='$fila[0]' and c2.idcargo=cp.idcargo) and cpp.idpastor='$fila[0]' and c.idcargo=cpp.idcargo");		
		  //consulta para obtener el mayor cargo que tenga el usuario
		  
		  $rows2 = pg_num_rows($query_s22);
		  
		    while($fila2= pg_fetch_array($query_s22)){
				$_SESSION["nivelUsuario"]=$fila2[0];
				
							
				$_SESSION["cargo"]=$fila2[1];
			
			
			
			
			}
		  
//		$_SESSION["nivelUsuario"]=$fila[10];
		  
		
		  
		  $_SESSION["autenticado"]="yeah";
		  echo "<script language='javascript'>";
		  echo "location.href='docs/index.php';";
		  echo "</script>"; 
	    
		  
		  		  
		  }
	  
echo "<script language='javascript'>";
		echo "alertaErrorLogin();";
		echo "</script>";
		
		
	}else{
		
		echo "<script language='javascript'>";
		echo "alertaErrorLogin2();";
		echo "</script>";
		
	}
	
	}
}
?>



