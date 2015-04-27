<?php
	
	function sendEmail(){
	
		require_once('./lib/phpmailer/class.phpmailer.php');
	
		$mail = new PHPMailer(true); //defaults to using php "mail()"; the true param means it will throw exceptions on errors, which we need to catch
	
		try {
			  $mail->AddReplyTo('bott17@gmail.com', 'First Last');
			  $mail->AddAddress('bott17@gmail.com', 'John Doe');
			  $mail->SetFrom('bott17@gmail.com', 'First Last');
			  $mail->AddReplyTo('bott17@gmail.com', 'First Last');
			  $mail->Subject = 'PHPMailer Test Subject via mail(), advanced';
			  $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
			  $mail->MsgHTML(file_get_contents('contacto.php'));
			  $mail->Send();
			  echo "Message Sent OK<p></p>\n";
		} catch (phpmailerException $e) {
		  	echo $e->errorMessage(); //Pretty error messages from PHPMailer
		} catch (Exception $e) {
		  	echo $e->getMessage(); //Boring error messages from anything else!
		}
	}

	if(isset($_POST['submit']))
	{
	   sendEmail();
	}
    
	 
	?>