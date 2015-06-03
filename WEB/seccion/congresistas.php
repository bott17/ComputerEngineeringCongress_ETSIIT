<?php 

	$arrayCongresistas = getCongresistas();

?>
<div class='mainContent'>
	<h2 id='tituloContent'>Congresistas inscritos</h2>
	
	<?php
		for($contador = 0; $contador < mysql_num_rows($arrayCongresistas); $contador++) {
			$congresista = mysql_fetch_assoc($arrayCongresistas); 
			echo $congresista["Nombre"];
			
		}
	?>
</div>
<!-- para las cajas con enlaces -->
 <?php include './estructura/boxes.php';?>
 <br class='clearfloat' />