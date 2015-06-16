<?php
/*
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
 * */

$filename = "./info/sesiones/sesiones.txt";
$titulo = "Sin sesion";
$detalles = "Sin sesion";
$descripcion = "Sin sesion";

$array = explode("\n", file_get_contents($filename));
// Lectura del contenido del array
for($contador=0; $contador < count($array); $contador =$contador + 4){
	
	// Recuperacion del identificardor, separando lo que hay antes y despues (que seran saltos de linea)
	$identificador = split("/", $array[$contador]);
	
	if(strcmp($identificador[1],$pon) ==0){
		$titulo = $array[$contador+1];
		$detalles = $array[$contador+2];
		$descripcion = $array[$contador+3];
		
	}
}

?>

<div class='mainContent'>
	<h2 id='tituloContent'><?php echo $titulo; ?></h2>
	<h1 id'tituloContent2'><?php echo $detalles; ?></h1>
	<p>
		<br />
		<?php echo $descripcion; ?>
	</p>
</div>
<br class='clearfloat' />