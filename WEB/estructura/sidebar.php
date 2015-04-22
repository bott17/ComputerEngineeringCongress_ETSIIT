<div class="sidebar1">
	<h2>Enlaces de inter&eacute;s</h2>
    <ul>
	<?php
		switch ($seccion) {
			case 'actividades':
				break;	
			case 'contacto':
				break;	
			case 'horarios':
				echo "
	                <li><a href='index.php?sec=horarios#dia1'>Sesi&oacute;n d&iacute;a 1</a></li>
					<li><a href='index.php?sec=horarios#dia2'>Sesi&oacute;n d&iacute;a 2</li>
	                <li><a href='index.php?sec=horarios#dia3'>Sesi&oacute;n d&iacute;a 3</a></li>";	
				break;	
			case 'inscripcion':
				break;		
			case 'patrocinanos':
				break;
			default:
				echo "
	                <li><a href='index.php#Presentacion'>Presentaci&oacute;n del congreso</a></li>
					<li><a href='index.php#ETSIIT'>¿Qu&eacute es la ETSIIT?</a></li>
	                <li><a href='index.php#Granada'>Descubre la ciudad de Granada</a></li>";		
	 			break;		
 		}
?>            	
	</ul>
</div>