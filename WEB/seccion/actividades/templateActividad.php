<?php

include 'extension/recuperador.php';

$id = 0;

switch ($act) {
	case 'actAlh':
		$id = 1;
		break;
	case 'actSierra':
		$id = 2;
		break;
}

$datos = searchAct($id);

?>

<div class='mainContent'>
	<h2 id='tituloContent'><?php echo $datos['denominacion']; ?></h2>
	<h1 id'tituloContent2'><?php echo $datos['FechaHora']; ?></h1>
	<img src=<?php echo $datos['foto']; ?> />
	<p>
		<br />
		<?php echo $datos['descripcion']; ?>
		<br /><br/>
		<b>Precio: </b><?php echo $datos['importe'];?>&euro;
	</p>
</div>
<br class='clearfloat' />