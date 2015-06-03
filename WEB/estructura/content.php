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
	case 'login':
		include './seccion/login.php';
		break;
	case 'registro':
		include './seccion/registro.php';
		break;
	case 'recordar':
		include './seccion/recordar.php';
		break;
	case 'miperfil':
		include './seccion/miperfil.php';
		break;
	case 'logout':
		include './seccion/logout.php';
		break;
	case 'olvidos':
		include './seccion/olvidos.php';
		break;
	case 'admincongresistas':
		include './seccion/congresistas.php';
		break;
	case 'editactividad':
		include './seccion/editaractividad.php';
		break;
	case 'editcuota':
		include './seccion/editcuota.php';
		break;
	default :
		include './seccion/presentacion.php';
		break;
}
?>