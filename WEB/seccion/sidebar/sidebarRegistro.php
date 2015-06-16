<?php

	// Precio de las opciones seleccionadas
	$totalAcumulado = 0;
	$cuota = null;
	$actividades = null;
	$hotel = null;
	
	if(isset($_REQUEST["cuota"])){
		$cuota = $_REQUEST["cuota"];
		$totalAcumulado = intval($totalAcumulado) + intval($cuota);
	}
	if(isset($_REQUEST["actividades"])){
		$actividades = $_REQUEST["actividades"];
		$totalAcumulado = intval($totalAcumulado) + intval($actividades);
	}
	if(isset($_REQUEST["hotel"])){
		$hotel = $_REQUEST["hotel"];
		$totalAcumulado = intval($totalAcumulado) + intval($hotel);
	}

?>


<div id="recuentoRegistro">
	<h3> Total de tu inscripción</h3>
	<ul>
		<?php
			if(!is_null($cuota)){
				echo "<li>Cuota: " .$cuota. "<li>";
			}
			if(!is_null($actividades)){
				echo "<li>Actividaes: " .$actividades. "<li>";
			}
			if(!is_null($hotel)){
				echo "<li>Hotel: " .$hotel. "<li>";
			}
			echo "<li><h3>Total a pagar: " .$totalAcumulado. "</h3></li>";
		?>
	</ul>
</div>