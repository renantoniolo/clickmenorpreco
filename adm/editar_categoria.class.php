<?php
// ***********************************************************************************
// * Empresa     	    	: Click Menor Preço Ltda
// * Script      	    		: editar_categoria.class.php
// * Programador 	    	: Renan Toniolo Rocha
// * Linguagem   	    	: PHP 
// * Objetivo	 			: Edita uma categoria no sistema
// * Data Criacao	    	: 29/06/2016
// * Ultima Atualizacao : 26/07/2016
// ***********************************************************************************
include_once("bd_connection.class.php");

$nome_categoria = strtoupper($_POST["nome_categoria"]);
$id = $_POST["id"];

$editar = new editar_categoria($id,$nome_categoria);

class editar_categoria{

	function editar_categoria($id,$nome_categoria){
		
		// instancia a classe de comunicacao a base de dados
		$bd = new bd_connection();
		
		// inclui uma nova cidade
		$retorno = $bd->editarCategoria($id,$nome_categoria);
		
		if($retorno) {
			// ecluido com sucesso
			echo "<script>window.alert('".$nome_categoria." foi editada com sucesso.');</script>";
		}
		else { // falha ao excluir
			echo "<script>window.alert('Falha ao editar esta Categoria!');</script>";
		}

		//volta para a pagina de cidades
		echo"<script>window.open('adm.php?pg=2','_self')</script>";
	
	}


}

?>