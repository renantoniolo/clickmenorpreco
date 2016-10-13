<?php
// ***********************************************************************************
// * Empresa     	    	: Click Menor Preço Ltda
// * Script      	    	: editar_associado.class.php
// * Programador 	    	: Renan Toniolo Rocha
// * Linguagem   	    	: PHP
// * Objetivo	 					: Editar um associado no sistema
// * Data Criacao	    	: 29/06/2016
// * Ultima Atualizacao : 26/07/2016
// ***********************************************************************************

include_once("bd_connection.class.php");

// Recebemos os valores
$id_associado = $_POST["id"];
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

// instancia a classe para editar o associado
$incluir = new editar_associado($id_associado,$nome, $razao_social, $cnpj, $rua, $numero, $complemento, $bairro, $cidade, $telefone, $waths, $email, $categoria,$categoria2, $observacao);


class editar_associado{

	function  editar_associado($id_associado,$nome, $razao_social, $cnpj, $rua, $numero, $complemento, $bairro, $cidade, $telefone, $waths, $email, $categoria, $categoria2, $observacao)
	{

		// instancia a classe de comunicacao com a base de dados
		$bd = new bd_connection();

		// editar um associado
		$retorno = $bd->editarAssociado($id_associado,$nome, $razao_social, $cnpj, $rua, $numero, $complemento, $bairro, $cidade, $telefone, $waths, $email, $categoria, $categoria2, $observacao);

		if($retorno) {
			// aletrado com sucesso
			echo "<script>window.alert('".$nome." foi alterado com sucesso.');</script>";
		}
		else { // falha ao alterar
			echo "<script>window.alert('Falha ao alterar este Associado!');</script>";
		}

		//volta para a pagina de cidades
		echo"<script>window.open('adm.php?pg=5','_self')</script>";

	}

}



?>
