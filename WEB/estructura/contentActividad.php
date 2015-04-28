<?php
switch ($actividad) {
	case 'alh':
		echo "
			<div class='mainContent'>
	        	<h2 id='tituloContent'>Metodologias agiles</h2>
	        	<p>
	        		M. Noguera<br><br>
	        		....
	        	</p>
	        </div>
	        <br class='clearfloat' />";
		break;
	default:
		echo "
			<div class='mainContent'>
	        	<h2 id='tituloContent'>Ups</h2>
	        	<p>
	        		La pagina que estas buscando no existe.
	        	</p>
	        </div>
	        <br class='clearfloat' />";
		break;	
		
}