<header>
   	<div id="navheader">
   		<div id="izq"><h2><a href="./index.php">Congreso de Estudiantes de Ingenier&iacute;a Inform&aacute;tica</a></h2></div>
   		<?php 
   		
   			if(empty($usu))
				include './seccion/navigator/navigatorNoIdentificado.php';
			else
				include './seccion/navigator/navigatorIdentificado.php';
   		
   		?>   		
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
					case 'login': case 'registro': case 'recordar': case 'miperfil':
						include './seccion/navigator/navigatorSinActive.php';
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