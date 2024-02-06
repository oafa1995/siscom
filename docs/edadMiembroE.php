<?php	

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


$elegido=$_POST["elegido"];
 
 $elegido=obtener_edad($elegido);
 
//echo "La edad del usuario es: ". obtener_edad('1988/08/06');

$options="";

//////////////////////////////////////
if ($elegido<18 && $elegido>=9) {
 
 
	 $options= "<option value='' selected disabled>Escoja estado civil</option>
	 <option value='Soltero'>Soltero/a</option>";  
}


if($elegido>17){
	
	 $options= "<option value='' selected disabled>Escoja estado civil</option> 
	<option value='Soltero'>Soltero/a</option>
	<option value='Casado'>Casado/a</option>";	

	 
}





echo $options;    


	
?>