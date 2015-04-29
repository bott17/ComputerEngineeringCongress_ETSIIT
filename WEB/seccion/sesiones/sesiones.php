<?php
$filename = "";
switch ($pon) {
	case 'magiles':
		$filename='./info/sesiones/sesMagiles.txt';
		break;
	case 'prince2':
		$filename='./info/sesiones/sesPrince2.txt';
		break;
	case 'ifml':
		$filename='./info/sesiones/sesIFML.txt';
		break;
	default:
		$filename='./info/sesiones/sesDef.txt';
		break;
}

$array = explode("\n", file_get_contents($filename));

?>

<div class='mainContent'>
	<h2 id='tituloContent'><?php echo $array[0]; ?></h2>
	<h1 id'tituloContent2'><?php echo $array[1]; ?></h1>
	<p>
		<br />
		<?php echo $array[2]; ?>
	</p>
</div>
<br class='clearfloat' />