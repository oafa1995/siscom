<?php session_start();
$iddatos=$_SESSION["nivelUsuario"];
 if($_SESSION['autenticado']!="yeah" || $iddatos!=1){
header("Location: ../index.php");
	exit();
	}
include("../config/conexion.php");



?>
<!DOCTYPE html>
<html>
<head>
    <title>Administrar Cargos</title>
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
	
	<script language="javascript">
////////////////////script para llamar php que valida fecha de nacimiento del tutor


$(document).ready(function(){
   $("#iglesia").change(function () {
           $("#iglesia").each(function () {
            elegido=$(this).val();
            $.post("datosIglesia.php", { elegido: elegido }, function(data){
            $("#mostrar").append(data);
            });            
        });
   })
});
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

 function mandar(){
 	if (document.getElementById('cargo').value=="") {
      alertaError();
  }else{

    document.getElementById('bandera').value="edit";
    document.frmsis.submit();
  }
 }

 function mandamos(){
     
  if (document.getElementById('cargar').value!="") {
  alertify.confirm("<center>ATENCI&Oacute;N!</center>", "<center><img src='../img/warning.png' width='230' height='230'></center>"+"<center><h1>Desea quitar cargo al pastor?</h1></center>  <h2 style='font-style:italic';>  </h2>", 
    
    
    
    function(){ alertify.success('Ok') 

                
                        document.getElementById('bandera').value="quitar";
                        document.frmsis.submit();
                 
        
}
                , function(){ alertify.error('ha cancelado dar de baja').dismissOthers()}).set('labels', {ok:'si', cancel:'no'}).set({transition:'zoom'});; 
}else{
  alertaError();
}
    
 }


	function alertaError(){
	alertify.error("<h1>Error</h1>"+"<p>No selecciono un cargo</p>"+"<img src='../img/error.png'>").dismissOthers();


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
	
	function r() { location.href="asignarEsposa.php"} 

	
	function alertaExito(){
	alertify.success("<h1>Exito</h1>"+"<p>Datos ingresados correctamente</p>"+"<img src='../img/bien.png'>").set({transition:'flipx'});
	}	
	
	function alertaErrorRegistro(){
	alertify.error("<h1>Error</h1>"+"<p>No se pudo registrar</p>"+"<img src='../img/error.png'>").set({transition:'flipx'});
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
<script>
$(document).ready(function (e) {
  $('#myModal').on('show.bs.modal', function(e) { 
     var id = $(e.relatedTarget).data().id;

            $.post("cargos2.php", { elegido: id }, function(data){
            $("#aquiCarga").append(data);
            });  
      var id2 = $(e.relatedTarget).data().name;
      $(e.currentTarget).find('#lista').val(id);
      $(e.currentTarget).find('#nomb').val(id2);
     
  });

  $("#myModal").on('hidden.bs.modal', function () {
            $("#muestralo").remove();
    });

});
</script>

<script>
$(document).ready(function (e) {
  $('#myModal2').on('show.bs.modal', function(e) { 
     var id = $(e.relatedTarget).data().id;

            $.post("cargosQ2.php", { elegido: id }, function(data){
            $("#aquiCarga2").append(data);
            });  
      var id2 = $(e.relatedTarget).data().name;
      
      $(e.currentTarget).find('#nombe').val(id2);
      $(e.currentTarget).find('#listar').val(id);
  });
  $("#myModal2").on('hidden.bs.modal', function () {
            $("#muestralo").remove();
    });
});
</script>
	
	
	 <style>

 input{
        width: 350px;
    }
</style>
	
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
                    <h4><span class="all-tittles">Administrar Cargos</span></h4>
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



<br>


 <div class="container-fluid"  style="margin: 50px 0;" >
 
<table id="grid" class="display table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
      
        <td>Nombre</td>
        <td>Fecha nacimiento</td>
        <td>Edad</td>
        <td>Dui</td>
        <td>Cargo</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        
      </tr>
    </thead>
<tbody>
	
    <?php $conect=pg_query($conexion,"select distinct p.idpastor,p.nombreesposa,p.duiesposa,p.fechanacimientoes from pastor as p,cargo as c,cargo_pastor as cp,iglesia as i where c.nivel!=0 and cp.idpastor=p.idpastor and c.idcargo=cp.idcargo and (p.nombreesposa!='' or p.nombreesposa!=null)"); 
                      while ($vector=pg_fetch_array($conect)) { 
                      	$fec = strtotime($vector[3]);
                        $edad = date('Y', $fec);
                         if (($mes = (date('m') - date('m', $fec))) < 0) {
                          $edad++;
                         } elseif ($mes == 0 && date('d') - date('d', $fec) < 0) {
                          $edad++;
                         }
                          $fechaaa=date('Y') - $edad;
                           
                     


                          
                          	# code...
                          
                      	?>
                      	<tr>
                            <td align="left"><font size="1" ></font><?php echo $vector[1]; ?></td>
							              <td align="left"><font size="1" ></font><?php echo $vector[3]; ?></td>
							              <td align="left"><font size="2" ></font><?php echo $fechaaa;?></td>
                            
                            <td align="left"><font size="2" ></font><?php echo $vector[2]; ?></td>
                              

                       <?php $conect3=pg_query($conexion,"select c.nombre_cargo from cargo_senora as c,detalle_senora as cp where c.idcargo_senora=cp.idcargo_senora and cp.idpastor=$vector[0]"); 
                       if (pg_num_rows($conect3)==null) {
                          echo "<td align='left'><font size='4' ></font>NINGUNO</td>";
                       }else{
                        while ($vector3=pg_fetch_array($conect3)) { 
                                       echo "<td align='left'><font size='4' ></font>".$vector3[0]."</td>";
                           }
                       }
                        	
                        

                        ?>




                            	<td align='left'><font size='4' ></font><button type='button' id='cancelar' name='cancelar' class='btn btn-success' data-controls-modal='your_div_id' data-backdrop='static' data-keyboard='false' data-name="<?php echo $vector[1]; ?>" data-id="<?php echo $vector[0]; ?>" data-toggle='modal' data-target='#myModal'>Agregar Cargo</button></td>
                            	
                            


                              <td align='left'><font size='4' ></font><button type='button' id='cancelar' name='cancelar' class='btn btn-warning' data-controls-modal="your_div_id" data-backdrop="static" data-keyboard="false" data-name="<?php echo $vector[1]; ?>" data-id="<?php echo $vector[0]; ?>" data-toggle='modal' data-target='#myModal2'>Quitar Cargo</button></td>


                            </tr>
                           
                              <?php 
                                  
                                 }         ?>  
                       
  </tbody>

  </table>

  </div>

 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Asigne Cargo a &nbsp; <input type="text" readonly="readonly" style="border: none; width: 400px"  name="nomb" id="nomb"/></h4>
                </div>

                <div class="modal-body">

                    <input type="hidden" name="lista" id="lista"/>

                </div>
                 
                <div id="aquiCarga" class="form-group">
  
</div>
<br>
<br>
<div id="mostrar" class="container-fluid">
	
</div>

                     


                <div class="modal-footer">
                    <button type="button" onClick="mandar()" class="btn btn-primary">guardar</button>
                </div>

            </div><!-- modal content -->
        </div><!-- modal dialog -->
    </div><!-- modal fade -->
<!-- Cierra Modal -->


 <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Quitar Cargo a &nbsp; <input type="text" readonly="readonly" style="border: none; width: 400px"  name="nombe" id="nombe"/></h4>
                </div>

                <div class="modal-body">

                    <input type="hidden" name="listar" id="listar"/>

                </div>
                 
                <div id="aquiCarga2" class="form-group">
  
</div>
<br>
<br>
<div id="mostrar" class="container-fluid">
  
</div>

                     


                <div class="modal-footer">
                    <button type="button" onClick="mandamos()" class="btn btn-primary">Quitar</button>
                </div>

            </div><!-- modal content -->
        </div><!-- modal dialog -->
    </div><!-- modal fade -->
<!-- Cierra Modal -->

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


$lista=$_REQUEST["lista"];
$cargo=$_REQUEST["cargo"];

if($bandera=="edit"){
pg_query("BEGIN");	

	   
     $result=pg_query($conexion,"INSERT INTO detalle_senora(idcargo_senora, idpastor) VALUES ('$cargo','$lista')" );
  
        
	
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

if($bandera=="quitar"){
  $lista=$_REQUEST["listar"];
  $cargo=$_REQUEST["cargar"];
  
pg_query("BEGIN");  
  
     $result=pg_query($conexion,"DELETE FROM cargo_pastor WHERE idcargo='$cargo' and idpastor='$lista'" );
      $query_s=pg_query($conexion,"select idcargo from cargo_pastor where idpastor='$lista'");
        if (pg_num_rows($query_s)==0) {
          $result=pg_query($conexion,"INSERT INTO cargo_pastor(idcargo, idpastor) VALUES (3,'$lista')" );
        }
  
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

 <?php 
function dameFecha($fecha){
	list($year,$mon,$day)=explode('-',$fecha);
	return date('d-m-Y',mktime(0,0,0,$mon,$day,$year));
	
	}

?>

 
