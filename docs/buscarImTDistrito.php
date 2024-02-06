<?php session_start();
$iddatos=$_SESSION["nivelUsuario"];
 if($_SESSION['autenticado']!="yeah" || $iddatos!=4){
header("Location: ../index.php");
	exit();
	}

include("../config/conexion.php");

$iddistrito=base64_decode($_REQUEST["zona"]);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Escoja Iglesia</title>
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
	
	
	<script type="text/javascript" class="init">
 $(document).ready(function () {
        $('#grid').DataTable();
    });
</script>
	
	 <script type="text/javascript">
function boton(e) {
 tecla = (document.all) ? e.keyCode : e.which;
  if (tecla==13) verificar();
}

</script>
	
	
	 <style>

 input{
        width: 350px;
    }
</style>
	
	
	<script type="text/javascript" class="init">
	
	var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/++[++^A-Za-z0-9+/=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/\r\n/g,"\n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}

	
function mandar(id){
	window.open("buscarMiembroTPDistrito.php?iddatos2="+Base64.encode(id), '_parent');
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
                    <h4><span class="all-tittles">Escoja iglesia para buscar al miembro</span></h4>
                </li>
				</center>
               
               
			

    <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
			
            </ul>
        </nav>
		
		 
      
	
     
       
<br>

<table id="grid" class="display table" cellspacing="0" width="100%">
    <thead>
      <tr>
      
        <td>Nombre</td>
		<td>Departamento</td>
		<td>Municipio</td>
        <td>Pastor/Encargado</td>
        <td>Direccion</td>		
		<td>Distrito</td>
		
        <td>&nbsp;</td>
        
      </tr>
    </thead>
<tbody>
	
    <?php $conect=pg_query($conexion,"select idiglesia,nombre,departamento,municipio,idpastor,encargadonp,direccion,iddistrito from iglesia where iddistrito='$iddistrito' "); 
                      while ($vector=pg_fetch_array($conect)) { 

					  
					  
					 ?>

                           <tr>      

						   <td align="left"><font size="1" ></font><?php echo $vector[1]; ?></td>
	   <td align="left"><font size="1" ></font><?php echo $vector[2]; ?></td>
<td align="left"><font size="1" ></font><?php echo $vector[3]; ?></td>
						   
						   
						   <?php if($vector[4]=="" && $vector[5]!=""){?>
						   
						   <td align="left"><font size="1" ></font><?php echo $vector[5]; 
						   
   
						   
						   
						   ?></td>
						   
						   
						   
					  <?php }else { ?>
						   
						   
				 <?php if($vector[4]!="" && $vector[5]==""){?>

			<td align="left"><font size="1" ></font><?php //echo $vector[4]; 
			
			
					$con2=pg_query($conexion,"select nombre,apellido from pastor where idpastor='$vector[4]' "); 
			
			while($vector2=pg_fetch_array($con2)){
				
				echo $vector2[0]." ".$vector2[1];
				
			}
			
			?></td>

				 				 <?php if($vector[4]=="" && $vector[5]==""){?>

						  			<td align="left"><font size="1" ></font><?php echo "N/A"; ?></td>

						  
						  <?php } ?>


						  <?php } ?>
						   
						   	  <?php } ?>
							  
					<td align="left"><font size="1" ></font><?php echo $vector[6]; ?></td>
		  
							  					<td align="left"><font size="1" ></font><?php //echo $vector[7]; 
												
											
					$con3=pg_query($conexion,"select nombre from distrito where iddistrito='$vector[7]' "); 
			
			while($vector3=pg_fetch_array($con3)){
				
				echo $vector3[0];
				
			}	
												
												
												?></td>

							  
	<td align="left"><font size="4" ></font><button type="button" id="cancelar" name="cancelar" onClick="mandar('<?php echo $vector[0]; ?>')" class="btn btn-info">buscar miembro</button></td>
					  
							  
						   </tr>
                       
                              <?php       
                                 }         ?>  
  </tbody>

  </table>

 
	   
	   
	   
	  
	   
	   
	   
	   
        <footer class="footer full-reset">
           <div class="footer-copyright full-reset all-tittles">Iglesia Pentecostal del Nombre de Jes&uacute;s-2019</div>
		   
        </footer>
    </div>

    
	
</body>
</html>

 
