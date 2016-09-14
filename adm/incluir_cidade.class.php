<?php
// ***********************************************************************************
// * Empresa     	    	: Click Menor Preço Ltda
// * Script      	    		: incluir_cidade.class.php
// * Programador 	    	: Renan Toniolo Rocha
// * Linguagem   	    	: PHP 
// * Objetivo	 			: Incluir uma cidade do sistema
// * Data Criacao	    	: 29/06/2016
// * Ultima Atualizacao : 26/07/2016
// ***********************************************************************************

include_once("bd_connection.class.php");


$nome_cidade = strtoupper($_POST["nome_cidade"]);
$estado = $_POST["estado"];
$cod_area = $_POST["cod_area"];

$incluir = new incluir_cidade($nome_cidade, $estado, $cod_area); 


class incluir_cidade{

	function incluir_cidade($nome_cidade, $estado, $cod_area){
		
		// instancia a classe de comunicacao a base de dados
		$bd = new bd_connection();
		
		// inclui uma nova cidade
		$retorno = $bd->incluirNovaCidade($nome_cidade, $estado, $cod_area);
		
		if($retorno) {
			// ecluido com sucesso
			echo "<script>window.alert('Cidade de ".$nome_cidade." foi incluida com sucesso.');</script>";
		}
		else { // falha ao excluir
			echo "<script>window.alert('Falha ao incluir esta Cidade!');</script>";
		}

		//volta para a pagina de cidades
		echo"<script>window.open('adm.php?pg=3','_self')</script>";
	
	}


}



?>