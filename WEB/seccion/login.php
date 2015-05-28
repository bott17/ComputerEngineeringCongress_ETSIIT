<?php 

	$cor = "";
	$mensaje = "";
	
	
	
	if(isset($_REQUEST['bLogin'])){
		$cor = $_REQUEST['correo'];
		$pas = $_REQUEST['pass'];
		
		$mensaje = loginUsuario($cor,$pas);
	}

?>
<div class='mainContent'>
	<h2>Login</h2>
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
		</table>		
	</form>
	
</div>
<!-- para las cajas con enlaces -->
<?php include 'estructura/boxes.php'; ?>

<br class='clearfloat' />