<?php

	$urlBase = "actividad.php?sec=actividades&act=";
	$actividadUrl= $urlBase; 
	$nombreAct="";
	
	switch ($actividad) {
		case 'alh':
			$actividadUrl .= "sierra";
			$nombreAct = "Sierra Nevada";
			break;
			
		case 'sierra':
			$actividadUrl .= "alh";
			$nombreAct = "Visita a la Alhambra";
			break;
	}
?>

<div class="sidebar1">
	<h2>Otras actividades</h2>
	<ul>
		<li><a href=<?php echo $actividadUrl; ?>><?php echo $nombreAct; ?></a></li>
	</ul>
</div>
