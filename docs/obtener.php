<?php	
$elegido=$_POST["elegido"];
 
include("../config/conexion.php");

$options="";

  
  		$query_s=pg_query($conexion,"select nombre,zona,iddistrito,departamento,municipio from iglesia where idiglesia='$elegido' ");
	while($fila=pg_fetch_array($query_s)){
		$options=$options."<div id='mover'><!-- Text input-->
<div class='form-group'>
  <label class='col-md-4 control-label' for='nombre'>Zona de la iglesia secundaria</label>  
  <div class='col-md-2'>
  
   <input type='text' name='zona' id='zona' class='form-control' autocomplete= 'off' value='".$fila[1]."' readonly='readonly'>
    
  </div>
</div>	



<!-- Text input-->
<div class='form-group'>
  <label class='col-md-4 control-label' for='nombre'>Departamento</label>  
  <div class='col-md-2'>
  
   <input type='text' name='departamento' id='departamento' class='form-control' autocomplete= 'off' value='".$fila[3]."'  readonly='readonly'>
    
  </div>
</div>	

<!-- Text input-->
<div class='form-group'>
  <label class='col-md-4 control-label' for='nombre'>Municipio</label>  
  <div class='col-md-3'>
  
   <input type='text' name='municipio' id='municipio' class='form-control' autocomplete= 'off' value='".$fila[4]."'  readonly='readonly'>
    
  </div>
</div></div>";	



		  
		}



	


                       
echo $options;    

	
?>


