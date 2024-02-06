<?php	
$elegido=$_POST["elegido"];
 
include("../config/conexion.php");


    $query_pqre=pg_query($conexion,"select licencia from pastor where idpastor='$elegido'");
       while($fila=pg_fetch_array($query_pqre)){
                             $licen=$fila[0];  
                          }




$options="
<div id='muestralo'>
<label class='col-md-4 control-label' for='nombresv'>Cargo</label>  
  <div  class='col-md-6'>
  <select id='cargo' name='cargo' class='form-control input-md' >
  <option value='' disabled select>Escoja el Cargo</option>
";
   if ($licen!="local"&&$licen!="obrero") {
  
   
  $query_rev=pg_query($conexion,"select iddistrito from distrito");               
$medida=pg_num_rows($query_rev);				
$noce="select idcargo from cargo_pastor where idpastor='".$elegido."'";
                  $query_s=pg_query($conexion,$noce);
								$mirando="where ";
								while($fila=pg_fetch_array($query_s)){
						                 $mirando=$mirando." idcargo!='".$fila[0]."' and ";    
					                }

                         
                         $noceMira="select idcargo,nombre from cargo ".$mirando." nivel!=0 and nivel!=1 and nivel!=3 and idcargo!=3 and idcargo!=5 and idcargo!=6 and idcargo!=9 and idcargo!=13 and idcargo!=17";
                  $query_s=pg_query($conexion,$noceMira);
								while($fila2=pg_fetch_array($query_s)){
									$query_s85=pg_query($conexion,"select idcargo from cargo_pastor where idcargo='$fila2[0]'");
								                    if (pg_num_rows($query_s85)==0) {
								                    	$options=$options." <option value='$fila2[0]'>$fila2[1]</option>";       
								                    }
						                     
					                }




					                $noceMirar="select idcargo,nombre from cargo ".$mirando." (idcargo=9 or idcargo=13 or idcargo=17)";
                  $query_s=pg_query($conexion,$noceMirar);
								while($fila2=pg_fetch_array($query_s)){
						                  $options=$options." <option value='$fila2[0]'>$fila2[1]</option>";     
					                }

                                if ($licen=="ordenacion") {
                                	  $query_revw=pg_query($conexion,"select idiglesia from iglesia where idpastor='$elegido'");  
					       if (pg_num_rows($query_revw)>0) {
					              	     
					                $noceMirar="select idcargo,nombre from cargo ".$mirando." (idcargo=5 or idcargo=6)";
                  $query_s=pg_query($conexion,$noceMirar);
								while($fila2=pg_fetch_array($query_s)){
									  if ($fila2[0]==6) {
									    	$query_s85=pg_query($conexion,"select idcargo from cargo_pastor where idcargo='$fila2[0]'");
								                    if (pg_num_rows($query_s85)<3) {
								                    	$options=$options." <option value='$fila2[0]'>$fila2[1]</option>";       
								                    } 
									    }else{
									    	$query_s85=pg_query($conexion,"select idcargo from cargo_pastor where idcargo='$fila2[0]'");
								                    if (pg_num_rows($query_s85)<$medida) {
								                    	$options=$options." <option value='$fila2[0]'>$fila2[1]</option>";       
								                    } 
									    }
					                }

                             }
                                }
					     

								                    	     
								                   







}
	
	
  
$options=$options."</select>
</div></div>";


echo $options;    

	
?>


