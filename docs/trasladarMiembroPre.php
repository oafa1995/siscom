<?php session_start();
$iddatos=$_SESSION["nivelUsuario"];
 if($_SESSION['autenticado']!="yeah" || $iddatos!=1  ){
header("Location: ../index.php");
	exit();
	}


include("../config/conexion.php");
$idpastor=$_SESSION["idUsuario"];
$idmiembrox=base64_decode($_REQUEST['idmiembro']);
$idiglesiax=$_REQUEST['idiglesia'];
//$iddatos2=base64_decode($iddatos2);

$query_s=pg_query($conexion,"select nombre,zona,iddistrito,departamento,municipio,idiglesia from iglesia where idpastor='$idpastor' ");
	while($fila=pg_fetch_array($query_s)){
		$rnombre=$fila[0];
        $rzona=$fila[1];
  $rdistrito=$fila[2];	
$rdepartamento=$fila[3];
$rmunicipio=$fila[4];
$idiglesia=$fila[5];  
		}
$query_s33=pg_query($conexion,"select nombre,apellido,fechanacimiento,estadocivil,telefono from miembro where idmiembro='$idmiembrox' ");
	while($fila=pg_fetch_array($query_s33)){
		$rnombrex=$fila[0];
        $rapellidoX=$fila[1];
  $rfechax=$fila[2];	
$restadox=$fila[3];
$rtelefonox=$fila[4];

		}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Crear Miembro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../img/tittle.ico"  >
    <script src="../js/sweet-alert.min.js"></script>
	    <script src="../js/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/sweet-alert.css">
    <link rel="stylesheet" href="../css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="../js/modernizr.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../js/main.js"></script>
		<script src="../js/jquery.maskedinput.js"></script>
    	<script src="../js/jquery.numeric.js"></script>
	
	<!-- include alertify.css -->
<link rel="stylesheet" href="../alertas/build/css/alertify.css">

<!-- include boostrap theme  -->
<link rel="stylesheet" href="../alertas/build/css/themes/bootstrap.css">

<!-- include alertify script -->
<script src="../alertas/build/alertify.js"></script>

<script type="text/javascript">
//override defaults
alertify.defaults.transition = "slide";
alertify.defaults.theme.ok = "btn btn-primary";
alertify.defaults.theme.cancel = "btn btn-danger";
alertify.defaults.theme.input = "form-control";
</script>
	
	
	
	
	<script type="text/javascript" class="init"> 
	
	//var bandera=0;
	
	function Salir(){
	
			
alertify.confirm("<center>ATENCI&Oacute;N!</center>", "<center><img src='../img/warning.png' width='250' height='250'></center>"+"<center><h1>Desea cerrar la sesión?</h1></center>", function(){ alertify.success('Ok') 

document.location.href="../config/fin.php";
}
                , function(){ alertify.error('No ha cerrado la sesión').dismissOthers()}).set('labels', {ok:'si', cancel:'no'}).set({transition:'zoom'});; 
		
		
		}
	
	
	
