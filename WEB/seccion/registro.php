<?php 

	if(empty($usuario)){
		//header('location: http://www.marca.com');
	}

	echo $usuario;

	$nom = "";
	$ape = "";
	$cen = "";
	$tel = "";
	$cor = "";
	$pas1 = "";
	$pas2 = "";	
	$cuo = "";
	
	if(isset($_REQUEST['bRegistrar'])){
		$nom = $_REQUEST['nombre'];
		$ape = $_REQUEST['apellidos'];
		$cen = $_REQUEST['centro'];
		$tel = $_REQUEST['telefono'];
		$pas = $_REQUEST['pass1'];
		$cor = $_REQUEST['correo'];
		$cuo = $_REQUEST['cuota'];
		
		insertUsuario($nom,$ape,$cen,$tel,$cor,$pas,$cuo);
	}

?>
<div class='mainContent'>
	<h2>Registro en el congreso</h2>
	<form method="post" action="" onsubmit="return validaRegistro()">
		<table>
			<tr>
				<th>Nombre</th>
				<td><input type="text" name="nombre" id="nombre" value="<?php echo $nom; ?>"/></td>
			</tr>
			<tr>
				<th>Apellidos</th>
				<td><input type="text" name="apellidos" id="apellidos" value="<?php echo $ape; ?>"/></td>
			</tr>
			<tr>
				<th>Centro de trabajo</th>
				<td><input type="text" name="centro" id="centro" value="<?php echo $cen; ?>"/></td>
			</tr>
			<tr>
				<th>Telefono</th>
				<td><input type="number" name="telefono" id="telefono" value="<?php echo $tel; ?>"/></td>
			</tr>
			<tr>
				<th>Correo</th>
				<td><input type="email" name="correo" id="correo" value="<?php echo $cor; ?>"/></td>
			</tr>
			<tr>
				<th>Contraseña</th>
				<td><input type="password" name="pass1" id="pass1" /></td>
			</tr>
			<tr>
				<th>Repite contraseña</th>
				<td><input type="password" name="pass2" id="pass2" /></td>
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
					<input type="submit" value="Registrar" name="bRegistrar"/>
				</td>
			</tr>
		</table>
	</form>
	
</div>
<!-- para las cajas con enlaces -->
<?php include 'estructura/boxes.php'; ?>

<br class='clearfloat' />