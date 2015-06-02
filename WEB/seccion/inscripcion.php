<?php

	$arrayCuotas = searchQuotaALL();

?>
<div class='mainContent'>
	<h2>Inscribete con tan solo unos datos...</h2>
	<ul id="precio">
		Cuotas de isncripci&oacute;n:
		<?php 
		
			while($cuota = mysql_fetch_assoc($arrayCuotas)){
				echo '<li><b>'.$cuota['denominacion'].' ('.$cuota['importe'].'&euro;)</b><br>'.$cuota['descripcion'].'<br><br></li>';				
			}
		
		?>
	</ul>
</div>
<!-- para las cajas con enlaces -->
<?php include 'estructura/boxes.php'; ?>

<br class='clearfloat' />
