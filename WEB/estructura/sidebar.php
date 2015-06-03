<div class="sidebar1">
	<h2 id="tituloSideBar">Enlaces de inter&eacute;s</h2>
    <ul>
	<?php
		if(!isset($tipoUsuario) || $tipoUsuario == 0){
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
				case 'login': case 'registro': case 'recordar':
					include './seccion/sidebar/sidebarLogin.php';
					break;
				case 'miperfil':
					break;
				default:
					include './seccion/sidebar/sidebarPrincipal.php';
		 			break;		
	 		}
		}
		else{
			include './seccion/sidebar/sidebarAdmin.php';	
		}
?>            	
	</ul>
</div>