function alertaExito(){
	alertify.success("<h1>Exito</h1>"+"<p>Datos ingresados correctamente</p>"+"<img src='../img/bien.png'>").set({transition:'flipx'});
	}	
	
	function r() {
	location.href="buscarMiembroT.php"
} 
	
	
		 function alertaErrorRepetido(){
  alertify.error("<h1>Error</h1>"+"<p>DUI repetido</p>"+"<img src='../img/error.png'>").dismissOthers();


  }
   function alertaError(){
  alertify.error("<h1>Error</h1>"+"<p>No escogio Iglesia</p>"+"<img src='../img/error.png'>").dismissOthers();


  }
  	 function alertaErrorRegistro(){
  alertify.error("<h1>Error</h1>"+"<pNo se puede registrar al miembro</p>"+"<img src='../img/error.png'>").dismissOthers();


  }
	
	 function alertaErrorNombre(){
  alertify.error("<h1>Error</h1>"+"<p>Campo de nombres vacio</p>"+"<img src='../img/error.png'>").dismissOthers();


  }
	
		 function alertaErrorApellido(){
  alertify.error("<h1>Error</h1>"+"<p>Campo de apellidos vacio</p>"+"<img src='../img/error.png'>").dismissOthers();


  }
  
  		 function alertaErrorFecha(){
  alertify.error("<h1>Error</h1>"+"<p>Campo de Fecha de nacimiento vacio</p>"+"<img src='../img/error.png'>").dismissOthers();


  }
	
		 function alertaErrorEdad(){
  alertify.error("<h1>Error</h1>"+"<p>Edad no valida</p>"+"<img src='../img/error.png'>").dismissOthers();


  }
	
	 function alertaErrorDui(){
  alertify.error("<h1>Error</h1>"+"<p>Campo de DUI vacio</p>"+"<img src='../img/error.png'>").dismissOthers();


  }
  
   function alertaErrorSexo(){
  alertify.error("<h1>Error</h1>"+"<p>Campo de sexo vacio</p>"+"<img src='../img/error.png'>").dismissOthers();


  }
  
   function alertaErrorCivil(){
  alertify.error("<h1>Error</h1>"+"<p>Campo de estado civil vacio</p>"+"<img src='../img/error.png'>").dismissOthers();


  }
  
    function alertaErrorSociedad(){
  alertify.error("<h1>Error</h1>"+"<p>Campo de sociedad vacio</p>"+"<img src='../img/error.png'>").dismissOthers();


  }
  
    function alertaErrorProfesion(){
  alertify.error("<h1>Error</h1>"+"<p>Campo de profesion/oficio vacio</p>"+"<img src='../img/error.png'>").dismissOthers();


  }
  
   function alertaErrorTelefono(){
  alertify.error("<h1>Error</h1>"+"<p>Campo de telefono vacio</p>"+"<img src='../img/error.png'>").dismissOthers();


  }
  
	</script>
	
	
	<script>
	
function ayuda(){
	  $(document).ready(function () {
	$("#ayuda").modal();
	  });
}
	
	</script>
	
	

</script>


	<script type="text/javascript">

	$(document).ready(function() {
       
		    $("#dui").hide();

      $("#label").hide();
});		
</script>
	
	
	<script type="text/javascript">
