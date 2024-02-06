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


$edad=$_POST["fecha"];
$estadoc=$_POST["elegido"];
$sexo=$_POST["sexo"];
 
 $edad=obtener_edad($edad);
 
//echo "La edad del usuario es: ". obtener_edad('1988/08/06');

$options="";



if(($edad>=9 && $edad<30 ) && $estadoc=="Soltero"){
	
	// $options= "<option value=\"".$edad."\"  > $elegi años  </option>";  
	//echo "Sociedad de Jovenes";
	$options= "<option value='Sociedad de jovenes'>Sociedad de Jovenes</option>";  

}


if($edad>=18 && $estadoc=="Casado" && $sexo=="Masculino"){
	
	// $options= "<option value=\"".$edad."\"  > $elegi años  </option>";  
	//echo "Sociedad de Jovenes";
	$options= "<option value='Sociedad de Señores'>Sociedad de Señores</option>";  

}

if($edad>=18 && $estadoc=="Casado" && $sexo=="Femenino"){
	
	// $options= "<option value=\"".$edad."\"  > $elegi años  </option>";  
	//echo "Sociedad de Jovenes";
	$options= "<option value='Sociedad de Señoras'>Sociedad de Señoras</option>";  

}

///para los que se les fue el tren
if($edad>=30 && $estadoc=="Soltero" && $sexo=="Masculino"){
$options= "<option value='Sociedad de Señores'>Sociedad de Señores</option>";  

}

if($edad>=30 && $estadoc=="Soltero" && $sexo=="Femenino"){
$options= "<option value='Sociedad de Señoras'>Sociedad de Señoras</option>";  

}

if($edad<9){
	
	// $options= "<option value=\"".$edad."\"  > $elegi años  </option>";  
	//echo "Sociedad de Jovenes";
	$options= "<option value=''>Edad no apta para sociedad</option>";  

}


echo $options;    


	
?>