<?php
switch ($actividad) {
	case 'alh' :
		$act = 'actAlh';
		include './seccion/actividades/actividad.php';
		break;
	case 'sierra' :
		$act = 'actSierra';
		include './seccion/actividades/actividad.php';
		break;
}
?>