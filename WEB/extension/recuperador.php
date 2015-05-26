<?php

function connect(){
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

function searchActALL(){
	$link = connect();
	
	$query = "select * from actividad";
	$result = mysql_query($query, $link);
	
	$link = null;
	return $result;
		
}

function searchAct($cod){
		
	$link = connect();
	
	$query = 'select * from actividad where codigo = "'.$cod.'"';
	$result = mysql_query($query,$link);
	
	$link = null;
	
	return mysql_fetch_assoc($result);
	
}

function searchActNOT($cod){
	
	$link = connect();
	
	$query = 'select * from actividad where codigo not in ("'.$cod.'")';
	$result = mysql_query($query,$link);
	
	$link = null;
	
	return $result;
		
}

function searchQuotaALL(){
	$link = connect();
	
	$query = "select * from cuota";
	$result = mysql_query($query, $link);
	
	$link = null;
	return $result;	
}

?>