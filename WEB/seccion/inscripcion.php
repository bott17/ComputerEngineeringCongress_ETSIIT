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
	<form id="formulario" method='post' action='' enctype='x-www-form-urlencoded'>
		<table>
			<tr>
				<td colspan='2'><img class='shadow' src='seccion/imagenes/inscripcion/JoinToday.png' /></td>
			</tr>
			<tr>
				<th>Tu nombre: </th>
				<td>
				<input autofocus type='text' value='' placeholder='Pedro Perez Perez' name='name'>
				</td>
			</tr>
			<tr>
				<th>Email de contacto: </th>
				<td>
				<input type='email' value='' placeholder='direccion@correo.es' name='email'/>
				</td>
			</tr>
			<tr>
				<th>Telefono de contacto: </th>
				<td>
				<input type='number' value='' placeholder='619 555 111' name='phone'/>
				</td>
			</tr>
			<tr>
				<th>Modalidad de inscripción: </th>
				<td>
				<select name='opcion'>
					<option value='1'>1 Día</option>
					<option value='2' selected>2 Dias</option>
				</select></td>
			</tr>
			<tr>
				<th>Recibir noticas del evento en tu email de contacto</th>
				<td>
				<input type='checkbox' checked />
				</td>
			</tr>
			<tr>
				<td colspan='2'>
				<input id='botonForm' type='submit' value='Inscribir' />
				</td>
			</tr>
		</table>
	</form>
</div>
<!-- para las cajas con enlaces -->
<?php include 'estructura/boxes.php'; ?>

<br class='clearfloat' />
