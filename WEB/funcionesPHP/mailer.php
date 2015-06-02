<?php
	
	function sendEmail($filtro){
	
		$email = $_POST['email'];
		
		if($email != ""){
	
			require("./lib/phpmailer/PHPMailerAutoload.php");
			require("./lib/phpmailer/class.smtp.php");
			
			$sender = "congresowebetsiit@gmail.com";
			$senderName = "Congreso ETSIIT";
			
			 if ($filtro == "recuperar") {
			 	$password = getPassword($email);
	        	$asunto = "Recuperar contraseña";
				$body = "Has solicitado recuperar tu password...";
				$body .= $password;
				$body2 = "Solicitud de recuperacion de password " + $email;
				
		    } else if ($filtro == "restablecer"){
		        $asunto = "Reestablecer contraseña";
				$body = "Has solicitado reestablecer tu password...";
				$body2 = "Solicitud de restablecimiento de password usuario " + $email;
		    }
			
			
			$mail = new PHPMailer();
			
			//Configuracion y validacion SMTP:
			$mail->IsSMTP();
			
			// Modo depuracion texto y codigo de errores
			$mail->SMTPDebug  = false; 
			
			$mail->SMTPAuth = true;
			$mail->Host = 'smtp.gmail.com'; // SMTP a utilizar. Por ej. smtp.elserver.com
			$mail->Username = 'congresowebetsiit@gmail.com'; // Correo completo a utilizar
			$mail->Password = 'web12345678'; // Contraseña
			$mail->SMTPSecure = "tls"; // sets the prefix to the servier
			$mail->Port = 587; // Puerto a utilizar
				 
			//Configuracion del email a enviar
			$mail->From = $sender; // Desde donde enviamos (Para mostrar)
			$mail->FromName = $senderName;
		
			$mail->AddAddress($email); // Esta es la dirección a donde enviamos
			$mail->IsHTML(true); // El correo se envía como HTML
			$mail->Subject = $asunto; // Este es el asunto del email.
			$mail->Body = $body; // Mensaje a enviar
			$exito = $mail->Send(); // Envía el correo.
		
			//También podríamos agregar simples verificaciones para saber si se envió:
			/*
			echo 'El correo fue enviado correctamente.';
			if($exito){
				echo 'El correo fue enviado correctamente.';
			}else{
				echo 'Hubo un inconveniente. Contacta a un administrador.' ;
			}
			 */
			 
			
			// Configuracion del email para el congreso
			$mail = new PHPMailer();
			
			//Configuracion y validacion SMTP:
			$mail->IsSMTP();
			
			// Modo depuracion texto y codigo de errores
			$mail->SMTPDebug  = false; 
			
			$mail->SMTPAuth = true;
			$mail->Host = 'smtp.gmail.com'; // SMTP a utilizar. Por ej. smtp.elserver.com
			$mail->Username = 'congresowebetsiit@gmail.com'; // Correo completo a utilizar
			$mail->Password = 'web12345678'; // Contraseña
			$mail->SMTPSecure = "tls"; // sets the prefix to the servier
			$mail->Port = 587; // Puerto a utilizar
			
			$mail->From = $email; 
			$mail->FromName = $email;
		
			$mail->AddAddress($sender); // Esta es la dirección a donde enviamos
			$mail->IsHTML(true); // El correo se envía como HTML
			$mail->Subject = $asunto; // Este es el asunto del email.
			$mail->Body = $body2; // Mensaje a enviar
			$mail->Send(); // Envía el correo.
			
			//También podríamos agregar simples verificaciones para saber si se envió:
			/*
			if($exito){
				echo 'El correo fue enviado correctamente.';
			}else{
				echo 'Hubo un inconveniente. Contacta a un administrador.' ;
			}
			 */
		}
		
		
	}

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //something posted
    if (isset($_POST['recover'])) {
    	sendEmail("recuperar");
    } else if (isset($_POST['restablecer'])){
        sendEmail("restablecer");
    }
}
	?>