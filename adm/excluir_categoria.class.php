<?php
// ***********************************************************************************
// * Empresa     	    	: Clique Menor Preço Ltda
// * Script      	    		: excluir_categoria.class.php
// * Programador 	    	: Renan Toniolo Rocha
// * Linguagem   	    	: PHP 
// * Objetivo	 			: Excluir uma categoria do sistema
// * Data Criacao	    	: 29/06/2016
// * Ultima Atualizacao : 26/07/2016
// ***********************************************************************************

include_once("bd_connection.class.php");

$bd = new bd_connection();

// pego o id da cidade que vai ser excluida
$categoria_id = $_GET["id_categoria"];

// conseguiu excluir?
$retorno = $bd->excluirCategoria($categoria_id);

if($retorno) {
	// ecluido com sucesso
	echo "<script>window.alert('Categoria excluida com sucesso.');</script>";
}
else { // falha ao excluir
	echo "<script>window.alert('Falha ao excluir esta Categoria, pois ela tem dependentes.');</script>";
}

//volta para a pagina de cidades
echo"<script>window.open('adm.php?pg=2','_self')</script>";

?>