<?php session_start();
$iddatos=$_SESSION["nivelUsuario"];
 if($_SESSION['autenticado']!="yeah" || $iddatos!=5  ){
header("Location: ../index.php");
	exit();
	}


include("../config/conexion.php");
$iddatos2=$_REQUEST["idiglesia"];
$iddatos3=$_REQUEST["idmiembro"];

$iddatos2=base64_decode($iddatos2);
$iddatos3=base64_decode($iddatos3);

$query_s=pg_query($conexion,"select nombre,zona,iddistrito,departamento,municipio from iglesia where idiglesia='$iddatos2' ");
	while($fila=pg_fetch_array($query_s)){
		$rnombre=$fila[0];
        $rzona=$fila[1];
  $rdistrito=$fila[2];	
$rdepartamento=$fila[3];
$rmunicipio=$fila[4];  
		}

		
	$query_s=pg_query($conexion,"select nombre,apellido,fechanacimiento,sexo,estadocivil,profeuofi,telefono,dui from miembro where idmiembro='$iddatos3' ");
	while($fila=pg_fetch_array($query_s)){
		$rnombrem=$fila[0];
        $rapellidom=$fila[1];
		$rfecha=$fila[2];
		$rsexo=$fila[3];
		$restadoc=$fila[4];
		$rprofesion=$fila[5];
		$rtelefono=$fila[6];
		$rdui=$fila[7];
		}	
		
