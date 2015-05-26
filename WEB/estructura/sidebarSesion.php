<?php

$url="sesion.php?sec=horarios";
$link1 = $url;
$link2 = $url;
$desc1 = "";
$desc2 = "";
$dia = "";

switch ($ponencia) {
	case 'magiles':
		$link1 .= "&pon=ifml";
		$link2 .= "&pon=prince2";
		$desc1 = "IFML";
		$desc2 = "Prince2";
		$dia = "#dia1";
		break;
	case 'ifml':
		$link1 .= "&pon=magiles";
		$link2 .= "&pon=prince2";
		$desc1 = "Metodologias agiles";
		$desc2 = "Prince2";
		$dia = "#dia1";
		break;
	case 'prince2':
		$link1 .= "&pon=magiles";
		$link2 .= "&pon=ifml";
		$desc1 = "Metodologias agiles";
		$desc2 = "IFML";
		$dia = "#dia1";
		break;
	case 'visrea':
		$link1 .= "&pon=digi3d";
		$link2 .= "&pon=reaumen";
		$desc1 = "Digitalizacion 3D";
		$desc2 = "Realidad aumentada";
		$dia = "#dia1";
		break;
	case 'digi3d':
		$link1 .= "&pon=visrea";
		$link2 .= "&pon=reaumen";
		$desc1 = "Visualizacion y realismo";
		$desc2 = "Realidad aumentada";
		$dia = "#dia1";
		break;
	case 'reaumen':
		$link1 .= "&pon=visrea";
		$link2 .= "&pon=digi3d";
		$desc1 = "Visualizacion y realismo";
		$desc2 = "Digitalizacion 3D";
		$dia = "#dia1";
		break;
	case 'bdmdim':
		break;
	case 'bdoo':
		break;
	case 'bddis':
		break;
	case 'prolen':
		break;
	case 'traduc':
		break;
	case 'prohab':
		break;	
	case 'swind':
		break;
	case 'slinx':
		break;
	case 'siosmac':
		break;
	case 'propar':
		break;
	case 'sisdis':
		break;
	case 'sistr':
		break;
	case 'inthap':
		break;
	case 'wereab':
		break;
	case 'reavir':
		break;
	default:
		break;
}
?>
<div class="sidebar1">
	<h2>Enlaces de inter&eacute;s</h2>
	<ul>
		<li>
			<a href=<?php echo $link1; ?>><?php echo $desc1; ?></a>
		</li>
		<li>
			<a href=<?php echo $link2; ?>><?php echo $desc2; ?></a>
		</li>	
		<li>
			<a href="index.php?sec=horarios<?php echo $dia; ?>" >Atras</a>
		</li>
	</ul>

</div>