<?php
// ***********************************************************************************
// * Empresa     	    	: Clique Menor Preço Ltda
// * Script      	    		: excluir_associado.class.php
// * Programador 	    	: Renan Toniolo Rocha
// * Linguagem   	    	: PHP 
// * Objetivo	 			: Excluir uma cidade do sistema
// * Data Criacao	    	: 10/09/2016
// * Ultima Atualizacao : 10/09/2016
// ***********************************************************************************

include_once("bd_connection.class.php");

$bd = new bd_connection();

// pego o id da cidade que vai ser excluida
$associado_id = $_GET["id_associado"];

// conseguiu excluir?
$retorno = $bd->excluirAssociado($associado_id);

if($retorno) {
	// excluido com sucesso
	echo "<script>window.alert('Associado excluido com sucesso.');</script>";
}
else { // falha ao excluir
	echo "<script>window.alert('Falha ao excluir este Associado.');</script>";
}

//volta para a pagina de cidades
echo"<script>window.open('adm.php?pg=5','_self')</script>";

?>