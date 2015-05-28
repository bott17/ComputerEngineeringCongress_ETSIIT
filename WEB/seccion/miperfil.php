<?php 

	$fila = searchUsusario($_REQUEST['user']);

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
	</table>
</div>
<!-- para las cajas con enlaces -->
<?php include 'estructura/boxes.php'; ?>

<br class='clearfloat' />