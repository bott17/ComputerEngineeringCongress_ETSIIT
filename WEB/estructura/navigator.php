<header>
   	<div id="navheader">
   		<div id="izq"><h2><a href="./index.php">Congreso de Estudiantes de Ingenier&iacute;a Inform&aacute;tica</a></h2></div>
   		<div id="der"><p>Zona de Usuario</br><a href="#">(Login)</a></p></div>    	
   	</div>
    <div id="navcontainer">
    	<ul id="navlist" class="nav">
    		<?php
				switch ($seccion) {
					case 'actividades':
						echo "
							<li><a href='index.php'>Presentaci&oacute;n</a></li>
				           	<li><a  href='index.php?sec=horarios'>Horarios</a>
				        		<ul  class='subnavlist'>
					      			<li><a href='index.php?sec=horarios#dia1'>Primer día</a></li>
					       			<li><a href='index.php?sec=horarios#dia2'>Segundo día</a></li>
					       			<li><a href='index.php?sec=horarios#dia3'>Tercer día</a></li>
					       		</ul>
				        	</li>
					        <li id='active'><a class='navlist'  href='index.php?sec=actividades'>Actividades y Talleres</a>	        	
					        	<ul  class='subnavlist'>
					        		<li><a href='index.php?sec=actividades#alhambra'>Visita guiada a la Alhambra</a></li>
					        		<li><a href='index.php?sec=actividades#sierra_nevada'>Subida a Sierra Nevada</a></li>
					        	</ul>	        	
					        </li>	        
					        <li><a href='index.php?sec=inscripcion'>Inscr&iacute;bete</a></li>
					        <li><a href='index.php?sec=patrocinanos'>Patroc&iacute;nanos</a></li>
					        <li><a href='index.php?sec=contacto'>Contacto</a></li>";
						break;	
					case 'contacto':
						echo "
							<li><a href='index.php'>Presentaci&oacute;n</a></li>
				           	<li><a  href='index.php?sec=horarios'>Horarios</a>
				        		<ul  class='subnavlist'>
					      			<li><a href='index.php?sec=horarios#dia1'>Primer día</a></li>
					       			<li><a href='index.php?sec=horarios#dia2'>Segundo día</a></li>
					       			<li><a href='index.php?sec=horarios#dia3'>Tercer día</a></li>
					       		</ul>
				        	</li>
					        <li><a class='navlist'  href='index.php?sec=actividades'>Actividades y Talleres</a>	        	
					        	<ul  class='subnavlist'>
					        		<li><a href='index.php?sec=actividades#actividad1'>Visita guiada a la Alhambra</a></li>
					        		<li><a href='index.php?sec=actividades#actividad1'>Subida a Sierra Nevada</a></li>
					        	</ul>	        	
					        </li>	        
					        <li><a href='index.php?sec=inscripcion'>Inscr&iacute;bete</a></li>
					        <li><a href='index.php?sec=patrocinanos'>Patroc&iacute;nanos</a></li>
					        <li id='active'><a href='index.php?sec=contacto'>Contacto</a></li>";
						break;
					case 'horarios':
						echo "
							<li><a href='index.php'>Presentaci&oacute;n</a></li>
				           	<li id='active'><a  href='index.php?sec=horarios'>Horarios</a>
				        		<ul  class='subnavlist'>
					      			<li><a href='index.php?sec=horarios#dia1'>Primer día</a></li>
					       			<li><a href='index.php?sec=horarios#dia2'>Segundo día</a></li>
					       			<li><a href='index.php?sec=horarios#dia3'>Tercer día</a></li>
					       		</ul>
				        	</li>
					        <li><a class='navlist'  href='index.php?sec=actividades'>Actividades y Talleres</a>	        	
					        	<ul  class='subnavlist'>
					        		<li><a href='index.php?sec=actividades#actividad1'>Visita guiada a la Alhambra</a></li>
					        		<li><a href='index.php?sec=actividades#actividad1'>Subida a Sierra Nevada</a></li>
					        	</ul>	        	
					        </li>	        
					        <li><a href='index.php?sec=inscripcion'>Inscr&iacute;bete</a></li>
					        <li><a href='index.php?sec=patrocinanos'>Patroc&iacute;nanos</a></li>
					        <li><a href='index.php?sec=contacto'>Contacto</a></li>";
						break;
					case 'inscripcion':
						 echo "
							<li><a href='index.php'>Presentaci&oacute;n</a></li>
				           	<li><a  href='index.php?sec=horarios'>Horarios</a>
				        		<ul  class='subnavlist'>
					      			<li><a href='index.php?sec=horarios#dia1'>Primer día</a></li>
					       			<li><a href='index.php?sec=horarios#dia2'>Segundo día</a></li>
					       			<li><a href='index.php?sec=horarios#dia3'>Tercer día</a></li>
					       		</ul>
				        	</li>
					        <li><a class='navlist'  href='index.php?sec=actividades'>Actividades y Talleres</a>	        	
					        	<ul  class='subnavlist'>
					        		<li><a href='index.php?sec=actividades#actividad1'>Visita guiada a la Alhambra</a></li>
					        		<li><a href='index.php?sec=actividades#actividad1'>Subida a Sierra Nevada</a></li>
					        	</ul>	        	
					        </li>	        
					        <li id='active'><a href='index.php?sec=inscripcion'>Inscr&iacute;bete</a></li>
					        <li><a href='index.php?sec=patrocinanos'>Patroc&iacute;nanos</a></li>
					        <li><a href='index.php?sec=contacto'>Contacto</a></li>";
						break;
					case 'patrocinanos':
						echo "
							<li><a href='index.php'>Presentaci&oacute;n</a></li>
				           	<li><a  href='index.php?sec=horarios'>Horarios</a>
				        		<ul  class='subnavlist'>
					      			<li><a href='index.php?sec=horarios#dia1'>Primer día</a></li>
					       			<li><a href='index.php?sec=horarios#dia2'>Segundo día</a></li>
					       			<li><a href='index.php?sec=horarios#dia3'>Tercer día</a></li>
					       		</ul>
				        	</li>
					        <li><a class='navlist'  href='index.php?sec=actividades'>Actividades y Talleres</a>	        	
					        	<ul  class='subnavlist'>
					        		<li><a href='index.php?sec=actividades#actividad1'>Visita guiada a la Alhambra</a></li>
					        		<li><a href='index.php?sec=actividades#actividad1'>Subida a Sierra Nevada</a></li>
					        	</ul>	        	
					        </li>	        
					        <li><a href='index.php?sec=inscripcion'>Inscr&iacute;bete</a></li>
					        <li id='active'><a href='index.php?sec=patrocinanos'>Patroc&iacute;nanos</a></li>
					        <li><a href='index.php?sec=contacto'>Contacto</a></li>";
						break;
					default:
						echo "
							<li id='active'><a href='index.php'>Presentaci&oacute;n</a></li>
				           	<li><a  href='index.php?sec=horarios'>Horarios</a>
				        		<ul  class='subnavlist'>
					      			<li><a href='index.php?sec=horarios#dia1'>Primer día</a></li>
					       			<li><a href='index.php?sec=horarios#dia2'>Segundo día</a></li>
					       			<li><a href='index.php?sec=horarios#dia3'>Tercer día</a></li>
					       		</ul>
				        	</li>
					        <li><a class='navlist'  href='index.php?sec=actividades'>Actividades y Talleres</a>	        	
					        	<ul  class='subnavlist'>
					        		<li><a href='index.php?sec=actividades#actividad1'>Visita guiada a la Alhambra</a></li>
					        		<li><a href='index.php?sec=actividades#actividad1'>Subida a Sierra Nevada</a></li>
					        	</ul>	        	
					        </li>	        
					        <li><a href='index.php?sec=inscripcion'>Inscr&iacute;bete</a></li>
					        <li><a href='index.php?sec=patrocinanos'>Patroc&iacute;nanos</a></li>
					        <li><a href='index.php?sec=contacto'>Contacto</a></li>";
						break;
					}	
	        ?>
		</ul>
	</div>
    <br class="clearfloat" />
</header>