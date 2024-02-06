<?php	
$elegido=$_POST["elegido"];
$idiglesiar=$_POST["noigle"]; 
include("../config/conexion.php");

$options="
  <option value=''  select>Escoja una iglesia</option>
";
if ($idiglesiar==null||$idiglesiar=="") {
	$query_s45=pg_query($conexion,"select distinct i.idiglesia,i.nombre from iglesia as i, cargo_pastor as cp where iddistrito='$elegido' and (cp.idpastor=i.idpastor or i.idpastor is null) and cp.idcargo!=1 order by nombre");
}else{
	$query_s45=pg_query($conexion,"select distinct i.idiglesia,i.nombre from iglesia as i, cargo_pastor as cp where i.idiglesia!='$idiglesiar' and iddistrito='$elegido' and (cp.idpastor=i.idpastor or i.idpastor is null) and cp.idcargo!=1 order by nombre");
}
  
  	
		
		
			
								
								while($fila=pg_fetch_array($query_s45)){
						
					$options=$options." <option value='$fila[0]'>$fila[1]</option>";										
					
					
					
					}
									
								
								
				


echo $options;    

	
?>


