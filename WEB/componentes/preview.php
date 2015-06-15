<?php
	
	$titulo = $_POST["titulo"];
	$fecha = $_POST["fecha"];
	$url = $_POST["url"];
	$descripcion = $_POST["descripcion"];


?>

<div class="mainContent.preview">
		<h2 id='tituloActividad'><?php echo $titulo ?></h2>
		<h1 id'fechaActividad'><?php echo $fecha ?></h1>
		<img id="imgActividad" src=<?php echo  "$url" ?>/>
		<p>
		<br />
		<span id="descripcionActividad"> <?php echo $descripcion ?></span>
		<br /><br/>
		<b>Precio: Incluido</b>;
	</p>
</div>