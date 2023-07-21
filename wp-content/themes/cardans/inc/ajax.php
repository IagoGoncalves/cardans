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

		$receber = "iago@ideapublicidade.com.br";
		// $receber = "contato@cardans.com";
	    
	    $arquivo = 
			"Contato Cardans \n\n". 
			"Nome: " . $deNome . "\n".
			"Assunto: " . $deAssunto ."\n".
			"Email: " . $deEmail ."\n".
			"Telefone: " . $deTelefone ."\n".
			"Mensagem: " . $demensagem ."\n\n".
			"Mensagem Enviada pelo site da Cardans";
	}
		$subject = $deAssunto;
		$origem = $_POST['from'];
		$headers = "MIME-Version: 1.1\n";
		$headers .= "Content-type: text/plain; charset=iso-8859-1\n";
		$headers .= "From: " . $receber . "\n";
		$headers .= "Reply-To: " . $origem . "\n";
		if(mail($receber, $subject, $arquivo, $headers))
			echo "Mensagem enviada com sucesso";
		else
			echo "A mensagem não pode ser enviada, tente novamente ou tente mais tarde";	
		die();	
}