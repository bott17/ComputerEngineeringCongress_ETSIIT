<?php
	
	include '../extension/recuperador.php';
	
	$cuota = $_REQUEST["cuota"];
	
	$arrayActividades = getActividadesCuota($cuota);

?>

<div class= "preview">
	
	<?php
	// if($arrayActividades instanceof boolean  ){
	 	echo "<h2> Actividades incluidas</h2>";
		$arrayTemporal = $arrayActividades;
		for($contador = 0; $contador < mysql_num_rows($arrayTemporal); $contador++) {
			$actividad = mysql_fetch_assoc($arrayTemporal); 
			echo "
				<h2 id='tituloActividad'>".$actividad["denominacion"]."</h2>
				<h1 id'fechaActividad'>".$actividad["FechaHora"]."</h1>
				<img id='imgActividad' src=".$actividad["foto"].">
				<p>
				<br />
				<span id='descripcionActividad'>" .$actividad["descripcion"]. "</span>
				<br /><br/>
				<b>Precio: Incluido</b>;
				</p>
				"
			;
		}
	// }
	?>
</div>