<?php
// ***********************************************************************************
// * Empresa     	    			: Click Menor Preço Ltda
// * Script      	    				: categorias.api.php
// * Programador 	    		: Renan Toniolo Rocha
// * Linguagem   	    		: PHP / SQL / Json
// * Objetivo	 					: Transforma os resultados em Json
// * Data Criacao	    		: 10/09/2016
// * Ultima Atualizacao 	: 10/09/2016
// ***********************************************************************************
// Acesso a base de dados
include("../adm/bd_connection.class.php");

// Instancia a conexão com a base de dados
$bd = new bd_connection();

// Busco todas as categorias cadastradas
$categorias = $bd->buscarCategorias();

$i=0;
while($linha = mysql_fetch_array($categorias)){
	
	$cat	= array("ID_Categoria"=>$linha[0],"Nome"=>$linha[1]);
	
	// coloco os valores organizados na API
	$vet_categorias[$i] = $cat;
	$i++;

}

// Impirmo os valores em Json
echo json_encode($vet_categorias);


?>