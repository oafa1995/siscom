<?php	
$elegido=$_POST["elegido"];
 
include("../config/conexion.php");


    $query_pqre=pg_query($conexion,"select licencia from pastor where idpastor='$elegido'");
       while($fila=pg_fetch_array($query_pqre)){
                             $licen=$fila[0];  
                          }

$options="
<div id='muestralo3'>
<label class='col-md-4 control-label' for='nombresv'>Lisencias</label>  
  <div  class='col-md-6'>
  <select id='licenciaa' name='licenciaa' class='form-control input-md' >
  <option value='' disabled select>Escoja la Licencia</option>
  <option value='obrero' >Obrero</option>
  <option value='local' >Obrero Local</option>
  <option value='general' >General</option>
  <option value='ordenacion' >Ordenacion</option>
  </select>
  </div>
  </div>
  <br>
  <br>
";



	
	
  
$options=$options."
</div></div>";


echo $options;    

	
?>


