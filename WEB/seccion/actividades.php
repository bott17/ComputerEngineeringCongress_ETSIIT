<?php 

	$arrayActividades = searchActALL();

?>
<div class='mainContent'>
	<h2 id='tituloContent'>Actividades y Talleres</h2>
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
</div>
<!-- para las cajas con enlaces -->
 <?php include './estructura/boxes.php';?>
 <br class='clearfloat' />