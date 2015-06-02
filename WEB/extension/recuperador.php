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

function searchQuota2($id){
	$link = connect();	
	$query = 'select * from cuota where idCuota = '.$id;
	$result = mysql_query($query,$link);	
	$link = null;
	return mysql_fetch_assoc($result);	
}


function insertUsuario($nom,$ape,$cen,$tel,$cor,$pasF,$cuo,$imp){
	$link = connect();	
	$pasV = md5($pasF);
	$id = searchQuota($cuo);
	$query = 'insert into usuario 
				(`Nombre`, `Apellidos`, `Centro de trabajo`, `Telefono`, `Correo`, `Password`, `idCuota`,`importe`)
				values ("'.$nom.'","'.$ape.'","'.$cen.'",'.$tel.',"'.$cor.'","'.$pasV.'",'.$id.','.$imp.')';
	mysql_query($query, $link);
	
	switch ($id) {
		case 2:
			insertActividadUsuario($nom, 3);
			break;
		
		case 3:
			insertActividadUsuario($nom, 1);
			insertActividadUsuario($nom, 2);
			insertActividadUsuario($nom, 3);
			break;
	}
	
	loginUsuario($cor, $pasF);
		
	$link = null;
}

function insertActividadUsuario($nom,$act){
	$user = searchUsusario($nom);
	$link = connect();	
	if(!empty($act)){
		$query = 'INSERT INTO `UsuarioActividad`(`idActividad`, `idUsuario`) VALUES ('.$act.','.$user['idUsuario'].')';
		mysql_query($query, $link);
	}		
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

function searchUsusario($nom){
	$link = connect();	
	$query = 'select * from usuario where nombre = "'.$nom.'"';
	$result = mysql_query($query, $link);	
	$link = null;
	return mysql_fetch_assoc($result);		
}

function searchActividades(){
	$link = connect();	
	$query = 'select * from actividad';
	$result = mysql_query($query,$link);	
	$link = null;
	return $result;	
}

function getPassword($email){
	$link = connect();	
	$query = 'select Password from usuario where correo = "' .$email. '"';
	$result = mysql_query($query, $link);
	$response = mysql_fetch_assoc($result);
	$response = get_web_page("http://md5.gromweb.com/query/" . $response['Password']);	
	$link = null;
	return $response;	
}

function changePassword($email, $password){
	$link = connect();	
	$pasV = md5($password);
	$query = 'update usuario set Password = "' .$pasV . '" where Correo = "' .$email. '"';
	mysql_query($query, $link);
		
	$link = null;
}

function checkUser($email){
	$link = connect();	
	$query = 'select idUsuario from usuario where correo = "' .$email. '"';
	$result = mysql_query($query, $link);
	$result = mysql_fetch_assoc($result);
	
	if($result != ""){
		return true;
	}
	else{
		return false;
	}
}



function searchActividadesUsuario($id){
	$link = connect();	
	$query = 'SELECT * FROM `UsuarioActividad` WHERE idUsuario = '.$id;
	$result = mysql_query($query,$link);	
	$link = null;
	return $result;	
}

function searchActividad($id){
	$link = connect();	
	$query = 'SELECT * FROM `actividad` WHERE idActividad = '.$id;
	$result = mysql_query($query,$link);	
	$link = null;
	return mysql_fetch_assoc($result);	
}

function get_web_page($url) {
    $options = array(
        CURLOPT_RETURNTRANSFER => true,   // return web page
        CURLOPT_HEADER         => false,  // don't return headers
        CURLOPT_FOLLOWLOCATION => true,   // follow redirects
        CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
        CURLOPT_ENCODING       => "",     // handle compressed
        CURLOPT_USERAGENT      => "test", // name of client
        CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,    // time-out on connect
        CURLOPT_TIMEOUT        => 120,    // time-out on response
    ); 

    $ch = curl_init($url);
    curl_setopt_array($ch, $options);

    $content  = curl_exec($ch);

    curl_close($ch);

    return $content;
 }

?>