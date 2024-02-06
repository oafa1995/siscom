<?php session_start();
$iddatos=$_SESSION["nivelUsuario"];
 if($_SESSION['autenticado']!="yeah" || $iddatos!=5){
header("Location: ../index.php");
	exit();
	}
include("../config/conexion.php");
$zonaBusca=$_REQUEST['zona'];


?>
<!DOCTYPE html>
<html>
<head>
    <title>Buscar Igles&iacute;a</title>
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
	
		<script language="javascript">
////////////////////script para llamar php que valida fecha de nacimiento del tutor


$(document).ready(function(){
   $("#fechaN").change(function () {
           $("#fechaN").each(function () {
            elegido=$(this).val();
            $.post("edadPastor.php", { elegido: elegido }, function(data){
            $("#edad").html(data);
            });            
        });
   })
});
</script>
	
	
	<script type="text/javascript" class="init"> 
	function Salir(){
	
			
alertify.confirm("<center>ATENCI&Oacute;N!</center>", "<center><img src='../img/warning.png' width='250' height='250'></center>"+"<center><h1>Desea cerrar la sesión?</h1></center>", function(){ alertify.success('Ok') 

document.location.href="../config/fin.php";
}
                , function(){ alertify.error('No ha cerrado la sesión').dismissOthers()}).set('labels', {ok:'si', cancel:'no'}).set({transition:'zoom'});; 
		
		
		}
	
	
	 function alertaError(){
  alertify.error("<h1>Error</h1>"+"<p>El producto x tiene x unidades </p>"+"<img src='../img/error.png'>").dismissOthers();


  }
	
	</script>
	
	<style>
 
