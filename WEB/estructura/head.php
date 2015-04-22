<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="js/functions.js"></script>
<?php 
	switch ($seccion) {
		case 'actividades':
			echo "<title>CEIIE - Actividades</title>";
			break;	
		case 'contacto':
			echo "<title>CEIIE - Contacto</title>";
			break;	
		case 'horarios':
			echo "<title>CEIIE - Horarios</title>";
			break;	
		case 'inscripcion':
			echo "<title>CEIIE - Inscripci&oacute;n</title>";
			break;		
		case 'patrocinanos':
			echo "<title>CEIIE - Patrocinanos</title>";
			break;
		default:
			echo "<title>CEIIE - Presentaci&oacute;n</title>";
			break;
	}	
?>
<link href='http://fonts.googleapis.com/css?family=Gentium+Basic' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>