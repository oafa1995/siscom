<?php session_start();
$t=$_SESSION["nivelUsuario"];
$iddatos=$_SESSION["idUsuario"];
if($_SESSION['autenticado']!="yeah" || $t!=5){
	header("Location: ../index.php");
	exit();
	}

include("../config/conexion.php");
$query_st=pg_query($conexion,"select zona from iglesia where idpastor='$iddatos'");
		
			
								
								while($fila=pg_fetch_array($query_st)){
                                       $zona=$fila[0];
								}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Imprimiendo Igles&iqacute;a por Distrito</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="viewport" content="width=device-width" />
    <link rel="icon" href="../img/tittle.ico"  >
    <script src="../js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="../css/sweet-alert.css">
    <link rel="stylesheet" href="../css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../css/normalize.css">
<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../js/modernizr.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../js/main.js"></script>
	    <script src="../js/jquery.min.js"></script>
		  <script src="../js/jquery.js"></script>
		
	
<!--para tabla-->	
		  <link rel="stylesheet" type="text/css" href="../paginacion/jquery.dataTables.min.css">
	<style type="text/css" class="init"></style>
	
	
	<script type="text/javascript" language="javascript" src="../paginacion/jquery.dataTables.min.js">
	</script>
		  
	

	

<script>
  
    $(document).ready(function () {
        $('#example').DataTable();
    });
  
  </script>

	
		 
<style>

 input{
        width: 350px;
    }
</style>
	
	
<script type="text/javascript" class="init">
function llamarPaginaEditar(id){
	window.open("editarParticipante.php?iddatos="+id, '_parent');
	}

</script>	
	

	
	<!-- -->
	
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





// $(document).ready(function () {
 //       $('#grid').DataTable();
 //   });
</script>	
	


</style>	
	
	<script type="text/javascript" class="init"> 
	function Salir(){
	
			
alertify.confirm("<center>ATENCI&Oacute;N!</center>", "<center><img src='../img/warning.png' width='250' height='250'></center>"+"<center><h1>Desea cerrar la sesion?</h1></center>", function(){ alertify.success('Ok') 

document.location.href="../config/fin.php";
}
                , function(){ alertify.error('No ha cerrado la sesion').dismissOthers()}).set('labels', {ok:'si', cancel:'no'}).set({transition:'zoom'});; 
		
		
		}
	
	</script>
	
	
	
	
</head>
<body>
  
  
	
	<script> print();</script>  
	
	
       
		<br>
		
	

<!-- Form Name -->
<?php  include("../config/conexion.php");

 
 ?>
     

 
                
<center>
<section class="main container">
<div class="container">
<article class="post clearfix"><a href="#" class="thumb pull-left"><img src="../img/sin.png" alt="espere un momento" class="img-responsive" width="100" height="100"></a>

 <h3>Registro Igles&iacute;a por Zona: <?php echo $zona; ?><br>Iglesia Pentecostal del Nombre de Jesus&nbsp;&nbsp;&nbsp;</h3>



</article>
</div>

<?php 

$query_s= pg_query($conexion, "select distinct i.nombre,i.direccion,i.telefono,i.zona,i.departamento,i.municipio,i.idpastor,i.encargadonp from iglesia as i,pastor as p where i.zona='$zona'");

$rows=pg_num_rows($query_s);

echo "total de Igles&iacute;a:"." ".$rows;
 ?>

<br>
</section>
        <table id="grid" class="display table-bordered" cellspacing="0" width="90%">
            <thead>
                <tr>
				
                    <th>Nombre</th>
                    <th>Pastro/Encargado</th>
                    <th>Direccion</th>
                    
                    <th>Zona</th>
                    <th>Departamento</th>
					<th>Municipio</th>
					
					
					
					     
					    
		
                </tr>
            </thead>

       <tbody>
			    <?php
                        include("../config/conexion.php");
						$query_s= pg_query($conexion, "select distinct i.nombre,i.direccion,i.telefono,i.zona,i.departamento,i.municipio,i.idpastor,i.encargadonp from iglesia as i,pastor as p where i.zona='$zona'");
						while($fila=pg_fetch_array($query_s)){
						?>
			   
            <tr>
                <td align="left" style="font-size:15px"><?php echo $fila[0]; ?></td>
                <?php 
				if ($fila[6]==null||$fila[6]=="") {
					?>
                     <td align="left" style="font-size:15px"><?php echo $fila[7]; ?></td>
					<?php
					}else{


				 $query_s45= pg_query($conexion, "select nombre,apellido from pastor where idpastor='$fila[6]'");
						while($fila2=pg_fetch_array($query_s45)){?>
                                <td align="left" style="font-size:15px"><?php echo $fila2[0]." ".$fila2[1]; ?></td>


                <?php } }?>
                <td align="left" style="font-size:15px"><?php echo $fila[1]; ?></td>
                
				<td align="left" style="font-size:15px"><?php echo $fila[3]; ?></td>
		
				<td align="left" style="font-size:15px"><?php echo $fila[4]; ?></td>
				<td align="left" style="font-size:15px"><?php echo $fila[5]; ?></td>

				
                

				 
            </tr>
            
			   
	         <?php
						}
							?>
	   
	   </tbody>
    </table>
	
	

           
      

    </center>
       
    
      

	
</body>
</html>

<?php 
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