<header>
   	<div id="navheader">
   		<div id="izq"><h2><a href="./index.php">Congreso de Estudiantes de Ingenier&iacute;a Inform&aacute;tica</a></h2></div>
   		<div id="der"><p>Zona de Usuario</br><a href="index.php?sec=login">(Login)</a></p></div>    	
   	</div>
    <div id="navcontainer">
    	<ul id="navlist" class="nav">
    		<?php
				switch ($seccion) {
					case 'actividades':
						include './seccion/navigator/navigatorActividades.php';
						break;	
					case 'contacto':
						include './seccion/navigator/navigatorContacto.php';
						break;
					case 'horarios':
						include './seccion/navigator/navigatorHorarios.php';
						break;
					case 'inscripcion':
						include './seccion/navigator/navigatorInscripcion.php';
						break;
					case 'patrocinanos':
						include './seccion/navigator/navigatorPatrocinanos.php';
						break;
					default:
						include './seccion/navigator/navigatorDef.php';
						break;
					}	
	        ?>
		</ul>
	</div>
    <br class="clearfloat" />
</header>