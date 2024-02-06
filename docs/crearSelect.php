<?php	
$elegido=$_POST["elegido"];
 
include("../config/conexion.php");


$options="<option value='' disabled selected>Escoja el cargo administrativo</option>";
$query_rev=pg_query($conexion,"select iddistrito from distrito");               
$medida=pg_num_rows($query_rev);
if ($elegido=="obrero"||$elegido=="local") {
	$options=$options."<option value='3'>Ninguno</option>";
}else{
	if ($elegido=="general") {
		



				$query_s=pg_query($conexion,"select idcargo,nombre from cargo where  nivel!=1 and nivel!=0 and nivel!=3 and idcargo!=9 and idcargo!=13 and idcargo!=17 and idcargo!=6 and idcargo!=5 and idcargo!=3 and idcargo!=7 and idcargo!=8");
		
			
								
								while($fila=pg_fetch_array($query_s)){
						                            $query_s85=pg_query($conexion,"select idcargo from cargo_pastor where idcargo='$fila[0]'");
								                    if (pg_num_rows($query_s85)==0) {
								                    	$options=$options."<option value='$fila[0]'>$fila[1]</option>";       
								                    }										
					
					
					
					}
					$query_s=pg_query($conexion,"select idcargo,nombre from cargo where nivel!=1 and nivel!=0 and nivel!=3 and (idcargo=9 or idcargo=13 or idcargo=17 or idcargo=3)");
		
			
								
								while($fila=pg_fetch_array($query_s)){
						                          
								                  $options=$options." <option value='$fila[0]'>$fila[1]</option>";       
								                    										
					
					
					
					}
		
	}else{
		if ($elegido=="ordenacion") {
			$noceMirar="select idcargo,nombre from cargo where idcargo=5 or idcargo=6";
			     $query_s=pg_query($conexion,"select idcargo,nombre from cargo where  nivel!=1 and nivel!=0 and nivel!=3 and idcargo!=9 and idcargo!=13 and idcargo!=17 and idcargo!=6 and idcargo!=5 and idcargo!=3 and idcargo!=10 and idcargo!=11 and idcargo!=12 and idcargo!=14 and idcargo!=15 and idcargo!=16");
		
			
								
								while($fila5=pg_fetch_array($query_s)){
									$options=$options." <option value='$fila5[0]'>$fila5[1]</option>";  
								}
			     
                  $query_s=pg_query($conexion,$noceMirar);
								while($fila2=pg_fetch_array($query_s)){
									  if ($fila2[0]==6) {
									    	$query_s85=pg_query($conexion,"select idcargo from cargo_pastor where idcargo='$fila2[0]'");
								                    if (pg_num_rows($query_s85)<3) {
								                    	$options=$options." <option value='$fila2[0]'>$fila2[1]</option>";       
								                    } 
									    }else{
									    	$query_s85=pg_query($conexion,"select idcargo,nombre from cargo_pastor where idcargo='$fila2[0]'");
								                    if (pg_num_rows($query_s85)<$medida) {
								                    	$options=$options." <option value='$fila2[0]'>$fila2[1]</option>";       
								                    } 
									    }
					                }
		}
	}
}
               
 							
							
				
				
				




echo $options;    

	
?>


