<?php
switch ($ponencia) {
	case 'magiles':
		$pon = "magiles";
		include './seccion/sesiones/sesiones.php';
		break;
	case 'ifml':
		$pon = "ifml";
		include './seccion/sesiones/sesiones.php';
		break;
	case 'prince2':
		$pon = "prince2";
		include './seccion/sesiones/sesiones.php';
		break;
	default:		
		include './seccion/sesiones/sesiones.php';
		break;		
}
?>