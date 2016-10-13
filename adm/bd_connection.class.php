<?php
// ***********************************************************************************
// * Empresa     	    			: Click Menor Preço Ltda
// * Script      	    				: bd_connection.class.php
// * Programador 	    		: Renan Toniolo Rocha
// * Linguagem   	    		: PHP / SQL
// * Objetivo	 					: Faz a conexão com o banco de dados e executa as query's
// * Data Criacao	    		: 20/04/2016
// * Ultima Atualizacao 	: 10/09/2016
// ***********************************************************************************


class bd_connection{


	// construtora da classe para conexão com o banco de dados
	function bd_connection() // Contrutora da Classe
	{
			//vamos conectar ao bd
			$this->conectar();
	}

	function conectar(){

		// Logar no banco de dados
		$host  = "cliquebd.mysql.dbaas.com.br"; //endereço do servidor MySQL
		$database = "cliquebd"; //nome do BD
		$login_db = "cliquebd"; //login usado para acessar o BD
		$senha_db = "rochas1973"; //senha usada para acessar o BD

		// vamos fazer a conexão com o banco de dados
		if ($conexao = mysql_connect("$host","$login_db","$senha_db") or die ("Não foi possivel conectar ao servidor."))
    	{
    		mysql_set_charset('utf8', $conexao);
    		// seleciono a base de dados
      		$db = mysql_select_db($database, $conexao) or die ("Não foi possivel selecionar o banco de dados.");

      		// retorno a conexão do banco
      		return true;

    	} // não deu certo, retorno falso

    	return false;

	}

	function buscaProdutoAssociado($categoria,$cidade){

		if($categoria != "0" && $cidade != "0")	{
			// busca os Associados conforme a sua categoria e cidade
			$query = "SELECT Nome,Email,Telefone,Whats, Status FROM ASSOCIADO WHERE (ID_Categoria = '".$categoria."' OR ID_Categoria2 = '".$categoria."') AND ID_Cidade = '".$cidade."' ";
		}
		else if($categoria != "0" ) {
			// busca os Associados conforme a sua categoria
			$query = "SELECT Nome,Email,Telefone,Whats, Status FROM ASSOCIADO WHERE (ID_Categoria = '".$categoria."' OR ID_Categoria2 = '".$categoria."') ";
		}
		else if($cidade != "0" ) {
			// busca os Associados conforme a sua cidade
			$query = "SELECT Nome,Email,Telefone,Whats, Status FROM ASSOCIADO WHERE ID_Cidade = '".$cidade."' ";
		}
		else{
			// busca todos os Associados
			$query = "SELECT Nome,Email,Telefone,Whats, Status FROM ASSOCIADO";
		}

		// executa a query
		$sql = mysql_query($query) or die ("Erro ao selecionar na tabela ASSOCIADO". mysql_error());

		// retorno as Associados
		return $sql;

	}


	function buscarCategorias() {

		$query = "SELECT * FROM CATEGORIA ORDER BY Nome ASC";
		mysql_query("SET NAMES 'utf8'");
		mysql_query('SET character_set_connection=utf8');
		mysql_query('SET character_set_client=utf8');
		mysql_query('SET character_set_results=utf8');
		$sql = mysql_query($query) or die ("Erro ao selecionar na tabela CATEGORIA". mysql_error());

		// retorno as categorias
		return $sql;

	}



	function incluirNovaCategoria($nome){

		// insere uma nova categoria
		$query = "INSERT INTO CATEGORIA (Nome) VALUES ('$nome')";
		$sql = mysql_query($query) or die ("Erro ao inserir na tabela CATEGORIA". mysql_error());

		// retorno a insercao
		return $sql;

	}

	function editarCategoria($id,$nome){

		// editar uma categoria
		$query = "UPDATE CATEGORIA SET Nome = '".$nome."' WHERE ID_Categoria = '$id' ";
		$sql = mysql_query($query) or die ("Erro ao editar na tabela CATEGORIA". mysql_error());

		// retorno a update
		return $sql;

	}

	function excluirCategoria($id){

		// verifico se pode excluir
		$ret = $this->verificaExclusaoCategoria($id);

		if($ret){

			// exclui as CIDADES cadastradas
			$query = "DELETE FROM CATEGORIA WHERE ID_Categoria = '".$id."' ";
			$sql = mysql_query($query) or die ("Erro ao excluir na tabela CATEGORIA". mysql_error());

			// retorno de exclusao da CATEGORIA
			return $sql;

		}else{

			// retorna que não foi possivel ecluir
			return false;
		}

	}

