<?php
switch ($seccion) {
	case 'actividades' :
		include './seccion/actividades.php';
		break;
	case 'contacto' :
		include './seccion/contacto.php';
		break;
	case 'horarios' :
		include './seccion/horarios.php';
		break;
	case 'inscripcion' :
		include './seccion/inscripcion.php';
		break;
	case 'patrocinanos' :
		include './seccion/patrocinanos.php';
		break;
	default :
		include './seccion/presentacion.php';
		break;
}
?>