<div class="sidebar1">
<h2>Enlaces de inter&eacute;s</h2>
<ul>
<?php
switch ($ponencia) {
	case 'magiles':
		echo "
    		<li><a href='sesion.php?sec=$seccion&pon=ifml'>IFML</a></li>
			<li><a href='sesion.php?sec=$seccion&pon=prince2'>Prince2</a></li>";	
		break;
	case 'ifml':
		echo "
    		<li><a href='sesion.php?sec=$seccion&pon=magiles'>Metodologias agiles</a></li>
			<li><a href='sesion.php?sec=$seccion&pon=prince2'>Prince2</a></li>";	
		break;
	case 'prince2':
		echo "
    		<li><a href='sesion.php?sec=$seccion&pon=magiles'>Metodologias agiles</a></li>
			<li><a href='sesion.php?sec=$seccion&pon=ifml'>IFML</a></li>";	
		break;
	case 'visrea':
		echo "
    		<li><a href='sesion.php?sec=$seccion&pon=digi3d'>Digitalizacion 3D</a></li>
			<li><a href='sesion.php?sec=$seccion&pon=reaumen'>Realidad aumentada</a></li>";	
		break;
	case 'digi3d':
		echo "
    		<li><a href='sesion.php?sec=$seccion&pon=visrea'>Visualizacion y realismo</a></li>
			<li><a href='sesion.php?sec=$seccion&pon=reaumen'>Realidad aumentada</a></li>";	
		break;
	case 'reaumen':
		echo "
			<li><a href='sesion.php?sec=$seccion&pon=visrea'>Visualizacion y realismo</a></li>
    		<li><a href='sesion.php?sec=$seccion&pon=digi3d'>Digitalizacion 3D</a></li>";	
		break;
	case 'bdmdim':
		echo "
    		<li><a href='sesion.php?sec=$seccion&pon=bdoo'>B.D. orientadas a objetos</a></li>
			<li><a href='sesion.php?sec=$seccion&pon=bddis'>B.D. distribuidas</a></li>";	
		break;
	case 'bdoo':
		echo "
    		<li><a href='sesion.php?sec=$seccion&pon=bdmdim'>B.D. multidimensionales</a></li>
			<li><a href='sesion.php?sec=$seccion&pon=bddis'>B.D. distribuidas</a></li>";
		break;
	case 'bddis':
		echo "
			<li><a href='sesion.php?sec=$seccion&pon=bdmdim'>B.D. multidimensionales</a></li>
			<li><a href='sesion.php?sec=$seccion&pon=bdoo'>B.D. orientadas a objetos</a></li>";	
		break;
	case 'prolen':
		echo "
    		<li><a href='sesion.php?sec=$seccion&pon=traduc'>Traductores</a></li>
			<li><a href='sesion.php?sec=$seccion&pon=prohab'>Procesamiento del habla</a></li>";	
		break;
	case 'traduc':
		echo "
    		<li><a href='sesion.php?sec=$seccion&pon=prolen'>Procesadores de lenguaje</a></li>
			<li><a href='sesion.php?sec=$seccion&pon=prohab'>Prosecamiento del habla</a></li>";
		break;
	case 'prohab':
		echo "
			<li><a href='sesion.php?sec=$seccion&pon=prolen'>Procesadores de lenguaje</a></li>
			<li><a href='sesion.php?sec=$seccion&pon=traduc'>Traductores</a></li>";	
		break;	
	case 'swind':
		echo "
    		<li><a href='sesion.php?sec=$seccion&pon=slinx'>Sistemas Unix/Linux</a></li>
			<li><a href='sesion.php?sec=$seccion&pon=siosmac'>Sistemas iOS/Mac</a></li>";	
		break;
	case 'slinx':
		echo "
    		<li><a href='sesion.php?sec=$seccion&pon=swind'>Sistemas Windows</a></li>
			<li><a href='sesion.php?sec=$seccion&pon=siosmac'>Sistemas iOS/Mac</a></li>";
		break;
	case 'siosmac':
		echo "
			<li><a href='sesion.php?sec=$seccion&pon=swind'>Sistemas Windows</a></li>
			<li><a href='sesion.php?sec=$seccion&pon=slinx'>Sistemas Unix/Linux</a></li>";	
		break;
	case 'propar':
		echo "
    		<li><a href='sesion.php?sec=$seccion&pon=sisdis'>Sistemas distribuidos</a></li>
			<li><a href='sesion.php?sec=$seccion&pon=sistr'>Sistemas en tiempo real</a></li>";	
		break;
	case 'sisdis':
		echo "
    		<li><a href='sesion.php?sec=$seccion&pon=propar'>Programacion paralela</a></li>
			<li><a href='sesion.php?sec=$seccion&pon=sistr'>Sistemas en tiempo real</a></li>";
		break;
	case 'sistr':
		echo "
			<li><a href='sesion.php?sec=$seccion&pon=propar'>Programacion paralela</a></li>
			<li><a href='sesion.php?sec=$seccion&pon=sisdis'>Sistemas distribuidos</a></li>";	
		break;
	case 'inthap':
		echo "
    		<li><a href='sesion.php?sec=$seccion&pon=wereab'>Wereables</a></li>
			<li><a href='sesion.php?sec=$seccion&pon=reavir'>Realidad virtual</a></li>";	
		break;
	case 'wereab':
		echo "
    		<li><a href='sesion.php?sec=$seccion&pon=inthap'>Interaccion haptica</a></li>
			<li><a href='sesion.php?sec=$seccion&pon=reavir'>Realidad virtual</a></li>";
		break;
	case 'reavir':
		echo "
			<li><a href='sesion.php?sec=$seccion&pon=inthap'>Interaccion haptica</a></li>
			<li><a href='sesion.php?sec=$seccion&pon=wereab'>Wereables</a></li>";	
		break;
	default:
		break;
}
?>
</ul>
</div>