	function verificaExclusaoCategoria($id){

		// verifica se tem algum ASSOCIADO como dependente dessa CATEGORIA
		$query = "SELECT * FROM ASSOCIADO WHERE ID_Categoria = '".$id."' ";
		$sql = mysql_query($query) or die ("Erro ao excluir na tabela ASSOCIADO". mysql_error());

		// qtd de registros
		$num = mysql_num_rows($sql);

		// nao posso excluir
		if($num > 0) return false;
		else return true; // posso excluir

	}

	function buscarCidadesCadastradas(){

		// busca as CIDADES cadastradas
		$query = "SELECT * FROM CIDADE";
		mysql_query("SET NAMES 'utf8'");
		mysql_query('SET character_set_connection=utf8');
		mysql_query('SET character_set_client=utf8');
		mysql_query('SET character_set_results=utf8');
		$sql = mysql_query($query) or die ("Erro ao selecionar na tabela CIDADE". mysql_error());

		// retorno as Associados
		return $sql;

	}

	function incluirNovaCidade($nome_cidade, $estado, $cod_area){

		// insere uma nova cidade
		$query = "INSERT INTO CIDADE (Nome, Estado, DD_Area) VALUES ('$nome_cidade','$estado','$cod_area')";
		$sql = mysql_query($query) or die ("Erro ao inserir na tabela CIDADE". mysql_error());

		// retorno a insercao
		return $sql;

	}

	function excluirCidade($id){

		// verifica se posso excluir
		$ret = $this->verificaExclusaoCidade($id);

		// posso excluir?
		if($ret) {

			// exclui as CIDADES cadastradas
			$query = "DELETE FROM CIDADE WHERE ID_Cidade = '".$id."' ";
			$sql = mysql_query($query) or die ("Erro ao excluir na tabela CIDADE". mysql_error());

			// retorno a cidade excluida
			return $sql;
		}
		else{
			return false;
		}

	}

	function verificaExclusaoCidade($id){

		// verifica se tem algum ASSOCIADO como dependente
		$query = "SELECT * FROM ASSOCIADO WHERE ID_Cidade = '".$id."' ";
		$sql = mysql_query($query) or die ("Erro ao excluir na tabela ASSOCIADO". mysql_error());

		// qtd de registros
		$num = mysql_num_rows($sql);

		// nao posso excluir
		if($num > 0) return false;
		else return true; // posso excluir

	}

	function login($user,$password){

		$query = "SELECT * FROM USUARIO WHERE Email = '".$user."' AND Senha ='".md5($password)."' ";
		$sql = mysql_query($query) or die ("Erro ao selecionar na tabela USUARIO". mysql_error());

		// retorno o resultado
		return $sql;

	}

	function buscarUsuariosCadastrados(){

		// busca os USUARIO cadastrados
		$query = "SELECT * FROM USUARIO WHERE ID_Usuario > 1";
		$sql = mysql_query($query) or die ("Erro ao selecionar na tabela USUARIO". mysql_error());

		// retorno as Usuarios
		return $sql;

	}

	function incluirNovoUsuario($email, $senha){

		// quebra a senha para criptogafria MD5
		$senhaMd5 = md5($senha);

		// insere um novo usuario
		$query = "INSERT INTO USUARIO (Email, Senha) VALUES ('$email','$senhaMd5')";
		$sql = mysql_query($query) or die ("Erro ao inserir na tabela USUARIO". mysql_error());

		// retorno a insercao
		return $sql;

	}

	function excluirUsuario($id){

		// exclui os USUARIO cadastrados
		$query = "DELETE FROM USUARIO WHERE ID_Usuario = '".$id."' ";
		$sql = mysql_query($query) or die ("Erro ao excluir na tabela USUARIO". mysql_error());

		// retorno a usuario excluido
		return $sql;

	}

	function incluirNovoAssociado($nome, $razao_social, $cnpj, $rua, $numero, $complemento, $bairro, $cidade, $telefone, $waths, $email, $categoria, $categoria2, $observacao, $status)
	{

		// insere um novo associado
		$query = "INSERT INTO ASSOCIADO (Nome, Razao_Social, CNPJ, Rua, Numero, Complemento, Bairro, ID_Cidade, Telefone, Whats, Email, ID_Categoria, ID_Categoria2, Observacao, Status) ".
		"VALUES ('$nome', '$razao_social', '$cnpj', '$rua', '$numero', '$complemento', '$bairro', '$cidade', '$telefone', '$waths', '$email', '$categoria', '$categoria2', '$observacao', '$status')";
		mysql_query("SET NAMES 'utf8'");
		mysql_query('SET character_set_connection=utf8');
		mysql_query('SET character_set_client=utf8');
		mysql_query('SET character_set_results=utf8');
		$sql = mysql_query($query) or die ("Erro ao inserir na tabela ASSOCIADO". mysql_error());

		// retorno a insercao
		return $sql;

	}