#nombre {text-transform:capitalize;}  
#nombreE {text-transform:capitalize;}  
#apellido {text-transform:capitalize;}
 
 </style>
	
	
	
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
 $("#nombreE").keypress(function (key) {
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
	
	

	
	

	
	
	<script>
    
 jQuery(function($){
  
   $("#telefono").mask("9999-9999");////////////mascara de entrada para telefono
     $("#dui").mask("99999999-9");////////////mascara de entrada para dui
	 $("#duiE").mask("99999999-9");////////////mascara de entrada para dui de la esposa

	 
   $('#salario').on('keypress', function (e) {/////////validacion de numeros con dos decimales
        // Backspace = 8, Enter = 13, ’0′ = 48, ’9′ = 57, ‘.’ = 46
        var field = $(this);
        key = e.keyCode ? e.keyCode : e.which;
 
        if (key == 8) return true;
        if (key > 47 && key < 58) {
          if (field.val() === "") return true;
          var existePto = (/[.]/).test(field.val());
          if (existePto === false){
              regexp = /.[0-9]{10}$/;
          }
          else {
            regexp = /.[0-9]{2}$/;
          }
 
          return !(regexp.test(field.val()));
        }
        if (key == 46) {
          if (field.val() === "") return false;
          regexp = /^[0-9]+$/;
          return regexp.test(field.val());
        }
        return false;
    });
   

   
});




	function alertaError(){
	alertify.error("<h1>Error</h1>"+"<p>Hay campos vacios o la fecha es incorrecta</p>"+"<img src='../img/error.png'>").dismissOthers();


	}
	
		function alertaErrorFechas(){
	alertify.error("<h1>Error</h1>"+"<p>La fecha de ingreso no concuerda con la fecha de nacimiento</p>"+"<img src='../img/error.png'>").dismissOthers();


	}
	
	function alertaErrorC(){
	alertify.error("<h1>Error</h1>"+"<p>Correo Electronico no valido</p>"+"<img src='../img/error.png'>").dismissOthers();


	}
	
	function alertaErrorIngresar(){
	alertify.error("<h1>Error</h1>"+"<p>No se ha podido guardar los datos</p>"+"<img src='../img/error.png'>").dismissOthers();


	}
	
	function r(id) { location.href="hijosPastor.php?idpastor="+id } 

	
	function alertaExito(){
	alertify.success("<h1>Exito</h1>"+"<p>Datos ingresados correctamente</p>"+"<img src='../img/bien.png'>").set({transition:'flipx'});
	}	
	
	function alertaErrorRegistro(){
	alertify.error("<h1>Error</h1>"+"<p>Correo ya vinculado con otro usuario</p>"+"<img src='../img/error.png'>").set({transition:'flipx'});
	}
		
	function alertaError2(){
	alertify.notify("<h1>Aviso</h1>"+"<p>Este campo no es editable, es generado según la fecha de nacimiento</p>"+"<img src='../img/advertencia.png' width='200' height='170'>").dismissOthers();		
}	

  
 function verificar(){
		 var fechaN=document.getElementById('fechaN').value;
		 var fechaNacimiento=new Date(fechaN);
		 fechaNacimiento.setFullYear(fechaNacimiento.getFullYear()+18);
		 //var startf = start.toISOString().slice(0,10).replace(/-/g,"/");
		 
        var fechaIn=document.getElementById('fechaIn').value;
     var fechaIngreso=new Date(fechaIn);
	 

	 
				
	if(document.getElementById('nombre').value=="" || 
	document.getElementById('apellido').value==""  ||
	document.getElementById('fechaN').value==""      ||
	document.getElementById('dui').value=="" ||
	document.getElementById('telefono').value==""       ||
 	//	document.getElementById('salario').value=="" ||
		document.getElementById('edad').value=="" ||
		document.getElementById('fechaIn').value=="" ||
			document.getElementById('direccion').value=="" ||
			document.getElementById('correo').value==""    ||
				//document.getElementById('nombreE').value==""  ||  
				document.getElementById('estadoC').value==""    
				//document.getElementById('fechaE').value==""  ||  
				//document.getElementById('duiE').value==""    
			
	){
		
		alertaError();
 
		


		

}else{
	
	
	$(document).ready(function() {

		
	
    $('#enviar').click(function(){
		
	var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);	
		
        if($("#correo").val().indexOf('@', 0) == -1 || $("#correo").val().indexOf('.', 0) == -1 || caract.test($('#correo').val())==false    ) {
           alertaErrorC();
   
			
        }else{
			
			
			if(fechaIngreso.getTime()<fechaNacimiento.getTime()){									
			
			//alert("fecha de ingreso no concuerda con la fecha de nacimiento");
			alertaErrorFechas();
			
			}else{
			
	
                    document.getElementById('bandera').value="add";
				
			document.frmsis.submit();	
			}					
			
		}

     //   alert('El email introducido es correcto.');
    });
});		
	
		
		
}			
			
				
			
			}
			
			
			
 
 
  </script>






  <script type="text/javascript" class="init">
 $(document).ready(function () {
        $('#grid').DataTable();
    });
</script>	
<script type="text/javascript">
	
	$(document).ready(function() {

		 $("#estadoC").on('change', function () {
        $("#estadoC option:selected").each(function () {
            var elegido=$(this).val();
            
           if (elegido=="soltero") {
                  $("#cambio").css("visibility","hidden");
                  $("#duiers").css("visibility","hidden");
                  $("#fechaers").css("visibility","hidden");

           }else{
                 $("#cambio").css("visibility","visible");
                 $("#duiers").css("visibility","visible");
                 $("#fechaers").css("visibility","visible");

           }        
        });
   });
	
    
});		
</script>
	
	
	
 <style>

 input{
        width: 350px;
    }
</style>


<script type="text/javascript" class="init">
	
	
function mandar(id){
	//alert("sdjsdns"+id);
	window.open("modIglesiaZona.php?idpastor="+id, '_parent');
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
                    <h4><span class="all-tittles">Buscar Igles&iacute;a: Zona <?php echo $zonaBusca; ?></span></h4>
                </li>
				</center>
				
               
               
			

    <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
			
            </ul>
        </nav>
		
		 
       
        
      
			   
	 <form class="form-horizontal" action="" method="post" id="frmsis" name="frmsis">
	   <input type="hidden" name="bandera" id="bandera"/>
<input type="hidden" name="baccion" id="baccion"/>





 <div class="container-fluid"  style="margin: 50px 0;" >
 
<table id="grid" class="display table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
      
        <td>Nombre</td>
		<td>Direccion</td>
		<td>Departamento</td>
        <td>Municipio</td>
        
        <td>Encargado</td>
        <td>Distrito</td>
        <td>&nbsp;</td>
        
      </tr>
    </thead>
<tbody>
	
    <?php $conect=pg_query($conexion,"select distinct i.idiglesia,i.nombre,i.direccion,i.departamento,i.municipio,i.zona,i.idpastor,i.encargadonp,i.iddistrito from iglesia as i,pastor as p where i.zona='$zonaBusca'"); 
                      while ($vector=pg_fetch_array($conect)) { 
                      	
                      	?>
      <tr>
                            <td align="left"><font size="1" ></font><?php echo $vector[1]; ?></td>
							<td align="left"><font size="1" ></font><?php echo $vector[2]; ?></td>						
                            <td align="left"><font size="3" ></font><?php echo $vector[3]; ?></td>
                            <td align="left"><font size="2" ></font><?php echo $vector[4]; ?></td>
                            
                            <?php if ($vector[6]==null||$vector[6]=="") { ?>
                            	<td align="left"><font size="4" ></font><?php echo $vector[7]; ?></td>
                            <?php }else{ ?>


                            <?php  $conect2=pg_query($conexion,"select nombre,apellido from pastor where idpastor='$vector[6]'"); 
                      while ($vector2=pg_fetch_array($conect2)) { ?>
                            <td align="left"><font size="4" ></font><?php echo $vector2[0]." ".$vector2[1]; ?></td>
                        <?php } }?>
       


                            <?php  $conect3=pg_query($conexion,"select nombre from distrito where iddistrito='$vector[8]'"); 
                      while ($vector3=pg_fetch_array($conect3)) { ?>
                            <td align="left"><font size="4" ></font><?php echo $vector3[0]; ?></td>
                        <?php } ?>
                            <td align='left'><font size='4' ></font><button type='button' id='cancelar' name='cancelar' onClick="mandar('<?php echo base64_encode($vector[0]); ?>')" class='btn btn-success'>Editar</button></td>
                         


                              


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
$nombre=$_REQUEST["nombre"];
$nombre=ucwords($nombre);
$apellido=$_REQUEST["apellido"];
$apellido=ucwords($apellido);
$dui=$_REQUEST["dui"];
$fechaN=$_REQUEST["fechaN"];
$telefono=$_REQUEST["telefono"];
$fechaIn=$_REQUEST["fechaIn"];
$direccion=$_REQUEST["direccion"];
$correo=$_REQUEST["correo"];
$correo2=$correo;
$nombreE=$_REQUEST["nombreE"];
$nombreE=ucwords($nombreE);
$duiE=$_REQUEST["duiE"];
$estadoC=$_REQUEST["estadoC"];
$idcargo=$_REQUEST["cargo"];
$fechaE=$_REQUEST["fechaE"];

$estadoC2=$_REQUEST["estadoC"];


if($bandera=="add"){
pg_query("BEGIN");	
	
$nombre=pg_escape_literal($nombre);
 $apellido=pg_escape_literal($apellido);
$correo=pg_escape_literal($correo);

	$dui=pg_escape_literal($dui);
$fechaN=pg_escape_literal($fechaN);
$telefono=pg_escape_literal($telefono);
$fechaIn=pg_escape_literal($fechaIn);
$direccion=pg_escape_literal($direccion);

$nombreE=pg_escape_literal($nombreE);
$duiE=pg_escape_literal($duiE);
$estadoC=pg_escape_literal($estadoC);
$idcargo=pg_escape_literal($idcargo);
$fechaE=pg_escape_literal($fechaE);
	

	
	$query_s2=pg_query($conexion,"select * from pastor where correo={$correo} ");
	$rows = pg_num_rows($query_s2);
	
	if($rows==0){
	
	do{
			$usuariox=generar();
			$query_s=pg_query($conexion, "select * from pastor where usuario=trim('$usuariox') or clave=trim('$usuariox') ");
			$valor=pg_num_rows($query_s);
			}while($valor>0);
		do{
			$clavex=generar();
		$query_s=pg_query($conexion, "select * from pastor where usuario=trim('$clavex') or clave=trim('$clavex') ");
			$valor=pg_num_rows($query_s);
			}while($valor>0);
	
             if ($estadoC2=="soltero") {
             	
             	$result=pg_query($conexion,"insert into pastor(nombre,apellido,fechanacimiento,estadocivil,dui,telefono,direccion,correo,usuario,clave,fechain) values({$nombre},{$apellido},{$fechaN},{$estadoC},{$dui},{$telefono},{$direccion},{$correo},'$usuariox','$clavex',{$fechaIn})" );
             }else{

             	if ($nombreE!=""&&$fechaE!=""&&$duiE!="") {
             		$result=pg_query($conexion,"insert into pastor(nombre,apellido,fechanacimiento,estadocivil,nombreesposa,fechanacimientoes,duiesposa,dui,telefono,direccion,correo,usuario,clave,fechain) values({$nombre},{$apellido},{$fechaN},{$estadoC},{$nombreE},{$fechaE},{$duiE},{$dui},{$telefono},{$direccion},{$correo},'$usuariox','$clavex',{$fechaIn})" );
             	}
             }
	
		
            
	
	if(!$result){
				pg_query("rollback");
			
				echo "<script language='javascript'>";
					echo "alertaErrorIngresar();";
//	echo "setTimeout ('r()', 1500);";
	echo "</script>";
				}else{
					pg_query("commit");
					echo "<script language='javascript'>";
				echo "alertaExito();";			
				echo "</script>";
	

	    $usuariox=base64_decode($usuariox);
    $clavex=base64_decode($clavex);

	
	
	$mail = "usuario: ".$usuariox."\ncontraseña: ".$clavex ;
//Titulo
$titulo = "EL PRESIDENTE A CREADO SU CUENTA, AQUI ESTAN SUS CREDENCIALES";
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: Sistema IPNJ < oafa1995@gmail.com >\r\n";
//Enviamos el mensaje a tu_dirección_email 
				$bool = mail($correo2,$titulo,$mail,$headers);
if($bool){
  //  echo "Mensaje enviado";
	
	
	
	
	
}else{
    echo "Mensaje no enviado";
}
	
$query_s24=pg_query($conexion,"select idpastor from pastor where correo={$correo} ");	
$idpastor=0;
while($fila=pg_fetch_array($query_s24)){
                                            $idpastor=$fila[0];     
                                         }



   $result=pg_query($conexion,"insert into cargo_pastor(idcargo,idpastor) values({$idcargo},$idpastor)" );                                       
	
if(!$result){
				pg_query("rollback");
			
				echo "<script language='javascript'>";
					echo "alertaError2();";
//	echo "setTimeout ('r()', 1500);";
	echo "</script>";
				}else{
					echo "<script language='javascript'>";
	echo "setTimeout ( r(".$idpastor."), 1500);";

	echo "</script>";
	}

					}
	
	
}else{
	
		echo "<script language='javascript'>";
				echo "alertaErrorRegistro();";
				echo "</script>";

	
	
}
	
	
}

}

function generar(){
		$str="ABCDEFGHIJKLMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz23456789";
		$cad="";
		for($i=0; strlen($cad)<10; $i++){
			$cad.=substr($str,rand(0,strlen($str)-1),1);
		}
		return base64_encode($cad);
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
 <?php 
function dameFecha($fecha){
	list($year,$mon,$day)=explode('-',$fecha);
	return date('d-m-Y',mktime(0,0,0,$mon,$day,$year));
	
	}

?>

 
