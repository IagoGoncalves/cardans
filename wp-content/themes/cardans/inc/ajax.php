<?php

add_action( 'wp_ajax_enviar-email', 'my_action_enviar_email' );
add_action( 'wp_ajax_nopriv_enviar-email', 'my_action_enviar_email' );

function my_action_enviar_email() {

	if (($_POST['tipo-email']) == "contato"){
		$deNome = $_POST['name'];
		$deAssunto = $_POST['assunto'];
		$deEmail = $_POST['email'];
		$deTelefone  = $_POST['telefone'];
		$demensagem  = $_POST['message'];
	    
	    $mensagem = 
			"Contato Cardans \n\n". 
			"Nome: " . $deNome . "\n".
			"Assunto: " . $deAssunto ."\n".
			"Email: " . $deEmail ."\n".
			"Telefone: " . $deTelefone ."\n".
			"Mensagem: " . $demensagem ."\n\n".
			"Mensagem Enviada pelo site da Cardans";
	}

		//require_once('class.phpmailer.php');

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

		$mailer->FromName = 'Pagina de contato'; //Nome que será exibido para o destinatário
		$mailer->From = $deEmail; //Obrigatório ser a mesma caixa postal indicada em "username"
		$mailer->AddReplyTo($deEmail, $deNome);
		$mailer->AddAddress('iago@ideapublicidade.com.br'); //Destinatários contato@Cardans.com.br'

		//Conversor UTF-8 para acentuação
		$mailer->Subject = $assunto = '=?UTF-8?B?'.base64_encode($assunto).'?=';		
		$mailer->Subject = "E-mail do Site Cardans" ." - ".date("H:i").'-'.date("d/m/Y");
		$mailer->Body = $mensagem;
		$mailer->CharSet = "UTF-8";
		if($mailer->Send()) { ?>
			<h3 class='enviado'>Mensagem enviada com sucesso </h3>	
		<?php }

		else { ?>
			<h3 class='erro'>A mensagem não pode ser enviada, tente novamente ou tente mais tarde!</h3>
		<?php }
		die();
}