function obtener_edad($fecha_nac){
$fecha_nac = strtotime($fecha_nac);
$edad = date('Y', $fecha_nac);
 if (($mes = (date('m') - date('m', $fecha_nac))) < 0) {
  $edad++;
 } elseif ($mes == 0 && date('d') - date('d', $fecha_nac) < 0) {
  $edad++;
 }
return date('Y') - $edad;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Modificar Miembro</title>
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
	location.href="buscarMiembroPreZona.php"
} 
	
	
		 function alertaErrorRepetido(){
  alertify.error("<h1>Error</h1>"+"<p>DUI repetido</p>"+"<img src='../img/error.png'>").dismissOthers();


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
	
	 <script type="text/javascript">
function boton(e) {
 tecla = (document.all) ? e.keyCode : e.which;
  if (tecla==13) verificar();
}

</script>


	<script type="text/javascript">

	 var edadprobando = '<?php echo obtener_edad($rfecha);?>';

	
	$(document).ready(function() {
       
	   if(parseInt(edadprobando)<18){
		    $("#dui").hide();

      $("#label").hide();
	   }
	
	// alert(""+edadprobando);
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

		 $("#sexo").on('change', function () {
         $("#sexo").each(function () {
             elegido=$(this).val();
			 fecha=$("#fecha").val();
			 estadoc=$("#estadoc").val();
			 
                  $.post("verSociedad2.php", { elegido: elegido,fecha:fecha,estadoc:estadoc }, function(data){
          
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

		 $("#estadoc").on('change', function () {
         $("#estadoc").each(function () {
             elegido=$(this).val();
			  fecha=$("#fecha").val();
			 sexo=$("#sexo").val();
			 
			 alert(""+fecha);
			 alert(""+sexo);
			 alert(""+elegido);
			 
			 
                  $.post("verSociedad3.php", { elegido: elegido,fecha:fecha,sexo:sexo }, function(data22){
          
		  $("#sociedad").html(data22);
	      //$("#sociedad").html(data);
	 
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

		 $("#fecha").on('change', function () {
         $("#fecha").each(function () {
             elegido=$(this).val();
			 
			
			 
			 
                  $.post("edadMiembroE.php", { elegido: elegido}, function(data22){
          
		  $("#estadoc").html(data22);
	      //$("#sociedad").html(data);
	 
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

	
</script>
	
	<script>
	
	function verificar(){
		
		if(document.getElementById("nombre").value==""){
			alertaErrorNombre();
		}else{
			if(document.getElementById("apellido").value==""){
				alertaErrorApellido();	
			}else{
				if(document.getElementById("fecha").value==""){
				alertaErrorFecha();
				}else{
					if(document.getElementById("edad").value==""){						
						alertaErrorEdad();
					}else{
						
						if(parseInt(document.getElementById("edad").value)>=18 && document.getElementById("dui").value==""){
							
						//	if(document.getElementById("dui").value==""){
					//			alertaErrorDui();
					//		}
						alertaErrorDui();
 						
/*fin de if para edad*/ }else{
							
							if(document.getElementById("sexo").value==""){
								alertaErrorSexo();
							}else{
								if(document.getElementById("estadoc").value==""){
									alertaErrorCivil();
								}else{
									
					if(document.getElementById("sociedad").value==""){
						alertaErrorSociedad();
					}else{
						
			if(document.getElementById("profesion").value==""){
				alertaErrorProfesion();
			}else{
							if(document.getElementById("telefono").value==""){
							alertaErrorTelefono();
							}else{
								
			document.getElementById('bandera').value="add";
			document.frmsis.submit();	
							}
				
			}

					}

								}
								
							}
							
						}
						
					}
					
				}
			}
			
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
                    <h4><span class="all-tittles">Modificar miembro para la iglesia: <?php echo $rnombre; ?></span></h4>
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
  <label class="col-md-4 control-label" for="nombre">Nombres del Miembro</label>  
  <div class="col-md-5">
  
   <input type="text" name="nombre" id="nombre" class="form-control" autocomplete= "off" value="<?php echo $rnombrem; ?>" placeholder="Nombres..." required>
    
  </div>
</div>
    
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Apellidos del Miembro</label>  
  <div class="col-md-5">
  
   <input type="text" name="apellido" id="apellido" class="form-control" autocomplete= "off" value="<?php echo $rapellidom; ?>" placeholder="Apellidos..." required>
    
  </div>
</div>	
	
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Fecha de nacimiento</label>  
  <div class="col-md-2">
  
   <input type="date" name="fecha" id="fecha" class="form-control" value="<?php echo $rfecha; ?>" autocomplete= "off">
    
  </div>
</div>	
	

	
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Edad</label>  
  <div class="col-md-2">
  
   <select  name="edad" id="edad" class="form-control" autocomplete= "off" placeholder="edad..." required readonly="readonly">
  <option value="<?php echo obtener_edad($rfecha); ?>" disabled selected><?php echo obtener_edad($rfecha); ?></option>

	
	</select>
  </div>
</div>		
	
<div class="form-group" >

    <label class="col-md-4 control-label" for="nombre" id="label">DUI</label>  
  <div class="col-md-2">
   <input type="text" name="dui" id="dui" class="form-control" value="<?php echo $rdui; ?>" autocomplete= "off">
    
  </div>
</div>		
	
	<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Sexo</label>  
  <div class="col-md-2">
  
  <select name="sexo" id="sexo" class="form-control">

 <?php
	if($rsexo=='Masculino'){
		echo"<option selected value='Masculino'>Masculino</option>";
		echo"<option value='Femenino'>Femenino</option>";
	}else{ 
		echo"<option value='Masculino'>Masculino</option>";
		echo"<option selected value='Femenino'>Femenino</option>";
	
	}
  ?>
  
  </select>
    
  </div>
</div>		
	
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Estado Civil</label>  
  <div class="col-md-2">
  
   <select type="text" name="estadoc" id="estadoc" class="form-control" autocomplete= "off"  required>
    
 <?php
	if(obtener_edad($rfecha)>=18 && $restadoc="Soltero"){
		echo"<option selected value='Soltero'>Soltero</option>";
		echo"<option value='Casado'>Casado</option>";
	}else{ 
	
		if(obtener_edad($rfecha)<18){
		echo"<option selected value='Soltero'>Masculino</option>";
		}else{
			
			if(obtener_edad($rfecha)>=18 && $restadoc="Casado"){
				echo"<option selected value='Casado'>Casado</option>";
		echo"<option value='Soltero'>Soltero</option>";
				
			}
			
		}
	
	
	}
  ?>

  
  </select>
	
  </div>
</div>	
	
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Sociedad</label>  
  <div class="col-md-3">
  
   <select name="sociedad" id="sociedad" class="form-control" autocomplete= "off" required>
    
		<?php if(obtener_edad($rfecha)>=9 && obtener_edad($rfecha<30) && $restadoc=="Soltero") { ?>
						
								<option selected value="Sociedad de Jovenes">Sociedad de Jovenes</option>


						<?php }else{ ?>
						
			<?php //if((obtener_edad($vector[4])>=18 && $vector[7]=="Casado" && $vector[3]=="Masculino")) { 
			if(obtener_edad($rfecha)>=18 && $restadoc=="Casado" && $rsexo=="Masculino"){
			?>

		
			<option selected value="Sociedad de Señores">Sociedad de Señores</option>

						
						
						
							<?php }else{ ?>
						
							<?php //if((obtener_edad($vector[4])>=18 && $vector[7]=="Casado" && $vector[3]=="Femenino")){ 
							if(obtener_edad($rfecha)>=18 && $restadoc=="Casado" && $rsexo=="Femenino"){
							?>
								
			<option selected value="Sociedad de Señoras">Sociedad de Señoras</option>

						
							<?php }else{ ?>
							
					<?php //if((obtener_edad($vector[4])>=30 && $vector[7]=="Soltero" && $vector[3]=="Masculino")){ 
					if(obtener_edad($rfecha)>=30 && $restadoc=="Soltero" && $rsexo=="Masculino"){
					?>
									
			<option selected value="Sociedad de Señores">Sociedad de Señores</option>
									
						<?php }else{?>
					
					<?php if((obtener_edad($vector[4])>=30 && $vector[7]=="Soltero" && $vector[3]=="Femenino")){ ?>
	
									<td align="left"><font size="3" ></font>sociedad de señoras</td>	

						<?php }?>
						
						<?php } //cuarto else?>
						<?php } //tercer else?>
						<?php } //segundo else?>
						<?php }//primer else ?>
						
  
  </select>
	
  </div>
</div>	
	
	

<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Profesion/Oficio</label>  
  <div class="col-md-5">
  
   <input type="text"  value="<?php echo $rprofesion; ?>" name="profesion" id="profesion" class="form-control" autocomplete= "off" placeholder="Profesion/Oficio..." required>
    
  </div>
</div>	
	
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Telefono</label>  
  <div class="col-md-2">
  
   <input type="text" value="<?php echo $rtelefono; ?>" name="telefono" id="telefono" class="form-control" autocomplete="off" placeholder="telefono..." required>
    
  </div>
</div>		
	
	






		
	
	<div class="form-group">
  <label class="col-md-4 control-label" for="enviar"></label>
  <div class="col-md-4">
    <button type="button" id="enviar" name="enviar" class="btn btn-success" onClick="verificar()">Guardar</button>
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
$nombre=$_REQUEST["nombre"];
$nombre=ucwords($nombre);
$apellido=$_REQUEST["apellido"];
$apellido=ucwords($apellido);
$fechanac=$_REQUEST["fecha"];
$sexo=$_REQUEST["sexo"];
$estadoc=$_REQUEST["estadoc"];
$profesion=$_REQUEST["profesion"];
$telefono=$_REQUEST["telefono"];



$dui=$_REQUEST["dui"];
$duiaux=$dui;

$estado=1;
	
	
	
	if($bandera=="add"){
pg_query("BEGIN");	
	
	$nombre=pg_escape_literal($nombre);
 $apellido=pg_escape_literal($apellido);
 $fechanac=pg_escape_literal($fechanac);
 $sexo=pg_escape_literal($sexo);
 $estadoc=pg_escape_literal($estadoc);
 $profesion=pg_escape_literal($profesion);
 $telefono=pg_escape_literal($telefono);	
 $dui=pg_escape_literal($dui);
	
	
	
	$query_s2=pg_query($conexion,"select * from miembro where dui={$dui} and idmiembro!='$iddatos3' ");
	$rows = pg_num_rows($query_s2);
	

	
		if($rows==0){
			
	
		if($duiaux!=""){
	//$result=pg_query($conexion,"insert into miembro(nombre,apellido,fechanacimiento,estadocivil,sexo,dui,profeuofi,telefono,estado) values({$nombre},{$apellido},{$fechanac},{$estadoc},{$sexo},{$dui},{$profesion},{$telefono},'$estado' ) returning idmiembro" );///usando el returning para devolver el id de la trasaccion arreglando el problema cuando no hay campos que distingan los datos
$result=pg_query($conexion,"update miembro set nombre={$nombre},apellido={$apellido},fechanacimiento={$fechanac},estadocivil={$estadoc},sexo={$sexo},dui={$dui},profeuofi={$profesion},telefono={$telefono},estado='$estado' ");	
			}else{
  //  $result=pg_query($conexion,"insert into miembro(nombre,apellido,fechanacimiento,estadocivil,sexo,profeuofi,telefono,estado) values({$nombre},{$apellido},{$fechanac},{$estadoc},{$sexo},{$profesion},{$telefono},'$estado' ) returning idmiembro" );
	$result=pg_query($conexion,"update miembro set nombre={$nombre},apellido={$apellido},fechanacimiento={$fechanac},estadocivil={$estadoc},sexo={$sexo},profeuofi={$profesion},telefono={$telefono},estado='$estado' ");	

			}
	
//$result=pg_query($conexion,"update tutor set nombrestutor=trim('$nombre'),apellidostutor=trim('$apellido'),
//			fechanactutor=('$fecha'),sexotutor=trim('$sexo'),telefono=('$telefono'),direccion=trim('$direccion'),
//			correo=trim('$correo') where idtutor='$baccion'");
			
	
	
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

	
		}else{
			
			
			echo "<script language='javascript'>";
					echo "alertaErrorRepetido();";
//	echo "setTimeout ('r()', 1500);";
	echo "</script>";
			
			
		}
	
	
	}

	
	
	
	}
?>

 
