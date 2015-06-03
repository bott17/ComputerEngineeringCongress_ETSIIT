<?php

	if(isset($_SESSION['listaactividades'])){
		$listaActividades = $_SESSION['listaactividades'];
	
	
	$act = $_GET['act'];
	$actividad;
	
	$actividad = $listaActividades[$act+1];
	
	$idAct = $actividad[0];
		$nombreAct =  $actividad[1];
		$fechaAct =  $actividad[2];
		$rutaAct =  $actividad[3];
		$textoAct =  $actividad[4];
	
	if(isset($_REQUEST['btnEditar'])){
		
		$idAct = $actividad[0];
		$nombreAct = $_REQUEST['nombreAct'];
		$fechaAct = $_REQUEST['fechaAct'];
		$rutaAct = $_REQUEST['rutaAct'];
		$textoAct = $_REQUEST['textoAct'];
		
		editarActividad($idAct, $nombreAct, $fechaAct, $rutaAct, $textoAct);
		
		header('location: ./index.php?sec=actividades');
		
	}
}
	
	
?>
<div class='mainContent'>
		<ul>
			<li><h2>Editar actividad</h2></li>
			<li>
		<form method="post" action="">
			<table>
				<tr>
					<th>Nombre de actividad</th>
					<td><input type="text" name="nombreAct" value="<?php echo $nombreAct; ?>"/></td>
				</tr>
				<tr>
					<th>Fecha</th>
					<td><input type="text" name="fechaAct" value="<?php echo $fechaAct; ?>" /></td>
				</tr>
				<tr>
					<th>Ruta de la foto</th>
					<td><input type="text" name="rutaAct" value="<?php echo $rutaAct; ?>" /></td>
				</tr>
				<tr>
					<th colspan='2'>Descripcion</th>
				</tr>
				<tr>
					<td colspan='2'><textarea id='textoAct' rows='10' name='textoAct' 
						value='<?php echo $actividad[4]; ?>'><?php echo $textoAct; ?></textarea></td>
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
	<br />
<br />