//////////////para validar edad normal
	$(document).ready(function() {
       
		

		 $("#fecha").on('change', function () {
         $("#fecha").each(function () {
             elegido=$(this).val();
                  $.post("edadMiembro.php", { elegido: elegido }, function(data){
          
		  $("#edad").html(data);

		
//     $("#dui").hide();
//	     $("#label").hide();


if(parseInt(document.getElementById("edad").value)>=18){
	
	$("#dui").show();
$("#label").show();
//bandera=1;
}else{
	     $("#dui").hide();
     $("#label").hide();
	document.getElementById("dui").value="";
}

		

  });
		
        });
   });
	
    
});		
</script>
	
	
	
	<script type="text/javascript">

	
	
	
	$(document).ready(function() {
       
		
/////// si primero escoge la fecha para determinar la sociedad

		 $("#fecha").on('change', function () {
         $("#fecha").each(function () {
             elegido=$(this).val();
			 sexo=$("#sexo").val();
			 estadoc=$("#estadoc").val();
			 
                  $.post("verSociedad1.php", { elegido: elegido,sexo:sexo,estadoc:estadoc }, function(data){
          
		  $("#sociedad").html(data);

		
//     $("#dui").hide();
//	     $("#label").hide();

/*
if(parseInt(document.getElementById("edad").value)>=18){
	
	$("#dui").show();
$("#label").show();
}else{
	     $("#dui").hide();
     $("#label").hide();
	
}
*/
		

  });
		
        });
   });
	
    
});	

	$(document).ready(function() {
       
		
/////// si primero escoge el sexo para determinar la sociedad

		 $("#distritoN").on('change', function () {
         $("#distritoN").each(function () {
             elegido=$(this).val();
			 
			 
                  $.post("mirarIgle.php", { elegido: elegido }, function(data){
          
		  $("#iglesia").html(data);

  });
		
        });
   });
	
    
});	

	$(document).ready(function() {
       
		
/////// si primero escoge el sexo para determinar la sociedad

		 $("#iglesia").on('change', function () {
         $("#iglesia").each(function () {
             elegido=$(this).val();
			 
			 
                  $.post("obtener.php", { elegido: elegido }, function(data22){
            $("#mover").remove();
		  $("#mostramos").append(data22);
	  
		

  });
		
        });
   });
	
    
});	

	$(document).ready(function() {
       
		
/////// si primero escoge el sexo para determinar la sociedad

		 $("#xona").on('change', function () {
         $("#xona").each(function () {
             elegido=$(this).val();
			 
			
			 
			 
                  $.post("mirarZona.php", { elegido: elegido}, function(data22){
          
		  $("#distritoN").html(data22);

		

  });
		
        });
   });
	
    
});	

	
</script>
	
	<script>
	
	function verificar(){
		 if (document.getElementById('iglesia').value!="") {
  alertify.confirm("<center>ATENCI&Oacute;N!</center>", "<center><img src='../img/warning.png' width='230' height='230'></center>"+"<center><h1>Desea trasladar al mimbro?</h1></center>  <h2 style='font-style:italic';>  </h2>", 
    
    
    
    function(){ alertify.success('Ok') 

                
                        document.getElementById('bandera').value="add";
                        document.frmsis.submit();
                 
        
}
                , function(){ alertify.error('ha cancelado dar de baja').dismissOthers()}).set('labels', {ok:'si', cancel:'no'}).set({transition:'zoom'});; 
}else{
  alertaError();
}
		}
	
	
	</script>
	
	
	 <script>
   $(document).ready(function () {
	   
	   
 
 
 
 

 
 	   
	   
/////////////////////////////////////////validacion nombre 
 $("#nombre").keypress(function (key) {
            window.console.log(key.charCode)
            if ((key.charCode < 97 || key.charCode > 122)//letras mayusculas
                && (key.charCode < 65 || key.charCode > 90) //letras minusculas
                && (key.charCode != 8) //retroceso
                && (key.charCode != 241) //ñ
                 && (key.charCode != 209) //Ñ
                 && (key.charCode != 32) //espacio
                 && (key.charCode != 225) //á
                 && (key.charCode != 233) //é
                 && (key.charCode != 237) //í
                 && (key.charCode != 243) //ó
                 && (key.charCode != 250) //ú
                 && (key.charCode != 193) //Á
                 && (key.charCode != 201) //É
                 && (key.charCode != 205) //Í
                 && (key.charCode != 211) //Ó
                 && (key.charCode != 218) //Ú
 
                )
                return false;
        });
		
		
		/////////////////////////////////////////validacion nombre 
 $("#profesion").keypress(function (key) {
            window.console.log(key.charCode)
            if ((key.charCode < 97 || key.charCode > 122)//letras mayusculas
                && (key.charCode < 65 || key.charCode > 90) //letras minusculas
                && (key.charCode != 8) //retroceso
                && (key.charCode != 241) //ñ
                 && (key.charCode != 209) //Ñ
                 && (key.charCode != 32) //espacio
                 && (key.charCode != 225) //á
                 && (key.charCode != 233) //é
                 && (key.charCode != 237) //í
                 && (key.charCode != 243) //ó
                 && (key.charCode != 250) //ú
                 && (key.charCode != 193) //Á
                 && (key.charCode != 201) //É
                 && (key.charCode != 205) //Í
                 && (key.charCode != 211) //Ó
                 && (key.charCode != 218) //Ú
 
                )
                return false;
        });
		
		
		///////////////////////////validacion apellido


 $("#apellido").keypress(function (key) {
            window.console.log(key.charCode)
            if ((key.charCode < 97 || key.charCode > 122)//letras mayusculas
                && (key.charCode < 65 || key.charCode > 90) //letras minusculas
                && (key.charCode != 8) //retroceso
                && (key.charCode != 241) //ñ
                 && (key.charCode != 209) //Ñ
                 && (key.charCode != 32) //espacio
                 && (key.charCode != 225) //á
                 && (key.charCode != 233) //é
                 && (key.charCode != 237) //í
                 && (key.charCode != 243) //ó
                 && (key.charCode != 250) //ú
                 && (key.charCode != 193) //Á
                 && (key.charCode != 201) //É
                 && (key.charCode != 205) //Í
                 && (key.charCode != 211) //Ó
                 && (key.charCode != 218) //Ú
 
                )
                return false;
        });
		
		
		
		

		
	});
  </script>
	
	
	
	
	<style>
 
