<?php
// ***********************************************************************************
// * Empresa     	    	: Click Menor Preço Ltda
// * Script      	    		: incluir_categoria.class.php
// * Programador 	    	: Renan Toniolo Rocha
// * Linguagem   	    	: PHP 
// * Objetivo	 			: Incluir uma categoria no sistema
// * Data Criacao	    	: 29/06/2016
// * Ultima Atualizacao : 26/07/2016
// ***********************************************************************************
include_once("bd_connection.class.php");

$nome_categoria = strtoupper($_POST["nome_categoria"]);

$incluir = new incluir_categoria($nome_categoria); 

class incluir_categoria{

	function incluir_categoria($nome_categoria){
		
		// instancia a classe de comunicacao a base de dados
		$bd = new bd_connection();
		
		if(strlen($nome_categoria) > 2){
		
			// inclui uma nova cidade
			$retorno = $bd->incluirNovaCategoria($nome_categoria);
		
			if($retorno) {
				// ecluido com sucesso
				echo "<script>window.alert('".$nome_categoria." foi incluida com sucesso.');</script>";
			}
			else { // falha ao excluir
				echo "<script>window.alert('Falha ao incluir esta Categoria!');</script>";
			}
			
		}
		else{
			echo "<script>window.alert('Nome de Categoria Invalido.');</script>";
		}

		//volta para a pagina de cidades
		echo"<script>window.open('adm.php?pg=2','_self')</script>";
	
	}


}



?>