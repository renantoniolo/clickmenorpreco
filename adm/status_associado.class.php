<?php
// ***********************************************************************************************************************
// * Empresa     	    		: Click Menor Preço Ltda
// * Script      	    			: status_associado.class.php
// * Programador 	    	: Renan Toniolo Rocha
// * Linguagem   	    	: PHP
// * Objetivo	 				: Ativa ou desativa o associado
// * Data Criacao	    	: 21/07/2016
// * Ultima Atualizacao : 28/07/2016
// ************************************************************************************************************************
// importa esta class para fazer a conexao com o bd
include_once("bd_connection.class.php");

$bd = new bd_connection();

//recebo o id que vou editar
$id = $_GET["id_associado"];
$valor = $_GET["value"];

//Buscar todos os Associados
$retorno = $bd->ativaDesativaAssociado($id,$valor);

if($valor ==  1) {
	// ok
	echo "<script>window.alert('Associado Ativado.');</script>";
}
else { // falha 
	echo "<script>window.alert('Associado Desativado.');</script>";
}

		//volta para a pagina de lista associados
		echo"<script>window.open('adm.php?pg=5','_self')</script>";
	

?>