#nombre {text-transform:capitalize;}    
#apellido {text-transform:capitalize;}
 
 </style>
	
	
	
	<script>
    
 jQuery(function($){
  
   $("#telefono").mask("9999-9999");////////////mascara de entrada para telefono
     $("#dui").mask("99999999-9");////////////mascara de entrada para dui
});


</script>
 
</head>
<body>



    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile custom-scroll-containers">
            <div class="logo full-reset all-tittles" style="background-color:#0095FF;" >
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style=" line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                sistema ipnj
            </div>
           
		    <div class="full-reset" style="background-color:#105391; padding: 10px 0; color:#fff;">
                <figure>
                    <img src="../img/sin.png" alt="CDI" class="img-responsive center-box" style="width:55%;">
                </figure>
       
            </div>
		   
            <div class="full-reset nav-lateral-list-menu"> <?php include("menu.php"); ?> </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers" >
	
	  
	
	
        <nav class="navbar-user-top full-reset" >
		
	 
		
		
            <ul class="list-unstyled full-reset" >
                
              
            
				 <li   onClick="Salir()" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                </li>
				
				  
				
				<figure>
				
				
                 <img src="../assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box"> 
			<!--aqui va la foto del usuario -->
                
				
				
				
				             
				
				
				
				</figure>
			
				
                <li style="color:#fff; cursor:default;" title="Datos personales">
				<a href="datosPersonales.php"  style="color:#ffffff;">
                    <span class="all-tittles"><?php  if(isset($_SESSION)){
					
					$usu=$_SESSION["usuarioP"];
					$usu=base64_decode($usu);
					echo $usu;
					
					
					}
					
					
					
					?>
				
					</span>
	</a>               
			   </li>
				
				
				
           <center>
				<br>
				 <li style="color:#fff; cursor:default;">
                    <h4><span class="all-tittles">Crear miembro para la iglesia: <?php echo $rnombre; ?></span></h4>
                </li>
				</center>    
               
			

    <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
			
            </ul>
        </nav>
		
		 
   <br>
	
     <form class="form-horizontal"  action="" method="post" class="form-group-sm" id="frmsis" name="frmsis">

	 <input type="hidden" name="bandera" id="bandera"/>
      



    
	  	
	
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Zona de la iglesia</label>  
  <div class="col-md-2">
  
   <input type="text" name="zona" id="zona" class="form-control" autocomplete= "off" value="<?php echo $rzona; ?>" readonly="readonly">
    
  </div>
</div>	

	<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Distrito de la iglesia</label>  
  <div class="col-md-2">
  
   <input type="text" name="zona" id="zona" class="form-control" autocomplete= "off" value="<?php //echo $rdistrito; 
   
   $query_s222=pg_query($conexion,"select nombre from distrito where iddistrito='$rdistrito' ");
	while($fila22=pg_fetch_array($query_s222)){
		$rnombred=$fila22[0];
		
		}
		
		echo $rnombred;
   ?>" readonly="readonly">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Departamento</label>  
  <div class="col-md-2">
  
   <input type="text" name="departamento" id="departamento" class="form-control" autocomplete= "off" value="<?php echo $rdepartamento; ?>" readonly="readonly">
    
  </div>
</div>	

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Municipio</label>  
  <div class="col-md-3">
  
   <input type="text" name="municipio" id="municipio" class="form-control" autocomplete= "off" value="<?php echo $rmunicipio; ?>" readonly="readonly">
    
  </div>
</div>	
	

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Nombres del Miembro</label>  
  <div class="col-md-5">
  
   <input type="text" name="nombre" readonly="readonly" id="nombre" value="<?php echo $rnombrex; ?>" class="form-control" autocomplete= "off" placeholder="Nombres..." required>
    
  </div>
</div>
    
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Apellidos del Miembro</label>  
  <div class="col-md-5">
  
   <input type="text" name="apellido" readonly="readonly" id="apellido"value="<?php echo $rapellidoX; ?>" class="form-control" autocomplete= "off" placeholder="Apellidos..." required>
    
  </div>
