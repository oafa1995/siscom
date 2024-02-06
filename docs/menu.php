<?php //session_start();
if($_SESSION['autenticado']!="yeah"){
	header("Location: ../index.php");
	exit();
	}
?> 




<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/book.ico" />
<script src="../js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="../css/sweet-alert.css">
    <link rel="stylesheet" href="../css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery-1.11.2.min.js"><\/script>')</script>
    
	
	
	<!--para tabla-->	
		  <link rel="stylesheet" type="text/css" href="../paginacion/jquery.dataTables.min.css">
	<style type="text/css" class="init"></style>
	
	
	<script type="text/javascript" language="javascript" src="../paginacion/jquery.dataTables.min.js">
	</script>
	
	
	
	
    <script src="../js/bootstrap.min.js"></script>
  
 


         
                <ul class="list-unstyled">
				
				
				
				
                    <li><a href="index.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                   
 <?php 
				  $niv=$_SESSION["nivelUsuario"];
					  if($niv==1){?> 

				   <li>
                        <div class="dropdown-menu-button" ><i class="zmdi zmdi-case zmdi-hc-fw"></i>&nbsp;&nbsp; Pastores <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div> <!--menu de director -->
                
						<ul class="list-unstyled" id="wawa">
                          
 <li role="presentation"><a  href="crearPastor.php"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>Crear Pastor</a></li>
            
                <li role="presentation"><a href="buscarPastor.php"><i class="zmdi zmdi-search zmdi-hc-fw"></i>Buscar Pastor</a></li>
				      <li role="presentation"><a href="bajaPastor.php"><i class="zmdi zmdi-thumb-down zmdi-hc-fw"></i>Dar de Baja Pastor</a></li>
                <li role="presentation"><a href="altoPastor.php"><i class="zmdi zmdi-thumb-up zmdi-hc-fw"></i>Dar de Alta Pastor</a></li>						
                <li role="presentation"><a href="asignarIglesia.php"><i class="zmdi zmdi-mood-bad zmdi-hc-fw"></i>Pastores sin iglesia</a></li>	
                 <li role="presentation"><a href="asignarBaja.php"><i class="zmdi zmdi-thumb-down zmdi-hc-fw"></i>Quitar iglesia a pastor</a></li>
                  <li role="presentation"><a  href="asignarCargo.php"><i class="zmdi zmdi-account zmdi-hc-fw"></i>Asignar Cargo</a></li>	
                   	 <li role="presentation"><a  href="asignarEsposa.php"><i class="zmdi zmdi-account zmdi-hc-fw"></i>Asignar Se&nacute;ora</a></li>			
                   <li role="presentation"><a  href="asignarCargoP.php"><i class="zmdi zmdi-account zmdi-hc-fw"></i>Trasladar Cargo Presidente</a></li>	  
 <li role="presentation"><a  href="asignarLicencia.php"><i class="zmdi zmdi-card zmdi-hc-fw"></i>Administrar Licencias Pastor</a></li>	  				   
                        </ul>
					
                    </li>
					
					

				 <li>
                        <div class="dropdown-menu-button" ><i class="zmdi zmdi-lock zmdi-hc-fw"></i>&nbsp;&nbsp; Seguridad <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div> <!--menu de director -->
                
						<ul class="list-unstyled" id="wawa">
                            <li><a href="gestionarTutor.php"><i class="zmdi zmdi-lock zmdi-hc-fw"></i>&nbsp;&nbsp; Bitacora de seguridad </a></li>
                          
						        <li><a href="respaldo.php"><i class="zmdi zmdi-lock zmdi-hc-fw"></i></i>&nbsp;&nbsp; Gestionar Copia de Seguridad</a></li>  
						
                           
                        </ul>
					
                    </li>
						
					
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i>&nbsp;&nbsp;Miembros <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="escogerCM.php"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Crear Miembro</a></li>
                            <li><a href="buscarMiembroPre.php"><i class="zmdi zmdi-search zmdi-hc-fw"></i>&nbsp;&nbsp;Buscar Miembro</a></li>        
                            <li><a href="trasladarMiembro.php"><i class="zmdi zmdi-directions-run zmdi-hc-fw"></i>&nbsp;&nbsp;Trasladar Miembro</a></li>
							
                            <li><a href="buscarMiembrobajapre.php"><i class="zmdi zmdi-thumb-down zmdi-hc-fw"></i>&nbsp;&nbsp;Dar de baja Miembro</a></li>
                            <li><a href="buscarMiembroAltapre.php"><i class="zmdi zmdi-thumb-up zmdi-hc-fw"></i>&nbsp;&nbsp;Dar de alta Miembro</a></li>

                        </ul>
                    </li>
					
					<li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-local-store zmdi-hc-fw"></i>&nbsp;&nbsp;Iglesias <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="crearIglesia.php"><i class="zmdi zmdi-plus zmdi-hc-fw"></i><i class="zmdi zmdi-local-store zmdi-hc-fw"></i>&nbsp;&nbsp; Crear Iglesia</a></li>
                            <li><a href="escogerIglesia.php"><i class="zmdi zmdi-search zmdi-hc-fw"></i><i class="zmdi zmdi-local-store zmdi-hc-fw"></i>&nbsp;&nbsp; Buscar Iglesia</a></li>

                        </ul>
                    </li>
					
					
					
					
					
					
					 <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp;Misiones Internas <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="crearMision.php"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp;Registrar Misi&#243;n</a></li>
                            <li><a href="buscarMision.php"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp;Buscar Misi&#243;n</a></li>
							     
                        </ul>
                    </li>
					
					
					
                    <li><a href="gestionarReportes.php"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes</a></li>
					
					
				

 <?php 

///////////////////////////////////////nivel 5///////////////////////////////
}else{ 
	if ($niv==5) {
		# code...
	?>
	
		 <li>
                        <div class="dropdown-menu-button" ><i class="zmdi zmdi-case zmdi-hc-fw"></i>&nbsp;&nbsp; Pastores <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div> <!--menu de director -->
                
						<ul class="list-unstyled" id="wawa">
                          
 <li role="presentation"><a  href="crearPastorZona.php"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>Crear Pastor</a></li>
            
                <li role="presentation"><a href="buscarPastorZona.php"><i class="zmdi zmdi-search zmdi-hc-fw"></i>Buscar Pastor</a></li>						
                <li role="presentation"><a href="asignarIglesiaZona.php"><i class="zmdi zmdi-mood-bad zmdi-hc-fw"></i>Pastores sin iglesia</a></li>	
                 <li role="presentation"><a href="asignarBajaZona.php"><i class="zmdi zmdi-thumb-down zmdi-hc-fw"></i>Quitar iglesia a pastor</a></li>
                  	    
                        </ul>
					
                    </li>
					

                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i>&nbsp;&nbsp;Miembros <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="escogerCMZona.php"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Crear Miembro</a></li>
                            <li><a href="buscarMiembroPreZona.php"><i class="zmdi zmdi-search zmdi-hc-fw"></i>&nbsp;&nbsp;Buscar Miembro</a></li>        
                            
                            <li><a href="buscarMiembrobajapreZona.php"><i class="zmdi zmdi-thumb-down zmdi-hc-fw"></i>&nbsp;&nbsp;Dar de baja Miembro</a></li>
                            <li><a href="buscarMiembroAltapreZona.php"><i class="zmdi zmdi-thumb-up zmdi-hc-fw"></i>&nbsp;&nbsp;Dar de alta Miembro</a></li>
                            <li><a href="trasladarMiembroZona.php"><i class="zmdi zmdi-directions-run zmdi-hc-fw"></i>&nbsp;&nbsp;Trasladar Miembro</a></li>

                        </ul>
                    </li>
					
					<li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-local-store zmdi-hc-fw"></i>&nbsp;&nbsp;Iglesias <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="crearIglesiaZona.php"><i class="zmdi zmdi-plus zmdi-hc-fw"></i><i class="zmdi zmdi-local-store zmdi-hc-fw"></i>&nbsp;&nbsp; Crear Iglesia</a></li>
                            <li><a href="escogerIglesiaZona.php"><i class="zmdi zmdi-search zmdi-hc-fw"></i><i class="zmdi zmdi-local-store zmdi-hc-fw"></i>&nbsp;&nbsp; Buscar Iglesia</a></li>

                        </ul>
                    </li>
					
					
					
					
					
					
					
					
					
					
                    <li><a href="gestionarReportesZona.php"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes</a></li>			
				
<?php 
}else{
	if ($niv==4) { ?>
<li>
                        <div class="dropdown-menu-button" ><i class="zmdi zmdi-case zmdi-hc-fw"></i>&nbsp;&nbsp; Pastores <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div> <!--menu de director -->
                
						<ul class="list-unstyled" id="wawa">
                          
 <li role="presentation"><a  href="crearPastorDistrito.php"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>Crear Pastor</a></li>
            
                <li role="presentation"><a href="buscarPastorDistrito.php"><i class="zmdi zmdi-search zmdi-hc-fw"></i>Buscar Pastor</a></li>						
                <li role="presentation"><a href="asignarIglesiaDistrito.php"><i class="zmdi zmdi-mood-bad zmdi-hc-fw"></i>Pastores sin iglesia</a></li>	
                 <li role="presentation"><a href="asignarBajaDistrito.php"><i class="zmdi zmdi-thumb-down zmdi-hc-fw"></i>Quitar iglesia a pastor</a></li>
                  	    
                        </ul>
					
                    </li>
					

                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i>&nbsp;&nbsp;Miembros <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="escogerCMDistrito.php"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Crear Miembro</a></li>
                            <li><a href="buscarMiembroPreDistrito.php"><i class="zmdi zmdi-search zmdi-hc-fw"></i>&nbsp;&nbsp;Buscar Miembro</a></li>        
                            
                            <li><a href="buscarMiembrobajapreDistrito.php"><i class="zmdi zmdi-thumb-down zmdi-hc-fw"></i>&nbsp;&nbsp;Dar de baja Miembro</a></li>
                            <li><a href="buscarMiembroAltapreDistrito.php"><i class="zmdi zmdi-thumb-up zmdi-hc-fw"></i>&nbsp;&nbsp;Dar de alta Miembro</a></li>
                             <li><a href="trasladarMiembroDistrito.php"><i class="zmdi zmdi-directions-run zmdi-hc-fw"></i>&nbsp;&nbsp;Trasladar Miembro</a></li>
                        </ul>
                    </li>
					
					<li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-local-store zmdi-hc-fw"></i>&nbsp;&nbsp;Iglesias <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="crearIglesiaDistrito.php"><i class="zmdi zmdi-plus zmdi-hc-fw"></i><i class="zmdi zmdi-local-store zmdi-hc-fw"></i>&nbsp;&nbsp; Crear Iglesia</a></li>
                            <li><a href="escogerIglesiaDistrito.php"><i class="zmdi zmdi-search zmdi-hc-fw"></i><i class="zmdi zmdi-local-store zmdi-hc-fw"></i>&nbsp;&nbsp; Buscar Iglesia</a></li>

                        </ul>
                    </li>
					
					
					
					
					
					
					
					
					
					
                    <li><a href="gestionarReportesDistrito.php"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes</a></li>	
	

<?php 
}else{
	if ($niv==2) { ?>

	            <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i>&nbsp;&nbsp;Miembros <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="crearMiembroPP.php"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Crear Miembro</a></li>
                            <li><a href="buscarMiembroPP.php"><i class="zmdi zmdi-search zmdi-hc-fw"></i>&nbsp;&nbsp;Buscar Miembro</a></li>        
                            
                            <li><a href="bajaMiembroPP.php"><i class="zmdi zmdi-thumb-down zmdi-hc-fw"></i>&nbsp;&nbsp;Dar de baja Miembro</a></li>
                            <li><a href="altaMiembroPP.php"><i class="zmdi zmdi-thumb-up zmdi-hc-fw"></i>&nbsp;&nbsp;Dar de alta Miembro</a></li>

                        </ul>
                    </li>
	
		      
			  <li><a href="iglesiaPP.php"><i class="zmdi zmdi-store zmdi-hc-fw"></i>&nbsp;&nbsp; Datos Iglesia</a></li>

	
	                    <li><a href="reportesPP.php"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes</a></li>

	
<?php 	
}
}
}
} ?>			
				
				
					
                </ul>
        