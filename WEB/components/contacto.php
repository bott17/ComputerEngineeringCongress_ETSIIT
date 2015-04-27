<div class='mainContent'>
	
	<?php
	
	function sendEmail(){
	
		require("./lib/phpmailer/PHPMailerAutoload.php");
		require("./lib/phpmailer/class.smtp.php");
		
		$nombre = 'Nombre';
		$telefono = 'tlf';
		
		$mail = new PHPMailer();
		
		$body = 'Hola es una prueba';
		$body .='ojalá funcione';
		
		//Luego tenemos que iniciar la validación por SMTP:
		$mail->IsSMTP();
		
		$mail->SMTPDebug  = 1; 
		
		$mail->SMTPAuth = true;
		$mail->Host = 'smtp.gmail.com'; // SMTP a utilizar. Por ej. smtp.elserver.com
		$mail->Username = 'congresowebetsiit@gmail.com'; // Correo completo a utilizar
		$mail->Password = 'web12345678'; // Contraseña
		$mail->SMTPSecure = "tls"; // sets the prefix to the servier
		$mail->Port = 587; // Puerto a utilizar
			 
		//Con estas pocas líneas iniciamos una conexión con el SMTP. Lo que ahora deberíamos hacer, es configurar el mensaje a enviar, el //From, etc.
		$mail->From = "congresowebetsiit@gmail.com"; // Desde donde enviamos (Para mostrar)
		$mail->FromName = "Nombre";
	
		//Estas dos líneas, cumplirían la función de encabezado (En mail() usado de esta forma: “From: Nombre <correo@dominio.com>”) de //correo.
		$mail->AddAddress("bott17@gmail.com"); // Esta es la dirección a donde enviamos
		$mail->IsHTML(true); // El correo se envía como HTML
		$mail->Subject = "Titulo"; // Este es el titulo del email.
		$body = "Hola mundo. Esta es la primer línea<br />";
		$mail->Body = $body; // Mensaje a enviar
		$exito = $mail->Send(); // Envía el correo.
	
		//También podríamos agregar simples verificaciones para saber si se envió:
		if($exito){
			echo 'El correo fue enviado correctamente.';
		}else{
			echo 'Hubo un inconveniente. Contacta a un administrador.' ;
			echo $exito;
		}
	}
	
	if(isset($_POST['submit']))
	{
	   sendEmail();
	} 
	?>
	
	<h1>Contacta con nostros</h1>
	<br />
	<p>
		No dudes en contactar con nosotros para cualquier duda relacionada con el evento o ¡si deseas convertirte en uno
		de nuestros partnerts!
	</p>
	<br />
	<ul>
		<li>
			Visita nuestra web: <a href='http://etsiit.ugr.es/'>http://etsiit.ugr.es</a>
		</li>
		<li>
			Llamanos: <strong>958 242 802</strong>
		</li>
		<li>
			Direcci&oacute;n: C/Periodista Daniel Saucedo Aranda, s/n 18071 GRANADA
		</li>
		<li>
			Email: <a href='mailto:contacto@correo.com?Subject=Contacto%ETSIIT'>contacto@correo.com</a>
		</li>
		<li>
			<form method="post" action="./index.php?sec=contacto">
				<table id='tablaContact'>
					<tr>
						<th>Nombre y apellidos</th>
						<td>
						<input autofocus id='nombre' type='text' value='' placeholder='Pedro Perez Perez' name='name'/>
						</td>
					</tr>
					<tr>
						<th>Email</th>
						<td>
						<input id='email' type='email' value='' placeholder='direccion@correo.es' name='email'/>
						</td>
					</tr>
					<tr>
						<th colspan='2'>Texto</th>
					</tr>
					<tr>
						<td colspan='2'>						<textarea id='texto' rows='10' name='texto' placeholder='Escribe un comentario' value=''></textarea></td>
					</tr>
					<tr>
						<td colspan='2'>
						<input id='botonForm' type='submit' name='submit'  value='Enviar' />
						</td>
					</tr>
				</table>
			</form>
		</li>
	</ul>

	<br />
	<h3>Become a Partnert</h3>
	<br />
	<ul>
		<li>
			Telefono comercial: <b>555 998 637</b>
		</li>
		<li>
			Email comercial: <a href='mailto:comercial@correo.com?Subject=Become%a%Partnert'>comercial@correo.com</a>
		</li>
		<li>
			Encuentranos en Skype: <a href='skype:[comercialCuenta]?call>[comercialCuenta]'><img class='shadow' src='images/contacto/skype-icon.png' /></a>
		</li>
	</ul>
</div>
