<?php	
$elegido=$_POST["elegido"];
 
include("../config/conexion.php");

$options="";

$conect=pg_query($conexion,"select municipio from iglesia where idiglesia='$elegido' "); 
                      while ($vector=pg_fetch_array($conect)) {
                          
              $options="<option value='$vector[0]'>$vector[0]</option>";

                      }


echo $options;    

	
?>


