<?php

$n = "";

switch ($seccion) {
	case 'actividades' :
		$n = "CEIIE - Actividades";
		break;
	case 'contacto' :
		$n = "CEIIE - Contacto";
		break;
	case 'horarios' :
		$n = "CEIIE - Horarios";
		break;
	case 'inscripcion' :
		$n = "CEIIE - Inscripci&oacute;n";
		break;
	case 'patrocinanos' :
		$n = "CEIIE - Patrocinanos";
		break;
	case 'login':
		$n = "CEIIE - Login";
		break;
	case 'registro':
		$n = "CEIIE - Registro";
		break;
	case 'recordar':
		$n = "CEIIE - Recordar contraseña";
		break;
	default :
		$n = "CEIIE - Presentaci&oacute;n";
		break;
}
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="js/functions.js"></script>
<title><?php echo $n; ?></title>
<link href='http://fonts.googleapis.com/css?family=Gentium+Basic' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>