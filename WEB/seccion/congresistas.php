<?php 

	$arrayCongresistas = getCongresistas();

?>
<div class='mainContent'>
	<h2 id='tituloContent'>Congresistas inscritos</h2>
	
	<?php
		for($contador = 0; $contador < mysql_num_rows($arrayCongresistas); $contador++) {
			$congresista = mysql_fetch_assoc($arrayCongresistas); 
			echo 
				"<div class='actividad'>
					<span>Nombre: " .$congresista["Nombre"]. " " .$congresista["Apellidos"]."</span><br>
					<span>Centro de trabajo: ".$congresista["Centro de trabajo"]."</span><br>
					<span>Telefono: " .$congresista["Telefono"]. "</span><br>
					<span id=correo" .$contador.">Correo electronico: " .$congresista["Correo"]. "</span><br>
					<span>Tipo de inscripcion: " .$congresista["idCuota"]. " Con precio de: " .$congresista["importe"]. "€</span><br>
				</div>";
		}
	?>
</div>
<!-- para las cajas con enlaces -->
 <?php include './estructura/boxes.php';?>
 <br class='clearfloat' />