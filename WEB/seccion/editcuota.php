<?php

	if(isset($_SESSION['listacuotas'])){
		$listaCuotas = $_SESSION['listacuotas'];
		
		
		$cuot = $_GET['cuot'];
		$cuota;
		
		$cuota = $listaCuotas[$cuot+1];
		
		$idCout = $cuota[0];
		$nombreCuot =  $cuota[0];
		$precioCuot =  $cuota[1];
		$descripCuot=  $cuota[2];
	
	}
	
?>
<div class='mainContent'>
	<ul>
			<li><h2>Editar Cuota</h2></li>
			<li>
		<form method="post" action="">
			<table>
				<tr>
					<th>Nombre de la cuota</th>
					<td><input type="text" name="nombreAct" value="<?php echo $nombreCuot; ?>"/></td>
				</tr>
				<tr>
					<th>Precio</th>
					<td><input type="text" name="fechaAct" value="<?php echo $precioCuot; ?>" /></td>
				</tr>
				<tr>
					<th>Descripcion</th>
					<td><input type="text" name="rutaAct" value="<?php echo $descripCuot; ?>" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="Editar" name="btnEditar" />
					</td>
				</tr>
			</table>		
		</form>
		</li>
		</ul>
</div>