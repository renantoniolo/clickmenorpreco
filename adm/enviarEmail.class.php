<?php
// caceçalio para envio de email
header('Content-Type: text/html; charset=UTF-8');

// ***********************************************************************************
// * Empresa     	    		: Clique Menor Preço Ltda
// * Script      	    			: enviarEmail.class.php
// * Programador 	   		: Renan Toniolo Rocha
// * Linguagem   	    	: PHP
// * Objetivo	 				: classe para envio de todos os e-mails do site
// * Data Criacao	    	: 20/04/2016
// * Ultima Atualizacao : 26/04/2016
// ***********************************************************************************


class enviarEmail{



	function enviarEmail(){ }



	function enviar_email_busca($Nome, $Email,$Produto,$emailWhats)
	{

		$quebra_linha = "\n";
		$br = "<br>";
		$emailsender="pesquisamenorpreco@clickmenorpreco.com.br";
		$emailremetente    = "pesquisamenorpreco@clickmenorpreco.com.br";

		// para quem sera enviado
		$emaildestinatario = $Email;

		// Assunto do Email
		$assunto = "PROCURO POR ".$Produto ;

		// Mensagem do e-mail
		$mensagemHTML = "<table align='center' border='0' width='600' cellspacing='0' cellpadding='0'>";
		$mensagemHTML .= "<tbody>";
      		$mensagemHTML .= "<tr>";
      			$mensagemHTML .= "<td style='padding:20px' align='center'>";
      				$mensagemHTML .="<img src='http://www.clickmenorpreco.com.br/img/logo-email.png' />";
      			$mensagemHTML .= "</td>";
     	 	$mensagemHTML .= "</tr>";
      		$mensagemHTML .= "<tr>";
      			$mensagemHTML .= "<td style='padding:20px;font-size:15px'align='center'>";
      				$mensagemHTML .= "Olá <b>".$Nome."</b>, procuro por produto ou serviço:";
      			$mensagemHTML .= "</td>";
      $mensagemHTML .= "</tr>";
      $mensagemHTML .= "<tr>";
      		$mensagemHTML .= "<td style='padding:10px;font-size:36px'align='center'>";
      			$mensagemHTML .= "<span style='color:#2D93BA'><b>".$Produto ."</b></span>";
      		$mensagemHTML .= "</td>";
      $mensagemHTML .= "</tr>";
      $mensagemHTML .= "<tr>";
      		$mensagemHTML .= "<td style='padding:20px;font-size:15px'align='center'>";
      			$mensagemHTML .= "meu WhatsApp ou e-mail é o <i><b><span style='color:#2D93BA;font-size:24px'>".$emailWhats."</span></b></i>";
      		$mensagemHTML .= "</td>";
      $mensagemHTML .= "</tr>";
      $mensagemHTML .= "<tr>";
      		$mensagemHTML .= "<td style='padding:10px;font-size:15px'align='center'>";
      			$mensagemHTML .= "Aguardo seu retorno.";
      $mensagemHTML .= "</td>";
      $mensagemHTML .= "</tr>";
      $mensagemHTML .= "<tr>";
      		$mensagemHTML .= "<td style='padding:20px;font-size:15px'align='center'>";
      			$mensagemHTML .= "Atenciosamente,";
      			$mensagemHTML .= "<span style='color:#2D93BA'> Clique Menor Preço</span>.";
      		$mensagemHTML .= "</td>";
      $mensagemHTML .= "</tr>";
      $mensagemHTML .= "<tr>";
      		$mensagemHTML .= "<td style='padding:20px;font-size:12px'align='center'>";
      			$mensagemHTML .= "<i>Este é um e-mail automático, por favor, não responda.</i>";
      $mensagemHTML .= "</td>";
      $mensagemHTML .= "</tr>";
      $mensagemHTML .= "</tbody>";
      $mensagemHTML .= "</table>";

		/* Montando o cabeçalho da mensagem */
		$headers = "MIME-Version: 1.1".$quebra_linha;
		$headers .= "Content-type: text/html; utf-8".$quebra_linha;
		// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
		$headers .= "From: ".$emailsender.$quebra_linha;
		$headers .= "Return-Path: " . $emailsender . $quebra_linha;

		// envia o e-mail
		if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix
   	 		$headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
    		mail($emaildestinatario, $assunto, $mensagemHTML, $headers );
		}

	}

	function enviar_email_como_se_cadastrar($nome, $email_, $dd, $telefone, $cidade)
	{

		$quebra_linha = "\n";
		$br = "<br>";
		$emailsender="solicite@clickmenorpreco.com.br";
		$emailremetente    = "solicite@clickmenorpreco.com.br";

		// para quem sera enviado
		$emaildestinatario = "click@clickmenorpreco.com.br; rocha@clickmenorpreco.com.br";

		// Assunto do Email
		$assunto = "Solicito a visita de um Representante ";

		// Mensagem do e-mail
		$mensagemHTML = "<table align='center' border='0' width='600' cellspacing='0' cellpadding='0'>";
		$mensagemHTML .= "<tbody>";
      		$mensagemHTML .= "<tr>";
      			$mensagemHTML .= "<td style='padding:20px' align='center'>";
      				$mensagemHTML .="<img src='http://www.clickmenorpreco.com.br/img/logo-email.png' />";
      			$mensagemHTML .= "</td>";
     	 	$mensagemHTML .= "</tr>";
      		$mensagemHTML .= "<tr>";
      			$mensagemHTML .= "<td style='padding:20px;font-size:15px'align='center'>";
      				$mensagemHTML .= "Olá <span style='color:#2D93BA'> Clique Menor Preço</span>, solicito a visita de um Representante";
      			$mensagemHTML .= "</td>";
      $mensagemHTML .= "</tr>";
      $mensagemHTML .= "<tr>";
      		$mensagemHTML .= "<td style='padding:10px;font-size:15px'align='center'>";
      			$mensagemHTML .= "Meu Nome é: <i><b><span style='color:#2D93BA;font-size:16px'>".$nome."</span></b></i>";
      		$mensagemHTML .= "</td>";
      $mensagemHTML .= "</tr>";
            $mensagemHTML .= "<tr>";
      		$mensagemHTML .= "<td style='padding:10px;font-size:15px'align='center'>";
      			$mensagemHTML .= "Email: <i><b><span style='color:#2D93BA;font-size:15px'>".$email_."</span></b></i>";
      		$mensagemHTML .= "</td>";
      $mensagemHTML .= "</tr>";
            $mensagemHTML .= "<tr>";
      		$mensagemHTML .= "<td style='padding:10px;font-size:15px'align='center'>";
      			$mensagemHTML .= "Telefone: <i><b><span style='color:#2D93BA;font-size:16px'>(".$dd.")".$telefone."</span></b></i>";
      		$mensagemHTML .= "</td>";
      $mensagemHTML .= "</tr>";
            $mensagemHTML .= "<tr>";
      		$mensagemHTML .= "<td style='padding:10px;font-size:15px'align='center'>";
      			$mensagemHTML .= "Cidade: <i><b><span style='color:#2D93BA;font-size:16px'>".$cidade."</span></b></i>";
      		$mensagemHTML .= "</td>";
      $mensagemHTML .= "</tr>";
      $mensagemHTML .= "<tr>";
      		$mensagemHTML .= "<td style='padding:20px;font-size:15px'align='center'>";
      			$mensagemHTML .= "Aguardo o seu retorno.";
      $mensagemHTML .= "</td>";
      $mensagemHTML .= "</tr>";
      $mensagemHTML .= "<tr>";
      		$mensagemHTML .= "<td style='padding:10px;font-size:15px'align='center'>";
      			$mensagemHTML .= "Atenciosamente, ";
      			$mensagemHTML .= $nome;
      		$mensagemHTML .= "</td>";
      $mensagemHTML .= "</tr>";
      $mensagemHTML .= "<tr>";
      		$mensagemHTML .= "<td style='padding:20px;font-size:12px'align='center'>";
      			$mensagemHTML .= "<i>Este é um e-mail automático, por favor, não responda.</i>";
      $mensagemHTML .= "</td>";
      $mensagemHTML .= "</tr>";
      $mensagemHTML .= "</tbody>";
      $mensagemHTML .= "</table>";

		/* Montando o cabeçalho da mensagem */
		$headers = "MIME-Version: 1.1".$quebra_linha;
		$headers .= "Content-type: text/html; utf-8".$quebra_linha;
		// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
		$headers .= "From: ".$emailsender.$quebra_linha;
		$headers .= "Return-Path: " . $emailsender . $quebra_linha;

		// envia o e-mail
		if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix
   	 		$headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
    		mail($emaildestinatario, $assunto, $mensagemHTML, $headers );
		}

	}

	function enviar_fale_conosco($nome, $email_, $assunto, $texto)
	{

		$quebra_linha = "\n";
		$br = "<br>";
		$emailsender= "fale_conosco@clickmenorpreco.com.br";
		$emailremetente    = "fale_conosco@clickmenorpreco.com.br";

		// para quem sera enviado
		$emaildestinatario = "click@clickmenorpreco.com.br; rocha@clickmenorpreco.com.br";

		// Assunto do Email
		$assunto = $assunto;

		// Mensagem do e-mail
		$mensagemHTML = "<table align='center' border='0' width='600' cellspacing='0' cellpadding='0'>";
		$mensagemHTML .= "<tbody>";
      		$mensagemHTML .= "<tr>";
      			$mensagemHTML .= "<td style='padding:20px' align='center'>";
      				$mensagemHTML .="<img src='http://www.clickmenorpreco.com.br/img/logo-email.png' />";
      			$mensagemHTML .= "</td>";
     	 	$mensagemHTML .= "</tr>";
      		$mensagemHTML .= "<tr>";
      			$mensagemHTML .= "<td style='padding:20px;font-size:15px'align='center'>";
      				$mensagemHTML .= "Olá <span style='color:#2D93BA'> Clique Menor Preço</span>,";
      			$mensagemHTML .= "</td>";
      $mensagemHTML .= "</tr>";
      $mensagemHTML .= "<tr>";
      		$mensagemHTML .= "<td style='padding:10px;font-size:15px'align='center'>";
      			$mensagemHTML .= "Meu Nome é: <i><b><span style='color:#2D93BA;font-size:16px'>".$nome."</span></b></i>";
      		$mensagemHTML .= "</td>";
      $mensagemHTML .= "</tr>";
            $mensagemHTML .= "<tr>";
      		$mensagemHTML .= "<td style='padding:10px;font-size:15px'align='center'>";
      			$mensagemHTML .= "Email: <i><b><span style='color:#2D93BA;font-size:15px'>".$email_."</span></b></i>";
      		$mensagemHTML .= "</td>";
      $mensagemHTML .= "</tr>";
            $mensagemHTML .= "<tr>";
      		$mensagemHTML .= "<td style='padding:10px;font-size:15px'align='center'>";
      			$mensagemHTML .= "Assunto: <i><b><span style='color:#2D93BA;font-size:16px'>".$assunto."</span></b></i>";
      		$mensagemHTML .= "</td>";
      $mensagemHTML .= "</tr>";
            $mensagemHTML .= "<tr>";
      		$mensagemHTML .= "<td style='padding:10px;font-size:15px'align='center'>";
      			$mensagemHTML .= "Mensagem: <i><b><span style='color:#2D93BA;font-size:16px'>".$texto."</span></b></i>";
      		$mensagemHTML .= "</td>";
      $mensagemHTML .= "</tr>";
      $mensagemHTML .= "<tr>";
      		$mensagemHTML .= "<td style='padding:20px;font-size:15px'align='center'>";
      			$mensagemHTML .= "Aguardo o seu retorno.";
      $mensagemHTML .= "</td>";
      $mensagemHTML .= "</tr>";
      $mensagemHTML .= "<tr>";
      		$mensagemHTML .= "<td style='padding:20px;font-size:15px'align='center'>";
      			$mensagemHTML .= "Atenciosamente, ";
      			$mensagemHTML .= $nome;
      		$mensagemHTML .= "</td>";
      $mensagemHTML .= "</tr>";
      $mensagemHTML .= "<tr>";
      		$mensagemHTML .= "<td style='padding:20px;font-size:12px'align='center'>";
      			$mensagemHTML .= "<i>Este é um e-mail automático, por favor, não responda.</i>";
      $mensagemHTML .= "</td>";
      $mensagemHTML .= "</tr>";
      $mensagemHTML .= "</tbody>";
      $mensagemHTML .= "</table>";

		/* Montando o cabeçalho da mensagem */
		$headers = "MIME-Version: 1.1".$quebra_linha;
		$headers .= "Content-type: text/html; utf-8".$quebra_linha;
		// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
		$headers .= "From: ".$emailsender.$quebra_linha;
		$headers .= "Return-Path: " . $emailsender . $quebra_linha;

		// envia o e-mail
		if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix
   	 		$headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
    		mail($emaildestinatario, $assunto, $mensagemHTML, $headers );
		}

	}

}

?>
