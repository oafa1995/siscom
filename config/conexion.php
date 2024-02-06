<?php
$server="localhost";
$puerto="5432";
$database="siscom";
$usuario="postgres";
$clave="root";


$conexion=pg_connect("host=$server port=$puerto dbname=$database user=$usuario password=$clave");
if(!$conexion){
	echo"Error de conexion a la Base de Datos";
	exit;
	}
	
/*
	try {
	$conexion = new PDO('pgsql:dbname='.$database.';host='.$server.';',$usuario,$clave ); 
	
	echo "Conexion Exitosa! :)";
}catch(Exception $e){
   		print "Error: ".$e->getMessage() ."<br/>";
   		die();
   }
	*/
?>