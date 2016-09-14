<?php
// ***********************************************************************************
// * Empresa     	    	: Click Menor Preço Ltda
// * Script      	    		: incluir_associado.class.php
// * Programador 	    	: Renan Toniolo Rocha
// * Linguagem   	    	: PHP 
// * Objetivo	 			: Incluir uma associado no sistema
// * Data Criacao	    	: 29/06/2016
// * Ultima Atualizacao : 26/07/2016
// ***********************************************************************************

include_once("bd_connection.class.php");

$nome = strtoupper($_POST["nome"]);
$razao_social = strtoupper($_POST["razao_social"]);
$cnpj = $_POST["cnpj"];
$rua = $_POST["rua"];
$numero = $_POST["numero"];
$complemento = $_POST["complemento"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$telefone = $_POST["telefone"];
$waths = $_POST["waths"];
$email = $_POST["email"]; 
$categoria = $_POST["categoria"];
$categoria2 = $_POST["categoria2"];
$observacao = $_POST["observacao"];
$status = true;

$incluir = new incluir_associado($nome, $razao_social, $cnpj, $rua, $numero, $complemento, $bairro, $cidade, $telefone, $waths, $email, $categoria,$categoria2, $observacao, $status);


class incluir_associado{

	function  incluir_associado($nome, $razao_social, $cnpj, $rua, $numero, $complemento, $bairro, $cidade, $telefone, $waths, $email, $categoria, $categoria2, $observacao, $status)
	{
		
		// instancia a classe de comunicacao a base de dados
		$bd = new bd_connection();
		
		// inclui uma nova cidade
		$retorno = $bd->incluirNovoAssociado($nome, $razao_social, $cnpj, $rua, $numero, $complemento, $bairro, $cidade, $telefone, $waths, $email, $categoria, $categoria2, $observacao, $status);
		
		if($retorno) {
			// ecluido com sucesso
			echo "<script>window.alert('".$nome." foi incluida com sucesso.');</script>";
		}
		else { // falha ao excluir
			echo "<script>window.alert('Falha ao incluir esta Associado!');</script>";
		}

		//volta para a pagina de cidades
		echo"<script>window.open('adm.php?pg=1','_self')</script>";
	
	}


}



?>