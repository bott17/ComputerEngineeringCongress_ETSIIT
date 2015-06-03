<?php

	$arrayCuotas = searchQuotaALL();
	
	$listaCuotas[] = 0;
	$tipoUsuario=0;
	
	if (isset($_SESSION['usuario'])) {
		$tipoUsuario = $_SESSION['tipo'];
		
	}

?>
<div class='mainContent'>
	<h2>Inscribete con tan solo unos datos...</h2>
	<ul id="precio">
		Cuotas de isncripci&oacute;n:
		<?php 
		
		$contador = 0;
			while($cuota = mysql_fetch_assoc($arrayCuotas)){
				echo '<li>
				<b>'.$cuota['denominacion'].' ('.$cuota['importe'].'&euro;) 
				<a href="index.php?sec=editcuota&cuot=' .$contador. '" class="editar"> Editar</a></b><br>
					'.$cuota['descripcion'].'<br><br></li>';
				$contador++;	
				
				$temp = array($cuota['denominacion'], $cuota['importe'], $cuota['descripcion']);
				array_push($listaCuotas, $temp);			
			}
			
			$_SESSION['listacuotas'] = $listaCuotas;
		
		?>
	</ul>
</div>
<!-- para las cajas con enlaces -->
<?php include 'estructura/boxes.php'; ?>

<br class='clearfloat' />
