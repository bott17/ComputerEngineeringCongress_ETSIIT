<?php $seccion=$_REQUEST["seccion"]; ?>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="js/functions.js"></script>
<?php 
	//para poner en el title del head
	switch ($seccion) {
		case 'actividades':
			echo "<title>Actividades</title>";
			break;	
		case 'contacto':
			echo "<title>Contacto</title>";
			break;	
		case 'horarios':
			echo "<title>Horarios</title>";
			break;	
		case 'inscripcion':
			echo "<title>Inscripci&oacute;n</title>";
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
<?php
//para el navegador
switch ($seccion) {
		case 'actividades':
			break;	
		case 'contacto':
			break;	
		case 'horarios':
			break;	
		case 'inscripcion':
			break;		
		case 'patrocinanos':
			break;
		default:
			echo "<body>
					<div class='container'>
					    <header>
					    	<div id='navheader'>
					    		<div id='izq'><h2><a href='./index.html'>Congreso de Estudiantes de Ingenier&iacute;a Inform&aacute;tica</a></h2></div>
					    		<div id='der'><p>Zona de Usuario</br><a href='#'>(Login)</a></p></div>    	
					    	</div>
					        <div id='navcontainer'>
					            <ul id='navlist' class='nav'>
					            	<li id='active'><a href='index.html'>Presentaci&oacute;n</a></li>
					            	<li> <ul id='subnavlist'>
							                <li><a href='index.php?seccion=horarios'>Horarios</a></li>
							                <li><a href='index.php?seccion=actividades'>Actividades y Talleres</a></li>
							                <li><a href='index.php?seccion=inscripcion'>Inscr&iacute;bete</a></li>
							                <li><a href='index.php?seccion=patrocinanos'>Patroc&iacute;nanos</a></li>
							                <li><a href='index.php?seccion=contacto'>Contacto</a></li>
							        </ul></li>
					            </ul>
					        </div>
					        <br class='clearfloat' />
					    </header>
					    <section>
					    	<!-- begin .slider -->
							<div class='slider'> <!-- Aqui va menu desplazable (poner lider dentro de class -->
					            <div class='flexslider'> <!-- aqui flexslider -->
					                <ul class=''> <!-- aqui slides -->
					                    <li><img src='images/logo_ugr.gif' alt=''></li>
					                </ul>
					            </div>
					        </div>";		
					        break;
	}