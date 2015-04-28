<?php
$rutaImg="./seccion/imagenes/actividades/";
$filename;
switch ($act) {
	case 'actAlh':
		$filename = './info/actAlh.txt';
		$rutaImg.="alhambra/";
		break;
	case 'actSierra':
		$filename='./info/actSierra.txt';
		$rutaImg.="sierra_nevada/";
		break;
}

$array = explode("\n", file_get_contents($filename));

?>

<div class='mainContent'>
	<h2 id='tituloContent'><?php echo $array[0]; ?></h2>
	<h1 id'tituloContent2'><?php echo $array[1]; ?></h1>
	<img src=<?php $rutaImg.=$array[3]; echo $rutaImg ;?> />
	<p>
		<br />
		<?php echo $array[2]; ?>
	</p>
</div>
<br class='clearfloat' />