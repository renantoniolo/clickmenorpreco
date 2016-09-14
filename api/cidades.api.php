<?php
// ***********************************************************************************
// * Empresa     	    			: Click Menor Preço Ltda
// * Script      	    				: cidades.api.php
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

// Busco todas as cidades cadastradas
$cidades = $bd->buscarCidadesCadastradas();

$i=0;
while($linha = mysql_fetch_array($cidades)){
	
	$cid	= array("ID_Cidade"=>$linha[0],"Nome"=>$linha[1],"Estado"=>$linha[2],"DD_Area"=>$linha[3]);
	
	// coloco os valores organizados na API
	$vet_cidades[$i] = $cid;
	$i++;

}

// Impirmo os valores em Json
echo json_encode($vet_cidades);

?>