<?php
// ***********************************************************************************
// * Empresa     	    		: Clique Menor Preço Ltda
// * Script      	    			: fale-conosco.class.php
// * Programador 	   		: Renan Toniolo Rocha
// * Linguagem   	    	: PHP 
// * Objetivo	 				: Enviar um e-mail de contato para o site
// * Data Criacao	    	: 06/08/2016
// * Ultima Atualizacao : 20/08/2016
// ***********************************************************************************
include_once("adm/enviarEmail.class.php");

// variaveis passadas por parametro
$nome = $_POST["nome"];
$email = $_POST["email"];
$assunto = $_POST["assunto"];
$texto = $_POST["texto"];

// instancia a class para mandar o e-mail
$fale = new faleConosco($nome, $email, $assunto, $texto);

class faleConosco{
	
	// variavel global
	var $sendEmail;
	
	function faleConosco($nome, $email, $assunto, $texto){
		
		// instancia a classe que envia o email
		$this->sendEmail = new enviarEmail();
		
		// envia o email
		$this->sendEmail->enviar_fale_conosco($nome, $email, $assunto, $texto);
		
		//volta para a pagina de como-se-cadastrar
		echo"<script>window.open('fale-conosco.php?enviar=true','_self')</script>";
		
		
	}	
	
}
?>