<?php 

	$fila = searchUsusario($_REQUEST['user']);
	$cuota = searchQuota2($fila['idCuota']);
	$arrayActividades = searchActividadesUsuario($fila['idUsuario']);

?>
<div class='mainContent'>
	<h2>Mi perfil</h2>	
	<table>
		<tr>
			<th>Nombre:</th>
			<td><?php echo $fila['Nombre']; ?></td>
		</tr>
		<tr>
			<th>Apellidos:</th>
			<td><?php echo $fila['Apellidos']; ?></td>
		</tr>
		<tr>
			<th>Centro de trabajo:</th>
			<td><?php echo $fila['Centro de trabajo']; ?></td>
		</tr>	
		<tr>
			<th>Telefono:</th>
			<td><?php echo $fila['Telefono']; ?></td>
		</tr>
		<tr>
			<th>Correo:</th>
			<td><?php echo $fila['Correo']; ?></td>
		</tr>
		<tr>
			<th>Cuota:</th>
			<td><?php echo $cuota['denominacion']; ?></td>
		</tr>
		<tr>
			<th>Actividades:</th>
			<td>
				<table>
					<?php 					
						while($row = mysql_fetch_assoc($arrayActividades)){
							$actividad = searchActividad($row['idActividad']);
							echo '<tr><td>'.$actividad['denominacion'].'</td></tr>';							
						}					
					?>				
				</table>
			</td>
		</tr>
		<tr>
			<th>Precio total:</th>
			<td><?php echo $fila['importe']; ?>&euro;</td>
		</tr>
	</table>
</div>
<!-- para las cajas con enlaces -->
<?php include 'estructura/boxes.php'; ?>

<br class='clearfloat' />