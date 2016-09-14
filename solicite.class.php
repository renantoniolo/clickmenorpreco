<?php
// ***********************************************************************************
// * Empresa     	    		: Clique Menor Preço Ltda
// * Script      	    			: solicite.class.php
// * Programador 	   		: Renan Toniolo Rocha
// * Linguagem   	    	: PHP 
// * Objetivo	 				: Solicitar a visita de um representante
// * Data Criacao	    	: 06/08/2016
// * Ultima Atualizacao : 20/08/2016
// ***********************************************************************************
include_once("adm/enviarEmail.class.php");

// variaveis passadas por parametro
$nome = $_POST["nome"];
$email = $_POST["email"];
$dd = $_POST["dd"];
$telefone = $_POST["telefone"];
$cidade = $_POST["cidade"];


$como = new comoSeCadastrar($nome, $email, $dd, $telefone, $cidade);

class comoSeCadastrar{
	
	// variavel global
	var $sendEmail;
	
	function comoSeCadastrar($nome, $email, $dd, $telefone, $cidade){
		
		// instancia a classe que envia o email
		$this->sendEmail = new enviarEmail();
		
		// envia o email
		$this->sendEmail->enviar_email_como_se_cadastrar($nome, $email, $dd, $telefone, $cidade);
		
		//volta para a pagina de como-se-cadastrar
		echo"<script>window.open('solicite.php?enviar=true','_self')</script>";
		
		
	}	
	
}
?>