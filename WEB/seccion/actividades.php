<?php 

	$arrayActividades = searchActALL();
	
	$listaActividades[] = 0;
	$tipoUsuario=0;
	
	if (isset($_SESSION['usuario'])) {
		$tipoUsuario = $_SESSION['tipo'];
		
	}
		

?>
<div class='mainContent'>
	<h2 id='tituloContent'>Actividades y Talleres</h2>
	
	
	<?php
	$arrayTemporal = $arrayActividades;
		for($contador = 0; $contador < mysql_num_rows($arrayTemporal); $contador++) {
			$actividad = mysql_fetch_assoc($arrayTemporal); 
			echo 
				"<div id=" .$actividad['codigo']. " class='actividad'>
				<a href='index.php?sec=editactividad&act=" .$contador. "' class='editar'>Editar</a>
					<h2>" .$actividad['denominacion']. " ".$actividad['FechaHora']. "</h2> 
					
					<div id='secIzq'><img src=" .$actividad['foto']. " alt=''/>
					</div>
					<div id='secCen'>
						<p>
							" .$actividad['descripcion']. "
						</p>
					</div>
					<div id='secDer'>
						<a href=actividad.php?sec=actividades&act=" .$actividad['codigo']. ">Leer M&aacute;s</a></td>
					</div>
				</div>";
			
				$temp = array($actividad['codigo'], $actividad['denominacion'], $actividad['FechaHora'],
					$actividad['foto'], $actividad['descripcion']);
				array_push($listaActividades, $temp);
		}

		$_SESSION['listaactividades'] = $listaActividades;
		
		if($tipoUsuario != 1){
			 echo '<style type="text/css">
		        .editar{
		            display: none;
		        }
        </style>';
		}
	?>
	
	<!--<?php $actividad = mysql_fetch_assoc($arrayActividades); ?>
	<div id='<?php echo $actividad['codigo'] ?>' class='actividad'>
		<h2><?php echo $actividad['denominacion']." (".$actividad['FechaHora'].")"; ?></h2>
		<div id='secIzq'><img src='<?php echo $actividad['foto']?>' alt=''/>
		</div>
		<div id='secCen'>
			<p>
				<?php echo $actividad['descripcion']; ?>
			</p>
		</div>
		<div id='secDer'>
			<a href="actividad.php?sec=actividades&act=<?php echo $actividad['codigo']; ?>">Leer M&aacute;s</a>
		</div>
	</div>
	<?php $actividad = mysql_fetch_assoc($arrayActividades); ?>
	<div id='<?php echo $actividad['codigo'] ?>' class='actividad'>
		<h2><?php echo $actividad['denominacion']." (".$actividad['FechaHora'].")"; ?></h2>
		<div id='secIzq'><img src='<?php echo $actividad['foto']?>' alt=''/>
		</div>
		<div id='secCen'>
			<p>
				<?php echo $actividad['descripcion']; ?>
			</p>
		</div>
		<div id='secDer'>
			<a href="actividad.php?sec=actividades&act=<?php echo $actividad['codigo']; ?>">Leer M&aacute;s</a>
		</div>
	</div>
	<?php $actividad = mysql_fetch_assoc($arrayActividades); ?>
	<div id='<?php echo $actividad['codigo'] ?>' class='actividad'>
		<h2><?php echo $actividad['denominacion']." (".$actividad['FechaHora'].")"; ?></h2>
		<div id='secIzq'><img src='<?php echo $actividad['foto']?>' alt=''/>
		</div>
		<div id='secCen'>
			<p>
				<?php echo $actividad['descripcion']; ?>
			</p>
		</div>
		<div id='secDer'>
			<a href="actividad.php?sec=actividades&act=<?php echo $actividad['codigo']; ?>">Leer M&aacute;s</a>
		</div>
	</div>
	-->
</div>
<!-- para las cajas con enlaces -->
 <?php include './estructura/boxes.php';?>
 <br class='clearfloat' />