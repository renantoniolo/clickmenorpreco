<?php session_start(); 

// ***********************************************************************************************************************
// * Empresa     	    		: Clique Menor Preço Ltda
// * Script      	    			: deslogar.php
// * Programador 	    	: Renan Toniolo Rocha
// * Linguagem   	    	: PHP / HTML
// * Objetivo	 				: Pagina para deslogar do sistema
// * Data Criacao	    	: 21/07/2016
// * Ultima Atualizacao : 28/07/2016
// ************************************************************************************************************************
include_once("session_control.class.php");

// instancia a classe de sessao
$sessionControl = new session_control();

// exclui o cookie da base de dados		
$sessionControl->_destroy(session_id());
		
//destroi a sessão
session_destroy();

//volta para a pagina de login
echo"<script>window.open('index.html','_self')</script>";

?>