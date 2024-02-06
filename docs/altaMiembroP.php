<?php session_start();
$iddatos=$_SESSION["nivelUsuario"];
 if($_SESSION['autenticado']!="yeah" || $iddatos!=1  ){
header("Location: ../index.php");
	exit();
	}


include("../config/conexion.php");
$iddatos2=$_REQUEST["iddatos2"];

$idiglesia=base64_decode($iddatos2);

$query_s=pg_query($conexion,"select nombre from iglesia where idiglesia='$idiglesia' ");
	while($fila=pg_fetch_array($query_s)){
		$rnombre=$fila[0]; 
		}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Dar de baja Miembro</title>
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
	alertify.success("<h1>Exito</h1>"+"<p>Miembro dado de alta exitosamente</p>"+"<img src='../img/bien.png'>").set({transition:'flipx'});
	}	
	
	function r() {
	location.href="buscarMiembrobajapre.php"
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

	$(document).ready(function() {
       
		    $("#dui").hide();

      $("#label").hide();
});		
</script>
	
	 <style>

 input{
        width: 350px;
    }
</style>

	
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
	
	 <script type="text/javascript" class="init">
 $(document).ready(function () {
        $('#grid').DataTable();
    });
</script>	
	
	<script>
    
 jQuery(function($){
  
   $("#telefono").mask("9999-9999");////////////mascara de entrada para telefono
     $("#dui").mask("99999999-9");////////////mascara de entrada para dui
});


</script>
 
 <script type="text/javascript" class="init">
	
	
function mandar(id,nombre,apellido) { 
		alertify.confirm("<center>ATENCI&Oacute;N!</center>", "<center><img src='../img/warning.png' width='230' height='230'></center>"+"<center><h1>Desea dar de Alta al miembro </h1><h2 style='font-style:italic';>"+nombre+" "+apellido+" ?</h2></center>    ", 
		
		
		
		function(){ alertify.success('Ok') 

                document.getElementById('baccion').value=id;
		document.getElementById('bandera').value="add";			
		document.frmsis.submit();	
				
}
                , function(){ alertify.error('ha cancelado dar de Alta').dismissOthers()}).set('labels', {ok:'si', cancel:'no'}).set({transition:'zoom'});; 
		
	} 



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
                    <h4><span class="all-tittles">Dar de Alta miembro para la iglesia: <?php echo $rnombre; ?></span></h4>
                </li>
				</center>    
               
			

    <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
			
            </ul>
        </nav>
		
		 
   <br>
	


 <form class="form-horizontal" action="" method="post" id="frmsis" name="frmsis">
	   <input type="hidden" name="bandera" id="bandera"/>
<input type="hidden" name="baccion" id="baccion"/>





 <div class="container-fluid"  style="margin: 50px 0;" >
 
<table id="grid" class="display table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
      
        <td>Nombres</td>
		<td>Apellidos</td>
		<td>Sexo</td>
        <td>Fecha de Nacimiento</td>
        <td>Edad</td>
		<td>Sociedad</td>
        <td>DUI</td>
        <td>Profesion/Oficio</td>
        <td>Estado Civil</td>    
 <td>&nbsp;</td>
        
      </tr>
    </thead>
<tbody>
	
    <?php $conect=pg_query($conexion,"select m.idmiembro,m.nombre,m.apellido,m.sexo,m.fechanacimiento,m.dui,m.profeuofi,m.estadocivil from miembro as m,miembro_iglesia as mi where m.estado=0 and mi.idiglesia='$idiglesia' and m.idmiembro=mi.idmiembro "); 
                      while ($vector=pg_fetch_array($conect)) { 
                    
                      	?>
      <tr>
                            <td align="left"><font size="1" ></font><?php echo $vector[1] ?></td>
							     <td align="left"><font size="1" ></font><?php echo $vector[2] ?></td>
							<td align="left"><font size="1" ></font><?php echo $vector[3]; ?></td>
							<td align="left"><font size="2" ></font><?php echo dameFecha($vector[4]); ?></td>
                            <td align="left"><font size="3" ></font><?php echo  obtener_edad($vector[4])." "."años";?></td>
															<?php if((obtener_edad($vector[4])>=9 && obtener_edad($vector[4])<30) && $vector[7]=="Soltero") { ?>
						
						<td align="left"><font size="3" ></font>sociedad de jovenes</td>

						<?php }else{ ?>
						
			<?php if((obtener_edad($vector[4])>=18 && $vector[7]=="Casado" && $vector[3]=="Masculino")) { ?>

		<td align="left"><font size="3" ></font>sociedad de señores</td>

						
						
						
							<?php }else{ ?>
						
							<?php if((obtener_edad($vector[4])>=18 && $vector[7]=="Casado" && $vector[3]=="Femenino")){ ?>
								
								<td align="left"><font size="3" ></font>sociedad de señoras</td>

						
							<?php }else{ ?>
							
					<?php if((obtener_edad($vector[4])>=30 && $vector[7]=="Soltero" && $vector[3]=="Masculino")){ ?>
									
								<td align="left"><font size="3" ></font>sociedad de señores</td>	
									
						<?php }else{?>
					
					<?php if((obtener_edad($vector[4])>=30 && $vector[7]=="Soltero" && $vector[3]=="Femenino")){ ?>
	
									<td align="left"><font size="3" ></font>sociedad de señoras</td>	

						<?php }?>
						
						<?php } //cuarto else?>
						<?php } //tercer else?>
						<?php } //segundo else?>
						<?php }//primer else ?>

                            <td align="left"><font size="2" ></font><?php echo $vector[5]; ?></td>
							<td align="left"><font size="2" ></font><?php echo $vector[6]; ?></td>
						    <td align="left"><font size="2" ></font><?php echo $vector[7]; ?></td>


               <td align="left"><font size="4" ></font><button type="button" id="cancelar" name="cancelar" onClick="mandar('<?php echo ($vector[0]); ?>','<?php echo ($vector[1]); ?>','<?php echo ($vector[2]); ?>')" class='btn btn-info'>Dar de Alta</button></td>
  
                            
              

                            </tr>
                              <?php       
                                 }         ?>  
  </tbody>

  </table>

  </div>



</form>

     
       


	   
	   
	   
	   
        <footer class="footer full-reset">
           <div class="footer-copyright full-reset all-tittles">Iglesia Pentecostal del Nombre de Jes&uacute;s-2019</div>
		   
        </footer>
    </div>

    
	
</body>
</html>

<?php

 
if(isset($_REQUEST["bandera"])){
	
	//$id=12;
$bandera=$_REQUEST["bandera"];
$idmiembro=$_REQUEST["baccion"];

$estado=1;


if($bandera=="add"){
pg_query("BEGIN");	
	
            
       $result=pg_query($conexion,"UPDATE miembro SET estado='$estado' WHERE idmiembro=$idmiembro" );
	
if(!$result){
        pg_query("rollback");
        echo "<script language='javascript'>";
        echo "alertaError();";
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


  
function dameFecha($fecha){
	list($year,$mon,$day)=explode('-',$fecha);
	return date('d-m-Y',mktime(0,0,0,$mon,$day,$year));
	
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

