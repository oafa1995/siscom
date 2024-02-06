<?php session_start();
$iddatos=$_SESSION["nivelUsuario"];
$idpastorx=$_SESSION["idUsuario"];
 if($_SESSION['autenticado']!="yeah" || $iddatos!=4){
header("Location: ../index.php");
	exit();
	}
include("../config/conexion.php");



?>
<!DOCTYPE html>
<html>
<head>
    <title>Asignar Iglesia a Pastor</title>
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
	
	
	<style>

 input{
        width: 350px;
    }
</style>
	
	<script language="javascript">
////////////////////script para llamar php que valida fecha de nacimiento del tutor


$(document).ready(function(){
   $("#iglesia").change(function () {
           $("#iglesia").each(function () {
            elegido=$(this).val();
            $.post("datosIglesia.php", { elegido: elegido }, function(data){
            $("#direccion").append(data);
            });            
        });
   })
});
</script>


<script language="javascript">
////////////////////script para llamar php que valida fecha de nacimiento del tutor


$(document).ready(function(){
   $("#iglesia").change(function () {
           $("#iglesia").each(function () {
            elegido=$(this).val();
            $.post("datosIglesia2.php", { elegido: elegido }, function(data){
            $("#zona").append(data);
            });            
        });
   })
});
</script>


<script language="javascript">
////////////////////script para llamar php que valida fecha de nacimiento del tutor


$(document).ready(function(){
   $("#iglesia").change(function () {
           $("#iglesia").each(function () {
            elegido=$(this).val();
            $.post("datosIglesia3.php", { elegido: elegido }, function(data){
            $("#distrito").append(data);
            });            
        });
   })
});
</script>



<script language="javascript">
////////////////////script para llamar php que valida fecha de nacimiento del tutor


$(document).ready(function(){
   $("#iglesia").change(function () {
           $("#iglesia").each(function () {
            elegido=$(this).val();
            $.post("datosIglesia4.php", { elegido: elegido }, function(data){
            $("#departamento").append(data);
            });            
        });
   })
});
</script>
	
	<script language="javascript">
////////////////////script para llamar php que valida fecha de nacimiento del tutor


