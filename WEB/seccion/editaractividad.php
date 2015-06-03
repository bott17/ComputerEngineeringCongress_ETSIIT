<?php
	global $listaActividades;
	$arrayTemporal = $listaActividades;
	
	
	for($contador = 0; $contador < count($arrayTemporal); $contador++) {
		if($contador == $act){
			$actividad = $arrayTemporal[$contador];
			break;
		} 
	}
	
	
?>
<div class='mainContent'>
	<div class='actividad'>
		<h2>Editar actividad</h2>
		<form method="post" action="">
			<table>
				<tr>
					<th>Correo</th>
					<td><input type="text" name="correo" value="<?php echo $cor; ?>"/></td>
				</tr>
				<tr>
					<th>Contraseña</th>
					<td><input type="password" name="pass" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="Entrar" name="bLogin" />
					</td>
				</tr>
				<tr><td colspan="2"><?php echo $mensaje; ?></td></tr>
				<tr><td colspan="2"><a href="index.php?sec=olvidos">Olvide mi contraseña</a></td></tr>
			</table>		
		</form>
	</div>
</div>
<!-- para las cajas con enlaces -->
 <?php include './estructura/boxes.php';?>
 <br class='clearfloat' />