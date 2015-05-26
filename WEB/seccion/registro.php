<div class='mainContent'>
	<h2>Registro en el congreso</h2>
	<form method="post">
		<table>
			<tr>
				<th>Nombre</th>
				<td><input type="text" name="nombre"/></td>
			</tr>
			<tr>
				<th>Apellidos</th>
				<td><input type="text" name="apellidos" /></td>
			</tr>
			<tr>
				<th>Centro de trabajo</th>
				<td><input type="text" name="centro"/></td>
			</tr>
			<tr>
				<th>Telefono</th>
				<td><input type="number" name="telefono" /></td>
			</tr>
			<tr>
				<th>Correo</th>
				<td><input type="text" name="correo"/></td>
			</tr>
			<tr>
				<th>Contraseña</th>
				<td><input type="text" name="pass1" /></td>
			</tr>
			<tr>
				<th>Repite contraseña</th>
				<td><input type="text" name="pass2" /></td>
			</tr>
			<tr>
				<th>Elige cuota</th>
				<td><select name="cuota">
					<?php 
						$cuota = searchQuotaALL();
						while($fila = mysql_fetch_assoc($cuota)){
							echo '<option>'.$fila['denominacion'].'</option>';
						}
					?>
				</select></td>
			</tr>
			<tr>
				<th>hay que poner mas cosas</th>
				<td><input type="text" name="pass2" /></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" value="Registrar" />
				</td>
			</tr>
		</table>
	</form>
	
</div>
<!-- para las cajas con enlaces -->
<?php include 'estructura/boxes.php'; ?>

<br class='clearfloat' />