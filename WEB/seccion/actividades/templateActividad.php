<?php
$filename = "./info/actividades/actividades.txt";
$titulo = "Sin actividad";
$fecha = "Sin actividad";
$descripcion = "Sin actividad";
$rutaImg=""; 

$array = explode("\n", file_get_contents($filename));
// Lectura del contenido del array
for($contador=0; $contador < count($array); $contador =$contador + 5){
	
	// Recuperacion del identificardor, separando lo que hay antes y despues (que seran saltos de linea)
	$identificador = split("/", $array[$contador]);
	
	if(strcmp($identificador[1],$act) ==0){
		$titulo = $array[$contador+1];
		$fecha = $array[$contador+2];
		$descripcion = $array[$contador+3];
		$rutaImg = $array[$contador+4]; 
		
	}
}

?>

<div class='mainContent'>
	<h2 id='tituloContent'><?php echo $titulo; ?></h2>
	<h1 id'tituloContent2'><?php echo $fecha; ?></h1>
	<img src=<?php echo "'".$rutaImg."'" ?> />
	<p>
		<br />
		<?php echo $descripcion?>
	</p>
</div>
<br class='clearfloat' />