<?php
	
	$cod = $_GET['act'];

	$arrayActividades = searchActNOT($cod);

?>

<div class="sidebar1">
	<h2>Otras actividades</h2>
	<ul> <!-- aqui hacer un for para cuando haya mas actividades -->
		<?php $actividad = mysql_fetch_assoc($arrayActividades); ?>		
		<li><a href="actividad.php?sec=actividades&act=<?php echo $actividad['codigo'];?>"><?php echo $actividad['denominacion']; ?></a></li>
		<?php $actividad = mysql_fetch_assoc($arrayActividades); ?>		
		<li><a href="actividad.php?sec=actividades&act=<?php echo $actividad['codigo'];?>"><?php echo $actividad['denominacion']; ?></a></li>
		<li><a href="index.php?sec=actividades">Atras</a></li>
	</ul>
</div>
