<?php
// ***********************************************************************************
// * Empresa     	    		: Click Menor Preço Ltda
// * Script      	    			: pesqProdutoAssociados.class.php
// * Programador 	   		: Renan Toniolo Rocha
// * Linguagem   	    	: PHP / SQL
// * Objetivo	 				: Busca os produtos nos associados
// * Data Criacao	    	: 20/04/2016
// * Ultima Atualizacao : 26/04/2016
// ***********************************************************************************
include_once("bd_connection.class.php");
include_once("enviarEmail.class.php");


class pesqProdutoAssociados{
	
	// variaveis globais
	var $bd;
	var $emailCliente;
	var $produtoBuscar;
	var $idCidade;
	var $IdCategoria;
	var $emailWhats;

	function pesqProdutoAssociados($emailWhats, $categoria, $produto, $cidade) {
		
		$this->cat = $categoria;
		$this->bd = new bd_connection();
		$this->email = new enviarEmail();
		
		$this->emailWhats = $emailWhats;
		$this->produtoBuscar = $produto;
		$this->IdCategoria = $categoria;
		$this->idCidade = $cidade;
		
	
	}
	
	function buscarCategorias(){
		
		// busco categorias cadastradas
		$categorias = $this->bd->buscarCategorias();
		
		return 	$categorias;
	
	}
	
	function buscarCidadesCadastradas(){
	
		// busco categorias cadastradas
		$cidades = $this->bd->buscarCidadesCadastradas();
		
		return 	$cidades;
		
	}
	
	function buscarAssociado() {
		
		// Busca o produto associado
		$associados = $this->bd->buscaProdutoAssociado($this->IdCategoria,$this->idCidade);		
		
		// contator
		$i = 0;
		
		while($linha = mysql_fetch_array($associados))
		{
				$Nome = $linha[0];
				$Email = $linha[1];
				$Telefone = $linha[2];
				$Whats = $linha[3];
				$Status = $linha[4];
				
				// Verifica se ele pesquisou por cidade
				if($this->idCidade != 0 && $this->emailWhats != "" && $Status == 1){
					// Envia e-mail para empresario... pesquisa local
					$this->email->enviar_email_busca($Nome, $Email,$this->produtoBuscar,$this->emailWhats);
				}
				
				// adiciono associado ao vetor
				$vet_associados[$i] = $linha;
				
				// incremento o vetor
				$i++;
		}
		
		// retorna a lista de associados
		return $vet_associados;
		
		//volta para a pagina de inicio
		//echo"<script>window.open('../index.php','_self')</script>";
	
	}

}




?>