<?php	
$elegido=$_POST["elegido"];
 
include("../config/conexion.php");

$options="
  <option value=''  select>Escoja un distrito</option>
";
  
  $query_s45=pg_query($conexion,"select distinct d.iddistrito,d.nombre from distrito as d,iglesia as i where  i.iddistrito=d.iddistrito and i.zona='$elegido'");
		
			
								
								while($fila=pg_fetch_array($query_s45)){
						
					$options=$options." <option value='$fila[0]'>$fila[1]</option>";										
					
					
					
					}
									
								
								
				


echo $options;    

	
?>


