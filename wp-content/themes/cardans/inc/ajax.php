<?php

add_action( 'wp_ajax_enviar-email', 'my_action_enviar_email' );
add_action( 'wp_ajax_nopriv_enviar-email', 'my_action_enviar_email' );

function my_action_enviar_email() {

	if (($_POST['tipo-email']) == "contato"){
		$deNome = $_POST['name'];
		$deAssunto = $_POST['assunto'];
		$demensagem = $_POST['message'];
	    
	    $mensagem = 
			"Contato Consepe \n\n". 
			"Nome: " . $deNome . "\n".
			"Assunto: " . $deAssunto ."\n".
			"Mensagem: " . $demensagem ."\n\n".
			"Mensagem Enviada pelo Consepe";
	}

		require_once('class.phpmailer.php');

		$mailer = new PHPMailer();
		$mailer->IsSMTP();
		$mailer->SMTPDebug = 1;
		$mailer->Port = 587;
		$mailer->Host = 'localhost';

		//$mailer->SMTPAuth = true; //Define se haverá ou não autenticação no SMTP
		//$mailer->Username = ''; //Informe o e-mail o completo
		//$mailer->Password = ''; //Senha da caixa postal

		// DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
		date_default_timezone_set('America/Sao_Paulo');

		$mailer->FromName = $deNome; //Nome que será exibido para o destinatário
		$mailer->From = 'contato@consepeextrema.org'; //Obrigatório ser a mesma caixa postal indicada em "username"
		$mailer->AddReplyTo('contato@consepeextrema.org', $deNome);
		$mailer->AddAddress('contato@consepeextrema.org'); //Destinatários

		//Conversor UTF-8 para acentuação
		$mailer->Subject = $assunto = '=?UTF-8?B?'.base64_encode($assunto).'?=';		
		$mailer->Subject = "E-mail do Site Consepe" ." - ".date("H:i").'-'.date("d/m/Y");
		$mailer->Body = $mensagem;
		$mailer->CharSet = "UTF-8";

		if($mailer->Send()) { ?>
			<h3 class='enviado'>Mensagem enviada com sucesso </h3>	
		<?php }

		else { ?>
			<h3 class='erro'>A mensagem não pode ser enviada, tente novamente ou tente mais tarde</h3>
		<?php }
}
