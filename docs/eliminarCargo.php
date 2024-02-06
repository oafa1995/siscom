<?php session_start();
$iddatos=$_SESSION["nivelUsuario"];
 if($_SESSION['autenticado']!="yeah" || $iddatos!=1  ){
header("Location: ../index.php");
	exit();
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
	location.href="eliminarCargo.php"
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
  function alertaError2(){
  alertify.error("<h1>Error</h1>"+"<p>Ese cargo ya existe </p>"+"<img src='../img/error.png'>").dismissOthers();


  }
	
		function verificar(){
			
	if(document.getElementById('nombre').value=="" 
	
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
  <label class="col-md-4 control-label" for="responsable">Cargo</label>  
  <div class="col-md-4">
  <select id="nombre" name="nombre" class="form-control input-md" autocomplete="off" required>
    
	
	 <option value="" disabled selected>Escoja el cargo...</option>
	 
	 <?php
                include("../config/conexion.php");
				$query_s=pg_query($conexion,"select idcargo,nombre from cargo where cargo_adicional=2 order by nombre");
		
			
								
								while($fila=pg_fetch_array($query_s)){
			
				
					$rows=pg_num_rows($query_s2);
                    if($rows<1){
					echo " <option value='$fila[0]'>$fila[1] </option>";										
					}
					
					
					}
									
								
								
				
				
				?>
	
	
	</select>
	
	
	
  </div>
</div>


<!-- Text input-->





 
  
    
 






<!-- Button -->
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="enviar"></label>
  <div class="col-md-4">
    <button type="button" id="enviar" name="enviar" class="btn btn-success" onClick="verificar()">Quitar</button>
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



if($bandera=="add"){
pg_query("BEGIN");	

	
$nombre=pg_escape_literal($nombre); 



$result=pg_query($conexion,"DELETE FROM cargo WHERE idcargo={$nombre} " );
  
if(!$result){
        pg_query("rollback");
        echo "<script language='javascript'>";
        echo "alertaErrorRegistro();";
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

 
