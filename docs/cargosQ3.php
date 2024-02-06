<?php	
$elegido=$_POST["elegido"];
 
include("../config/conexion.php");



$query_s3=pg_query($conexion,"select c.idcargo,c.nombre from cargo as c,cargo_pastor as cp where cp.idpastor=$elegido and cp.idcargo=c.idcargo");
		
			                    if (pg_num_rows($query_s3)==1) {
			                    	while($fila4=pg_fetch_array($query_s3)){
			                    		if ($fila4[0]==3) {
			                    			$options="<div id='muestralo'><label class='col-md-4 control-label' for='nombresv'>No tiene Cargo</label><select id='cargar' name='cargar' style='display: none'></select>  <div  class='col-md-6'>";
			                    			$options=$options."
                                                 </div></div>";	
			                    		  }else{
			                    		  	$options="<div id='muestralo'><label class='col-md-4 control-label' for='nombresv'>Cargo</label>  <div  class='col-md-6'>";
			                    		  	$options=$options."<select id='cargar' name='cargar' class='form-control input-md' ><option value='$fila4[0]'>$fila4[1]</option>";
			                    			$options=$options."</select>
                                                 </div>";
                                              $options=$options."<br><br><label class='col-md-4 control-label' for='nombresv'>Pastor</label>  <div  class='col-md-6'><select id='pastro' name='pastro' class='form-control input-md' ><option value='' disabled selected>Escoja al Pastor</option>";
                                             $query_s43=pg_query($conexion,"select distinct p.idpastor,p.nombre,p.apellido from pastor as p,cargo as c,cargo_pastor as cp where c.nivel!=0 and c.nivel!=1  and cp.idpastor=p.idpastor and c.idcargo=cp.idcargo and p.licencia='ordenacion'");
		
			                    
								                           while($fila=pg_fetch_array($query_s43)){
					                                           $options=$options." <option value='$fila[0]'>$fila[1] $fila[2] </option>";						  }


                                                 $options=$options."</select></div></div>";
			                    		  }
					                    }
			                    }else{






$options="
<div id='muestralo'>
<label class='col-md-4 control-label' for='nombresv'>Cargos</label>  
  <div  class='col-md-6'>
  <select id='cargar' name='cargar' class='form-control input-md' >
  <option value='' disabled selected>Escoja el Cargo</option>
";
  
                
				$query_s=pg_query($conexion,"select c.idcargo,c.nombre from cargo as c,cargo_pastor as cp where cp.idpastor=$elegido and cp.idcargo=c.idcargo");
		
			                    
								while($fila=pg_fetch_array($query_s)){
					              $options=$options." <option value='$fila[0]'>$fila[1]</option>";										
					                   }

$options=$options."</select> </div>";
$options=$options."<label class='col-md-4 control-label' for='nombresv'>Pastor</label>  
  <div  class='col-md-6'><select id='pastro' name='pastro' class='form-control input-md' ><option value='' disabled selected>Escoja el Cargo</option>";

$query_s=pg_query($conexion,"select p.idpastor,p.nombre,p.apellido from pastor as p,cargo_pastor as cp,cargo as c where p.idpastor=$elegido and cp.idpastor=p.idpastor and c.nivel!=1 and p.licencia='ordenacion'");
		
			                    
								while($fila=pg_fetch_array($query_s)){
					              $options=$options." <option value='$fila[0]'>$fila[1]</option>";										
					                   }


$options=$options."</select></div></div>";			                    
								
								
}				
				
	
  



echo $options;    

	
?>


