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

function searchQuota($nom){
	$link = connect();	
	$query = 'select idCuota from cuota where denominacion = "'.$nom.'"';
	$result = mysql_query($query, $link);	
	$fila = mysql_fetch_assoc($result);
	$link = null;
	return $fila['idCuota'];	
}

function insertUsuario($nom,$ape,$cen,$tel,$cor,$pasF,$cuo){
	$link = connect();	
	$pasV = md5($pasF);
	$id = searchQuota($cuo);
	$query = 'insert into usuario 
				(`Nombre`, `Apellidos`, `Centro de trabajo`, `Telefono`, `Correo`, `Password`, `idCuota`)
				values ("'.$nom.'","'.$ape.'","'.$cen.'",'.$tel.',"'.$cor.'","'.$pasV.'",'.$id.')';
	mysql_query($query, $link);
	
	echo $cor;
	
	loginUsuario($cor, $pasF);
		
	$link = null;
}

function loginUsuario($cor,$pas) {
 	$link = connect();
    $query='select * from usuario where correo="'.$cor.'"';
    $result = mysql_query($query,$link);    
    $user = mysql_fetch_assoc($result);
	$hash = md5($pas); //encriptamos la contraseña 
    if($user){
    	if($user['Password']==$hash){
    		@session_start();
			$_SESSION['usuario']=$user['Nombre'];
			header('location: ./index.php');
    	}
		else{
			//poner mensajes que salgan debajo del cuadro del login	
			return 'Contraseña erronea';		
		}
	}
	else{
		return 'Usuario no encontrado';
	}	
	$link = null;
 
}

?>