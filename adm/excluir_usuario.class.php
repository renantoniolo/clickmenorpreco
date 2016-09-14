<?php
// ***********************************************************************************
// * Empresa     	    	: Clique Menor Preço Ltda
// * Script      	    		: excluir_usuario.class.php
// * Programador 	    	: Renan Toniolo Rocha
// * Linguagem   	    	: PHP 
// * Objetivo	 			: Excluir um usuario do sistema
// * Data Criacao	    	: 29/06/2016
// * Ultima Atualizacao : 26/07/2016
// ***********************************************************************************

include_once("bd_connection.class.php");

$bd = new bd_connection();

// pego o id da usuario que vai ser excluido
$usuario_id = $_GET["id_usuario"];

// conseguiu excluir?
$retorno = $bd->excluirUsuario($usuario_id );

if($retorno) {
	// incluido com sucesso
	echo "<script>window.alert('Usuario excluido com sucesso.');</script>";
}
else { // falha ao excluir
	echo "<script>window.alert('Falha ao excluir este Usuario!');</script>";
}

//volta para a pagina de usuarios
echo"<script>window.open('adm.php?pg=4','_self')</script>";

?>