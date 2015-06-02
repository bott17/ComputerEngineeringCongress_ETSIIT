<div class='mainContent'>
	<?php 
	
		include 'funcionesPHP/mailer.php';
	?>
	<h2>Recupera tu cuenta</h2>
	<form method="post" action="./index.php?sec=olvidos">
		<table>
			<tr>
				<th>Email de tu cuenta</th>
				<td><input id='email' type="text" name="email" /></td>
			</tr>
			<tr>
				<td colspan="2"><input id='botonForm' type='submit' name='recover' value='Recuperar contraseña' /></td>
			</tr>
			<tr>
				<td colspan="2"><a href="">Restablecer contraseña</a></td>
			</tr>
		</table>		
	</form>
	
</div>
<!-- para las cajas con enlaces -->
<?php include 'estructura/boxes.php'; ?>

<br class='clearfloat' />