$(document).ready(function(){
   $("#iglesia").change(function () {
           $("#iglesia").each(function () {
            elegido=$(this).val();
            $.post("datosIglesia5.php", { elegido: elegido }, function(data){
            $("#municipio").append(data);
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
  if (document.getElementById('iglesia').value=="") {
      alertaError();
  }else{
    document.getElementById('bandera').value="edit";
    document.frmsis.submit();
  }
 	
 }


	function alertaError(){
	alertify.error("<h1>Error</h1>"+"<p>No ha seleccionada una iglesia</p>"+"<img src='../img/error.png'>").dismissOthers();


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
	
	function r() { location.href="asignarBajaDsitrito.php"} 

	
	function alertaExito(){
	alertify.success("<h1>Exito</h1>"+"<p>Iglesia Asignada Exitosamente</p>"+"<img src='../img/bien.png'>").set({transition:'flipx'});
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
<script>
$(document).ready(function (e) {
  $('#myModal').on('show.bs.modal', function(e) {    
     var id = $(e.relatedTarget).data().id;
     var id2 = $(e.relatedTarget).data().name;
      $(e.currentTarget).find('#lista').val(id);
      $(e.currentTarget).find('#nomb').val(id2);
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
                    <h4><span class="all-tittles">Asignar Iglesia al Pastor</span></h4>
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
		<td>Apellido</td>
		<td>Edad</td>
        
        <td>DUI</td>
        <td>Cargo</td>
        <td>Tel&eacute;fono</td>
        
        <td>Correo</td>
        <td>Fecha de ingreso</td>
        
        <td>&nbsp;</td>
        
      </tr>
    </thead>
<tbody>
	
    <?php $conect=pg_query($conexion,"select distinct p.idpastor,p.nombre,p.apellido,p.fechanacimiento,p.estadocivil,p.dui,p.duiesposa,p.telefono,p.direccion,p.correo,p.fechain from pastor as p,cargo as c,cargo_pastor as cp,iglesia as i where  c.nivel!=0  and cp.idpastor=p.idpastor and c.idcargo=cp.idcargo "); 
                      while ($vector=pg_fetch_array($conect)) { 
                      	$vector[3] = strtotime($vector[3]);
                        $edad = date('Y', $vector[3]);
                         if (($mes = (date('m') - date('m', $vector[3]))) < 0) {
                          $edad++;
                         } elseif ($mes == 0 && date('d') - date('d', $vector[3]) < 0) {
                          $edad++;
                         }
                          $fechaaa=date('Y') - $edad;
                           $conect6=pg_query($conexion,"select idpastor from iglesia where idpastor=$vector[0]"); 
                     


                          if (pg_num_rows($conect6)==0) {
                          	# code...
                          
                      	?>
                      	<tr>
                            <td align="left"><font size="1" ></font><?php echo $vector[1]; ?></td>
							<td align="left"><font size="1" ></font><?php echo $vector[2]; ?></td>
							<td align="left"><font size="2" ></font><?php echo $fechaaa; ?></td>
                            
                            <td align="left"><font size="2" ></font><?php echo $vector[5]; ?></td>



                       <?php $conect3=pg_query($conexion,"select c.nombre from cargo as c,cargo_pastor as cp where c.idcargo=cp.idcargo and cp.idpastor=$vector[0]"); 
                       if (pg_num_rows($conect3)>1) {
                       	
                       

                                             
                       ?>
                             
                            <td align="left"><font size="4" ></font>
                              <select id="cargo" name="cargo" class="form-control input-md" > 
                                <?php while ($vector3=pg_fetch_array($conect3)) {  ?>
                                <option value="" ><?php echo $vector3[0]; ?></option>}
                              <?php } ?>

                              </select></td>
                            
                            
                            <?php 

                        


                        } else{
                        	 while ($vector3=pg_fetch_array($conect3)) { 
                        	             echo "<td align='left'><font size='4' ></font>".$vector3[0]."</td>";
                           }
                        }

                        ?>








                            <td align="left"><font size="2" ></font><?php echo $vector[7]; ?></td>
                            
                            <td align="left"><font size="4" ></font><?php echo $vector[9];?></td>
                            <td align="left"><font size="4" ></font><?php echo dameFecha($vector[10]); ?></td>

                             <?php $conect2=pg_query($conexion,"select nombre from iglesia where idpastor=$vector[0]"); 
                                             while ($vector2=pg_fetch_array($conect2)) { 

                       ?>

                            
                            
                            
                            <?php } 

                            if (pg_num_rows($conect2)) {
                            	
                            }else{
                            	



                            	echo "<td align='left'><font size='4' ></font><button type='button' id='cancelar' name='cancelar' class='btn btn-success' data-name='".$vector[1]." ".$vector[2]."' data-id='".$vector[0]."' data-toggle='modal' data-target='#myModal'>Agregar Igles&iacute;a</button></td>";
                            	
                            }

                            ?>


                              


                            </tr>
                           
                              <?php 
                              }      
                                 }         ?>  
  </tbody>

  </table>

  </div>

 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Asignar Iglesia al pastor: <input type="text" readonly="readonly" style="border: none; width: 400px"  name="nomb" id="nomb"/> </h4>
                </div>

                <div class="modal-body">

                    <input type="hidden" name="lista" id="lista"/>

                </div>
                 
                <div class="form-group">
  <label class="col-md-4 control-label" for="nombresv">Igles&iacute;a</label>  
  <div class="col-md-6">
  <select id="iglesia" name="iglesia" class="form-control input-md" >
  <option value="" disabled selected>Escoja la igles&iacute;a</option>

  <?php
                
				$query_s=pg_query($conexion,"select idiglesia,nombre from iglesia where idpastor is null and zona=(select zona from iglesia where idpastor='$idpastorx')");
		
			
								
								while($fila=pg_fetch_array($query_s)){
						
					echo " <option value='$fila[0]'>$fila[1]</option>";										
					
					
					
					}
									
								
								
				
				
				?>
	
  
</select>





</div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="nombresv">Zona</label>  
  <div class="col-md-6">
 <select id="zona" name="zona" class="form-control input-md" >

	
  
</select>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="nombresv">Distrito</label>  
  <div class="col-md-6">
 <select id="distrito" name="distrito" class="form-control input-md" >

	
  
</select>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="nombresv">Departamento</label>  
  <div class="col-md-6">
 <select id="departamento" name="departamento" class="form-control input-md" >

	
  
</select>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="nombresv">Municipio</label>  
  <div class="col-md-6">
 <select id="municipio" name="municipio" class="form-control input-md" >

	
  
</select>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="nombresv">Direccion</label>  
  <div class="col-md-6">
 <select id="direccion" name="direccion" class="form-control input-md" >

	
  
</select>
</div>
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
$iglesia=$_REQUEST["iglesia"];

if($bandera=="edit"){
pg_query("BEGIN");	
	
     $result=pg_query($conexion,"UPDATE iglesia SET  idpastor=$lista WHERE idiglesia='$iglesia'" );
    
        
	
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
		  
      //    echo "<script language='javascript'>";
         
       //     echo "r();";       
     //   echo "</script>";
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

 