	function editarAssociado($id_associado,$nome, $razao_social, $cnpj, $rua, $numero, $complemento, $bairro, $cidade, $telefone, $whats, $email, $categoria, $categoria2, $observacao)
	{

		// atualiza um associado
		$query = "UPDATE ASSOCIADO SET Nome = '$nome', Razao_Social = '$razao_social', CNPJ = '$cnpj', Rua = '$rua' , Numero = '$numero', Complemento = '$complemento', ".
		"Bairro = '$bairro', ID_Cidade = '$cidade', Telefone = '$telefone', Whats = '$whats', Email = '$email', ID_Categoria = '$categoria', ID_Categoria2 = '$categoria2', Observacao = '$observacao' ".
		"WHERE ID_Associado = '$id_associado' ";
		mysql_query("SET NAMES 'utf8'");
		mysql_query('SET character_set_connection=utf8');
		mysql_query('SET character_set_client=utf8');
		mysql_query('SET character_set_results=utf8');
		$sql = mysql_query($query) or die ("Erro ao editar a tabela ASSOCIADO". mysql_error());

		// retorno a update
		return $sql;

	}


	function excluirAssociado($id){

		// exclui um ASSOCIADO cadastrado
		$query = "DELETE FROM ASSOCIADO WHERE ID_Associado = '".$id."' ";
		$sql = mysql_query($query) or die ("Erro ao excluir na tabela ASSOCIADO". mysql_error());

		// retorno a associado excluido
		return $sql;

	}

	function buscarAssociado($id){

		$query = "SELECT * FROM ASSOCIADO WHERE ID_Associado = '$id' ";
		mysql_query("SET NAMES 'utf8'");
		mysql_query('SET character_set_connection=utf8');
		mysql_query('SET character_set_client=utf8');
		mysql_query('SET character_set_results=utf8');
		$sql = mysql_query($query) or die ("Erro ao selecionar na tabela ASSOCIADO". mysql_error());

		// retorno a select
		return $sql;

	}

	function buscarAsssociadoNome($Nome){

		// busca o ASSOCIADO cadastrados pelo seu nome
		$query = "SELECT A.ID_Associado, A.Nome,A.CNPJ,C.Nome, A.Telefone,A.Email,CT.Nome, A.Status ".
							"FROM ASSOCIADO AS A, CIDADE AS C, CATEGORIA AS CT ".
							"WHERE A.ID_Cidade =  C.ID_Cidade AND A.ID_Categoria = CT.ID_Categoria ".
							"AND (A.Nome LIKE '%".$Nome."%' OR CT.Nome LIKE '%".$Nome."%' ) ORDER BY A.Nome ASC";
		$sql = mysql_query($query) or die ("Erro ao selecionar na tabela ASSOCIADO". mysql_error());

		// retorna ASSOCIADO
		return $sql;

	}

	function buscarTodosAsssociados($limit,$offset){

		// busca os ASSOCIADOS cadastrados
		$query = "SELECT A.ID_Associado, A.Nome,A.CNPJ,C.Nome, A.Telefone,A.Email,CT.Nome, A.Status ".
							"FROM ASSOCIADO AS A, CIDADE AS C, CATEGORIA AS CT ".
							"WHERE A.ID_Cidade =  C.ID_Cidade AND A.ID_Categoria = CT.ID_Categoria ORDER BY A.Nome ASC ".
							"LIMIT ".$limit." OFFSET ".$offset;
		$sql = mysql_query($query) or die ("Erro ao selecionar na tabela ASSOCIADO". mysql_error());

		// retorno os ASSOCIADOS
		return $sql;

	}

	function ativaDesativaAssociado($id_associado, $valor){

		$query = "UPDATE ASSOCIADO SET Status = $valor WHERE ID_Associado = '$id_associado' ";
		$sql = mysql_query($query)  or die ("Erro ao atualizar a tabela ASSOCIADO". mysql_error());

		//echo"$query<br>";
		return $sql;
	}


}
?>
