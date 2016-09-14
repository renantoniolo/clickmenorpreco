<?php
// ***********************************************************************************
// * Empresa     	    	: Clique Menor Preço Ltda
// * Script      	    		: excluir_cidade.class.php
// * Programador 	    	: Renan Toniolo Rocha
// * Linguagem   	    	: PHP
// * Objetivo	 			: Excluir uma cidade do sistema
// * Data Criacao	    	: 29/06/2016
// * Ultima Atualizacao : 26/07/2016
// ***********************************************************************************

include_once("bd_connection.class.php");

// inicializa com banco de dados
$bd = new bd_connection();

// pego o id da cidade que vai ser excluida
$cidade_id = $_GET["id_cidade"];

// conseguiu excluir?
$retorno = $bd->excluirCidade($cidade_id);

if($retorno) {
	// ecluido com sucesso
	echo "<script>window.alert('Cidade excluida com sucesso.');</script>";
}
else { // falha ao excluir
	echo "<script>window.alert('Impossive excluir esta Cidade, pois ela tem dependentes.');</script>";
}

//volta para a pagina de cidades
echo"<script>window.open('adm.php?pg=3','_self')</script>";

?>
