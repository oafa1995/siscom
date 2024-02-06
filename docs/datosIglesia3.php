<?php	
$elegido=$_POST["elegido"];
 
include("../config/conexion.php");

$options="";

$conect=pg_query($conexion,"select iddistrito from iglesia where idiglesia='$elegido' "); 
                      while ($vector=pg_fetch_array($conect)) {
                          
            //  $options="<option value='$vector[0]'>$vector[0]</option>";

			$con=pg_query($conexion,"select nombre from distrito where iddistrito='$vector[0]' "); 
			
			 while ($vector2=pg_fetch_array($con)) {
				 $options="<option value='$vector2[0]'>$vector2[0]</option>";
			 }
			
			
                      }


echo $options;    

	
?>


