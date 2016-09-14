<?php
// ***********************************************************************************
// * Empresa     	    	: Click Menor Preço Ltda
// * Script      	    		: incluir_usuario.class.php
// * Programador 	    	: Renan Toniolo Rocha
// * Linguagem   	    	: PHP 
// * Objetivo	 			: Incluir um usuario no sistema
// * Data Criacao	    	: 29/06/2016
// * Ultima Atualizacao : 26/07/2016
// ***********************************************************************************
include_once("bd_connection.class.php");

//usuario
$email = $_POST["email"];
//senha
$senha = $_POST["senha"];

$incluir = new incluir_usuario($email,$senha); 


class incluir_usuario{

	function incluir_usuario($email,$senha){
		
		// instancia a classe de comunicacao a base de dados
		$bd = new bd_connection();
		
		// inclui um novo usuario
		$retorno = $bd->incluirNovoUsuario($email,$senha);
		
		if($retorno) {
			// incluido com sucesso
			echo "<script>window.alert('O usuario: ".$email." foi incluido com sucesso.');</script>";
		}
		else { // falha ao excluir
			echo "<script>window.alert('Falha ao incluir este Usuario!');</script>";
		}

		//volta para a pagina de usuarios
		echo"<script>window.open('adm.php?pg=4','_self')</script>";
	
	}


}



?>