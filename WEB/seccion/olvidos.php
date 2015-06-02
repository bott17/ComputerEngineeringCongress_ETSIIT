<div class='mainContent'>
	<script>
		var emailCorrecto = 0;
		
		function marcar(){
			return emailCorrecto;
		}
	</script>
	<?php 
	
		include 'funcionesPHP/mailer.php';
	?>
	<h2>Recupera tu cuenta</h2>
	<form method="post" action="./index.php?sec=olvidos">
		<table>
			<tr>
				<th>Email de tu cuenta</th>
				<td><input id='email' type='email' value='' placeholder='direccion@correo.es' name='email'/></td>
			</tr>
			<tr>
				<td colspan="2"><input id='botonForm' type='submit' name='recover' value='Recuperar contraseña' onclick="emailCorrecto=recoverCheck();"/></td>
			</tr>
			<tr>
				<td colspan="2"><input id='botonForm' type='submit' name='restablecer' value='Restablecer contraseña' onclick="recoverCheck()"/></td>
			</tr>
		</table>		
	</form>
	
</div>
<!-- para las cajas con enlaces -->
<?php include 'estructura/boxes.php'; ?>

<br class='clearfloat' />