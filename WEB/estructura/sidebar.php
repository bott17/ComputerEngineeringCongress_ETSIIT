<div class="sidebar1">
	<h2>Enlaces de inter&eacute;s</h2>
    <ul>
	<?php
		switch ($seccion) {
			case 'actividades':
				include './seccion/sidebar/sidebarActividades.php';	
				break;		
			case 'contacto':
				include './seccion/sidebar/sidebarContacto.php';
				break;	
			case 'horarios':
				include './seccion/sidebar/sidebarHorarios.php';
				break;	
			case 'inscripcion':
				include './seccion/sidebar/sidebarInscripcion.php';
				break;		
			case 'patrocinanos':
				include './seccion/sidebar/sidebarPatrocinanos.php';
				break;
			case 'login' && 'registro' && 'recordar':
				include './seccion/sidebar/sidebarLogin.php';
				break;
			default:
				include './seccion/sidebar/sidebarPrincipal.php';
	 			break;		
 		}
?>            	
	</ul>
</div>