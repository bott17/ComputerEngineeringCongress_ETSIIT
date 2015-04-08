<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="js/functions.js"></script>
<!--<title>CEIIE - Presentaci&oacute;n</title>-->
<?php 
	$seccion=$_REQUEST["seccion"];
	
	switch ($seccion) {
		case 'noseke':
			echo "<title>Noseke</title>";
			break;
		
		default:
			echo "<title>CEIIE - Presentaci&oacute;n</title>";
			break;
	}
	
?>
<link href='http://fonts.googleapis.com/css?family=Gentium+Basic' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>