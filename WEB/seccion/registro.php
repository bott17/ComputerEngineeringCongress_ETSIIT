<?php 

	$arrayActividades = searchActALL();
	$listaActividades[] = 0;
	
	$arrayTemporal = $arrayActividades;
	for($contador = 0; $contador < mysql_num_rows($arrayTemporal); $contador++) {
		$actividad = mysql_fetch_assoc($arrayTemporal); 
				
			$temp = array($actividad['codigo'], $actividad['denominacion'], $actividad['FechaHora'],
				$actividad['foto'], $actividad['descripcion']);
			array_push($listaActividades, $temp);
	}

	$_SESSION['listaactividades'] = $listaActividades;

	$nom = "";
	$ape = "";
	$cen = "";
	$tel = "";
	$cor = "";
	$pas1 = "";
	$pas2 = "";	
	$cuo = "";
	$imp = "";
	
	$act1 = "";
	$act2 = "";
	$act3 = "";
	
	$hot = "";
	$ent = "";
	$sal = "";
	$tip = "";
	
	if(isset($_REQUEST['bRegistrar'])){
		$nom = $_REQUEST['nombre'];
		$ape = $_REQUEST['apellidos'];
		$cen = $_REQUEST['centro'];
		$tel = $_REQUEST['telefono'];
		$pas = $_REQUEST['pass1'];
		$cor = $_REQUEST['correo'];
		$cuo = $_REQUEST['cuota'];
		$imp = $_REQUEST['importe'];
		
		$act1 = $_REQUEST['1'];
		$act2 = $_REQUEST['2'];
		$act3 = $_REQUEST['3'];	
		
		$hot = $_REQUEST['hotel'];
		$ent = $_REQUEST['entrada'];
		$sal = $_REQUEST['salida'];
		$tip = $_REQUEST['tipoHab'];
		
		insertUsuario($nom,$ape,$cen,$tel,$cor,$pas,$cuo,$imp);
		
		insertActividadUsuario($nom, $act1);
		insertActividadUsuario($nom, $act2);
		insertActividadUsuario($nom, $act3);
		
		insertUsuarioHotel($hot,$nom,$ent,$sal,$tip);		
						
	}
?>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js">
    $().ready(function() {
        var $scrollingDiv = $("#hola");

        $(window).scroll(function(){            
            $scrollingDiv
                .stop()
                .animate({"marginTop": ($(window).scrollTop() )}, "slow" );         
        });
    });
</script>

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
				<td><select name="cuota" id="cuota" onchange="updateImporteRegistroCuota(); updateActividadesIncluidas()">
					<option value:"default">Escoje una</option>
					<?php 
						$cuota = searchQuotaALL();
						while($fila = mysql_fetch_assoc($cuota)){
							echo '<option>'.$fila['denominacion'].'</option>';
						}
					?>
				</select></td>
			</tr>
			
			<tr>
				<td>
					<div id="loadActivity"></div>
				</td>
			</tr>
			
			<tr>
				<th>Actividades extras</th>
				<td>
					<?php $actArray = searchActividades(); ?>
					<table>
						<tr>
							<?php $actividad = mysql_fetch_assoc($actArray); ?>
							<th ><?php echo $actividad['denominacion']; ?>(<?php echo $actividad['importe']; ?>&euro;)</th>
							<td><input type="checkbox" onclick="updateImporteRegistroActividad(this)" name="<?php echo $actividad['idActividad']; ?>" value="<?php echo $actividad['idActividad']; ?>" id="<?php echo $actividad['codigo']; ?>"/></td>
						</tr>
						<tr>
							<?php $actividad = mysql_fetch_assoc($actArray); ?>
							<th ><?php echo $actividad['denominacion']; ?>(<?php echo $actividad['importe']; ?>&euro;)</th>
							<td><input type="checkbox" onclick="updateImporteRegistroActividad(this)" name="<?php echo $actividad['idActividad']; ?>" value="<?php echo $actividad['idActividad']; ?>" id="<?php echo $actividad['codigo']; ?>"/></td>
						</tr>
						<tr>
							<?php $actividad = mysql_fetch_assoc($actArray); ?>
							<th ><?php echo $actividad['denominacion']; ?>(<?php echo $actividad['importe']; ?>&euro;)</th>
							<td><input type="checkbox" onclick="updateImporteRegistroActividad(this)" name="<?php echo $actividad['idActividad']; ?>" value="<?php echo $actividad['idActividad']; ?>" id="<?php echo $actividad['codigo']; ?>"/></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<th rowspan="2">Hotel</th>
				<td></td>				 
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td><a href="#" onclick="return popitup('hoteles.php')">Ver hoteles</a></td>
						</tr>
						<tr>
							<td colspan="2"><b>Hotel&emsp;</b><input type="text" name="hotel" id="hotel" readonly/>&emsp;</td>						
						</tr>
						<tr>
							<td colspan="2"><b>Precio&emsp;</b><input type="text" name="precioHotel" id="precioHotel" readonly/>&emsp;</td>						
						</tr>
						<tr>
							<td><b>Entrada&emsp;</b><input type="text" name="entrada" id="" /></td>
						</tr>
						<tr>
							<td><b>Salida&emsp;</b><input type="text" name="salida" id="" /></td>
						</tr>
						<tr>
							<td colspan="2"><b>Tipo de habitacion&emsp;</b>
								<select name="tipoHab" id="" />
									<option>Normal</option>
									<option>Doble</option>
								</select>								
							</td>
											
						</tr>
					</table>
				</td>
			</tr>				
			<tr>
				<th >Importe</th>
				<td><input type="text" name="importe" id="importe" value="5" readonly/>&euro;</td>
				<td><input type="text" name="importe" id="importeCuota" style="display: none"/>;</td>
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