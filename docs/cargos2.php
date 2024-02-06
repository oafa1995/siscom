<?php	
$elegido=$_POST["elegido"];
 
include("../config/conexion.php");

	$query_s24=pg_query($conexion,"select idpastor from detalle_senora where idpastor='$elegido'");
		
if (pg_num_rows($query_s24)>0) {
	$options="
<div id='muestralo'>
<label class='col-md-4 control-label' for='nombresv'>Ya posee un cargo</label>  
  <div  class='col-md-6'>";
$options=$options."
</div></div>";	
}else{

$options="
<div id='muestralo'>
<label class='col-md-4 control-label' for='nombresv'>Cargo</label>  
  <div  class='col-md-6'>
  <select id='cargo' name='cargo' class='form-control input-md' >
  <option value='' disabled select>Escoja el Cargo</option>
";
  
                
				$query_s2=pg_query($conexion,"select idcargo_senora,nombre_cargo from cargo_senora where idcargo_senora!=4");
		
			
								$cont=0;
								while($fila=pg_fetch_array($query_s2)){
						                  $idc[$cont]=$fila[0];
						                  $nom[$cont]=$fila[1];
						                  $cont++;
					                }

                  

                        for ($i=0; $i < $cont ; $i++) { 
                                   	$query_s=pg_query($conexion,"select idcargo_senora from detalle_senora where idcargo_senora='$idc[$i]'");
								    if (pg_num_rows($query_s)==0) {
								    	$options=$options." <option value='$idc[$i]'>$nom[$i]</option>";     
								    }
                                }           

                      $options=$options." <option value='4'>Vocal de federacion de señoras</option>";     
									
										
								
				
				
				
	
  
$options=$options."</select>
</div></div>";


}












echo $options;    

	
?>


