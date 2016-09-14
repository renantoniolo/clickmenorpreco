<?php
// ***********************************************************************************************************************
// * Empresa     	    		: Click Menor Preço Ltda
// * Script      	    			: lista_associados.php
// * Programador 	    	: Renan Toniolo Rocha
// * Linguagem   	    	: PHP / HTML
// * Objetivo	 				: Exibe os associados cadastrados no sistema
// * Data Criacao	    	: 21/07/2016
// * Ultima Atualizacao : 28/07/2016
// ************************************************************************************************************************
// importa esta class para fazer a conexao com o bd
include_once("bd_connection.class.php");

$bd = new bd_connection();


if($_GET["buscar"] == 1 ) {
	
	// Busca so um Associado
	$associados = $bd->buscarAsssociadoNome($_POST["Associado"]);
	
	// associado buscado
	$associado_buscado = $_POST["Associado"];
	
}
else{
	
	// caso nao tenha limite definido iniciamos em 30
	if($limit == "") $limit = 30;

	//Buscar todos os Associados
	$associados = $bd->buscarTodosAsssociados($limit,0);
	
	// exibe de 30 em 30 associados
	$limit = $limit+30;

}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>
<!-- Page Heading -->
                <div class="row" >
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Lista de Associados
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="adm.php">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-table"></i> Lista de Associados
                            </li>
                        </ol>
                    </div>
                </div>
                <form name="form" method="post" action="adm.php?pg=5&buscar=1" >
                <div class="form-group">
                    <label>Buscar por Nome Associado ou Categoria:</label>
                     <input name="Associado" class="form-control" placeholder="Nome Associado ou Categoria" value="<?php echo $associado_buscado; ?>">
                </div>
                  <button type="submit" class="btn btn-default">Buscar</button>
                </form>
                <!-- /.row -->
                 <h1 class="page-header">
                            Relação de Associados
                 </h1>
                 <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Cidade</th>
                                        <th>Telefone</th>
                                        <th>e-mail</th>
                                        <th>Categoria</th>
                                        <th>Status</th>
                                        <th>Editar</th>
                                        <th>Excluir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                
                                while($linha = mysql_fetch_array($associados)) {
                                	
                                		echo "<tr>";
                                			echo "<td>".$linha[1]."</td>";
                                			echo "<td>".$linha[3]."</td>";
                                			echo "<td>".$linha[4]."</td>";
                                			echo "<td>".$linha[5]."</td>";
                                			echo "<td>".$linha[6]."</td>";
                                			
                                			if($linha[7] == 1){
                                				echo "<td><a href='status_associado.class.php?id_associado=".$linha[0]."&value=0' >
                                				<img src='imagens/ativo_16.png' alt='ativo' width='20' height='20'></a></td>";
                                			}
                                			else{
                                				echo "<td><a href='status_associado.class.php?id_associado=".$linha[0]."&value=1' >
                                				<img src='imagens/desativado_16.png' alt='desativado' width='20' height='20'></a></td>";
                                			}
                                			echo "<td><a href='adm.php?pg=7&id=$linha[0]' >
                                			<img src='imagens/editar_20.png' alt='editar' width='20' height='20'></a></td>";
                                			echo "<td><a href='msgm_excluir_associado.php?id_associado=$linha[0]&nome=$linha[1]' >
                                			<img src='imagens/excluir_20.png' alt='excluir' width='20' height='20'></a></td>";
                                		echo "</tr>";
                       
                                	}
                                	
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group">
                     <p align="center"><a href="adm.php?pg=5&buscar=0&limit=<?php echo $limit; ?>"><img src="imagens/mais_pagina_64.png" alt="mais associados" width="48" height="48"></a></p>
                	</div>
</body>
</html>