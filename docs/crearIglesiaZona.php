<?php session_start();
$iddatos=$_SESSION["nivelUsuario"];
$idpastor=$_SESSION["idUsuario"];
 if($_SESSION['autenticado']!="yeah" || $iddatos!=5  ){
header("Location: ../index.php");
	exit();
	}
 include("../config/conexion.php");
$query_st=pg_query($conexion,"select zona from iglesia where idpastor='$idpastor'");
		
			
								
								while($fila=pg_fetch_array($query_st)){
                                       $validaZona=$fila[0];
								}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Crear Iglesia</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../img/tittle.ico"  >
    <script src="../js/sweet-alert.min.js"></script>
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

function alertaExito(){
	alertify.success("<h1>Exito</h1>"+"<p>Datos ingresados correctamente</p>"+"<img src='../img/bien.png'>").set({transition:'flipx'});
	}	

function r() {
	location.href="crearIglesiaZona.php"
} 


	function Salir(){
	
			
alertify.confirm("<center>ATENCI&Oacute;N!</center>", "<center><img src='../img/warning.png' width='250' height='250'></center>"+"<center><h1>Desea cerrar la sesión?</h1></center>", function(){ alertify.success('Ok') 

document.location.href="../config/fin.php";
}
                , function(){ alertify.error('No ha cerrado la sesión').dismissOthers()}).set('labels', {ok:'si', cancel:'no'}).set({transition:'zoom'});; 
		
		
		}
	
	
	 function alertaError(){
  alertify.error("<h1>Error</h1>"+"<p>Campos Vacios </p>"+"<img src='../img/error.png'>").dismissOthers();


  }
	
		function verificar(){
			
	if(document.getElementById('nombre').value=="" || 
		document.getElementById('direccion').value=="" ||
		document.getElementById('departamento').value==""  ||
 		document.getElementById('zona').value==""         ||
 		document.getElementById('telefono').value==""         ||
			document.getElementById('municipio').value==""         ||
						document.getElementById('fecha').value==""         ||
			document.getElementById('responsable').value=="" || 
			document.getElementById('distrito').value=="" 
	
	){
		
		alertaError();
			
		}else{
			
			document.getElementById('bandera').value="add";
					document.frmsis.submit();
			}
			
			
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
	
	
	<script language="javascript">
////////////////////script para llamar php que valida fecha de nacimiento del tutor


$(document).ready(function(){
   $("#departamento").change(function () {
           $("#departamento").each(function () {
            elegido=$(this).val();
            $.post("municipios.php", { elegido: elegido }, function(data){
            $("#municipio").html(data);
            });            
        });
   })
});
</script>

<script language="javascript">
////////////////////script para llamar php que valida fecha de nacimiento del tutor


$(document).ready(function(){
   $("#departamento").change(function () {
           $("#departamento").each(function () {
            elegido=$(this).val();
            $.post("zonas.php", { elegido: elegido }, function(data){
            $("#zona").html(data);
            });            
        });
   })
});
</script>

<script>
    
 jQuery(function($){
  
   $("#telefono").mask("9999-9999");////////////mascara de entrada para telefono
  });
</script>


<script type="text/javascript">

	$(document).ready(function() {
       
		

		 $("#responsable").on('change', function () {
        $("#responsable option:selected").each(function () {
            var elegido=$(this).val();
            
           if (elegido!=0) {
                  $("#cambio").css("visibility","hidden");
                  

           }else{
                 $("#cambio").css("visibility","visible");
                 

           }        
        });
   });
	
    
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
                    <h4><span class="all-tittles">Crear Iglesia</span></h4>
                </li>
				</center>
               
               
			

    <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
			
            </ul>
        </nav>
		
		 
  
           
        <br>
      <form name="frmsis" id="frmsis" class="form-horizontal" method="post">
<input type="hidden" name="bandera" id="bandera"/>
                <input type="hidden" name="baccion" id="baccion"/>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Nombre de la iglesia</label>  
  <div class="col-md-5">
  <input id="nombre" name="nombre" autocomplete="off" type="text" placeholder="" class="form-control input-md" value="<?= (isset($_POST['nombre']))?$_POST['nombre']:""; ?>" required>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Direccion</label>  
  <div class="col-md-5">
  <input id="direccion" name="direccion" autocomplete="off" type="text" placeholder="" class="form-control input-md" value="<?= (isset($_POST['nombre']))?$_POST['nombre']:""; ?>" required>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Telefono</label>  
  <div class="col-md-5">
  <input id="telefono" name="telefono" autocomplete="off" type="text" placeholder="" class="form-control input-md" value="<?= (isset($_POST['telefono']))?$_POST['telefono']:""; ?>"  required>
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="responsable">Departamento</label>  
  <div class="col-md-4">
  <select id="departamento" name="departamento" class="form-control input-md" autocomplete="off" required>
    
	
	 <option value="" disabled selected>Escoja el departamento...</option>
	 <?php if ($validaZona=="Occidente") {  ?>
       <option value="Santa Ana">Santa Ana</option>
		  <option value="Sonsonate">Sonsonate</option>
		  <option value="Ahuachapan">Ahuachapan</option>
	<?php } ?>
	<?php if ($validaZona=="Oriental") {  ?>
           <option value="La Union">La Union</option>
           <option value="San Miguel">San Miguel</option>
		   <option value="Usulutan">Usulutan</option>
		   <option value="Morazan">Morazan</option>
	<?php } ?>
	  <?php if ($validaZona=="Central") {  ?>
           	   <option value="Cabañas">Cabañas</option>
	           <option value="Chalatenango">Chalatenango</option>
	           <option value="Cuscatlan">Cuscatlan</option>
			   <option value="La Libertad">La Libertad</option>
			  <option value="La Paz">La Paz</option>
		    <option value="San Salvador">San Salvador</option>
		  	  <option value="San Vicente">San Vicente</option>
	<?php } ?>

	    
		 
				
							    
	
	</select>
	
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="responsable">Zona</label>  
  <div class="col-md-4">
  <select id="zona" name="zona" class="form-control input-md" autocomplete="off" required>
    
	
	 <option value="" disabled selected>Escoja departamento para saber la zona...</option>
		
	
	
	</select>
	
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="responsable">Municipio</label>  
  <div class="col-md-4">
  <select id="municipio" name="municipio" class="form-control input-md" autocomplete="off" required>
    
	
	
			 <option value="" disabled selected>Escoja el departamento para escoger municipio...</option>

	
	
	</select>
	
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="responsable">Distrito</label>  
  <div class="col-md-4">
  <select id="distrito" name="distrito" class="form-control input-md" autocomplete="off" required>
    
	
	 <option value="" disabled selected>Escoja el distrito...</option>
	 
	 <?php
               
				$query_s=pg_query($conexion,"select iddistrito,nombre from distrito order by nombre");
		
			
								
								while($fila=pg_fetch_array($query_s)){
			
				
					$rows=pg_num_rows($query_s2);
                    if($rows<1){
					echo " <option value='$fila[0]'>$fila[1] $fila[2]</option>";										
					}
					
					
					}
									
								
								
				
				
				?>
	
	
	</select>
	
	
	
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <?php $fechaactuak=date("Y-m-d"); ?>
  <label class="col-md-4 control-label" for="fecha">Fecha de Creación</label>  
  <div class="col-md-2">
  <input id="fecha" name="fecha" type="date" autocomplete="off" placeholder="" min="2001-01-01" max="$fechaactuak" class="form-control input-md" onkeydown="return false;" value="<?= (isset($_POST['fecha']))?$_POST['fecha']:""; ?>" required>
    
  </div>
</div>


 
  
    
 




<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="responsable">Pastor Responsable</label>  
  <div class="col-md-4">
  <select id="responsable" name="responsable" class="form-control input-md" autocomplete="off" required>
    
	
	 <option value="" disabled selected>Escoja el tutor responsable...</option>
	 <option value="0">ninguno</option>
	 <?php
                include("../config/conexion.php");
				$query_s=pg_query($conexion,"select p.idpastor,p.nombre,p.apellido from pastor as p,cargo as c,cargo_pastor as cp where c.nivel!=0 and cp.idcargo=c.idcargo and cp.idpastor=p.idpastor");
		
			
								
								while($fila=pg_fetch_array($query_s)){
			$query_s2=pg_query($conexion,"select * from iglesia where idpastor=$fila[0]");
				
					$rows=pg_num_rows($query_s2);
                    if($rows<1){
					echo " <option value='$fila[0]'>$fila[1] $fila[2]</option>";										
					}
					
					
					}
									
								
								
				
				
				?>
	
	
	</select>
	
	
	
  </div>
</div>

<div id="cambio" style="visibility: hidden;" class="form-group">
  <label class="col-md-4 control-label" for="telefono">Nombre del responsable que no es pastor</label>  
  <div class="col-md-2">
  <input id="respon" name="respon" type="text" class="form-control input-md" autocomplete="off"  required>
    
  </div>
</div>

<!-- Button -->
<!-- Button -->
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
	
	//$id=12;
$bandera=$_REQUEST["bandera"];
$nombre=$_REQUEST["nombre"];
$nombre=ucwords($nombre);
$direccion=$_REQUEST["direccion"];
$departamento=$_REQUEST["departamento"];

$zona=$_REQUEST["zona"];

$municipio=$_REQUEST["municipio"];
$fecha=$_REQUEST["fecha"];
$responsable=$_REQUEST["responsable"];
$respon=$_REQUEST["respon"];
$responsable2=$_REQUEST["responsable"];
$distrito=$_REQUEST["distrito"];
$telefono=$_REQUEST["telefono"];
$respon2=$_REQUEST["respon"];

if($bandera=="add"){
pg_query("BEGIN");	

	
$nombre=pg_escape_literal($nombre); 
$direccion=pg_escape_literal($direccion);
$departamento=pg_escape_literal($departamento);
$zona=pg_escape_literal($zona);
$municipio=pg_escape_literal($municipio);
$fecha=pg_escape_literal($fecha);
$responsable=pg_escape_literal($responsable);
$respon=pg_escape_literal($respon);
$distrito=pg_escape_literal($distrito);
$telefono=pg_escape_literal($telefono);

	
if ($responsable2==0) {


	if ($respon2!="") {
         
		$result=pg_query($conexion,"insert into iglesia(nombre,direccion,departamento,municipio,telefono,zona,encargadonp,iddistrito) values({$nombre},{$direccion},{$departamento},{$municipio},{$telefono},{$zona},{$respon},{$distrito})" );
		

	}else{
	    echo "<script language='javascript'>";
		echo "alertaError();";
		echo "</script>";
	}
	
}else{
   $result=pg_query($conexion,"insert into iglesia(nombre,direccion,departamento,municipio,telefono,zona,idpastor,iddistrito) values({$nombre},{$direccion},{$departamento},{$municipio},{$telefono},{$zona},{$responsable},{$distrito})" );
   
}

if(!$result){
				pg_query("rollback");
				    echo "<script language='javascript'>";
					echo "alertaErrorIngresar();";
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

 