</div>	
	
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Fecha de nacimiento</label>  
  <div class="col-md-2">
  
   <input type="date" name="fecha" id="fecha" readonly="readonly" value="<?php echo $rfechax; ?>" class="form-control" autocomplete= "off">
    
  </div>
</div>	
	
	
	
	
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Estado Civil</label>  
  <div class="col-md-2">
  
   <select type="text" disabled name="estadoc" id="estadoc" class="form-control" autocomplete= "off"  required>
    <?php if ($restadox=="Soltero") {
  
     ?>
	<option value="" selected disabled>Escoja el estado civil</option>
	<option value="Soltero" selected >Soltero/a</option>
    <?php }else{ ?>
    	<option value="" selected disabled>Escoja el estado civil</option>
	<option value="Casado" selected >Casado/a</option>
    <?php } ?>
  </select>
	
  </div>
</div>	

		
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Telefono</label>  
  <div class="col-md-2">
  
   <input type="text" name="telefono" readonly="readonly" id="telefono" value="<?php echo $rtelefonox; ?>" class="form-control" autocomplete="off" placeholder="telefono..." required>
    
  </div>
</div>
<div class="form-group">
<label class="col-md-6 control-label" for="nombresv"><h4>Igles&iacute;a a transferir</h4></label>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="nombresv">Zona</label>  
  <div class="col-md-6">
  <select id="xona" name="xona" class="form-control input-md" >
  <option value="" disabled selected>Escoja una zona</option>
  <option value="Central" >Central</option>
  <option value="Oriental" >Oriental</option>
  <option value="Occidental" >Occidental</option>

</select>
</div>
</div>	
 

 <div class="form-group">
  <label class="col-md-4 control-label" for="nombresv">Distrito</label>  
  <div class="col-md-6">
  <select id="distritoN" name="distritoN" class="form-control input-md" >
  <option value="" disabled selected>Escoja un distrito</option>

</select>





</div>
</div>






           
                <div class="form-group">
  <label class="col-md-4 control-label" for="nombresv">Igles&iacute;a</label>  
  <div class="col-md-6">
  <select id="iglesia" name="iglesia" class="form-control input-md" >
  <option value="" disabled selected>Escoja la igles&iacute;a</option>

 	
  
</select>





</div>
</div>

<div id="mostramos" id="mostramos">
	
</div>


	<div class="form-group">
  <label class="col-md-4 control-label" for="enviar"></label>
  <div class="col-md-4">
    <button type="button" id="enviar" name="enviar" class="btn btn-success" onClick="verificar()">Trasladar</button>
	<button type="reset" id="cancelar" name="cancelar" class="btn btn-danger">Cancelar</button>
  </div>
</div>


	
	
	
</form>


	   
	   
	   
	  
	   
	   
	   
	   
        <footer class="footer full-reset">
           <div class="footer-copyright full-reset all-tittles">Iglesia Pentecostal del Nombre de Jes&uacute;s-2019</div>
		   
        </footer>
    </div>

    
	
</body>
</html>
<?php 

include("../config/conexion.php"); 
if(isset($_REQUEST["bandera"])){
	
$bandera=$_REQUEST["bandera"];
$idiglesia=$_REQUEST["iglesia"];






$estado=1;
	
	
	
	if($bandera=="add"){
pg_query("BEGIN");	
	
	$idiglesia=pg_escape_literal($idiglesia);
 
	
	
	
	$result=pg_query($conexion,"DELETE FROM miembro_iglesia WHERE idmiembro='$idmiembrox'" );
    $result=pg_query($conexion,"INSERT INTO miembro_iglesia(idmiembro, idiglesia) VALUES ('$idmiembrox',{$idiglesia})" );
        
	

	
		
		
	
	//pg_insert_id();
	

	

	
if(!$result){
				pg_query("rollback");
			
				echo "<script language='javascript'>";
					echo "alert('error no se puedo ingresa el miembro');";
//	echo "setTimeout ('r()', 1500);";
	echo "</script>";
				}else{
					pg_query("commit");
					echo "<script language='javascript'>";
					echo "alertaExito();";			
				    echo "</script>";
					echo "<script language='javascript'>";
					echo "setTimeout ( 'r()', 1500);";			
				    echo "</script>";
				}

	
	
	
	}

	
	
	
	}
?>

 
