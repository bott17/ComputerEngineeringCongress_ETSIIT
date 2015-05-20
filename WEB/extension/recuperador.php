<?php

function conect(){
	$link;
	//conexion con la base de datos
	if(!$link = mysql_connect("localhost","root","root"))
		echo 'Error en la conexi&oacute;n.';	
	else{
		//eleccion de la base de datos
		if(!mysql_select_db("congresoETSIIT",$link))
			echo 'Error al seleccionar la base de datos';		
	}
	return $link;	
}

function searchAct($id){
		
	$link = conect();
	
	$query = "select * from actividad where idActividad=".$id;
	$result = mysql_query($query,$link);
	
	$link = null;
	
	return mysql_fetch_assoc($result);
	
}

?>