<?php
// ***********************************************************************************************************************
// * Empresa     	    		: Click Menor Preço Ltda
// * Script      	    			: categorias.php
// * Programador 	    	: Renan Toniolo Rocha
// * Linguagem   	    	: PHP / HTML
// * Objetivo	 				: Faz o cadastro/editar/excluir uma nova categorias no sistema
// * Data Criacao	    	: 21/07/2016
// * Ultima Atualizacao : 28/07/2016
// ************************************************************************************************************************
// importa esta class para fazer a conexao com o bd
include_once("bd_connection.class.php");

$bd = new bd_connection();

$categorias = $bd->buscarCategorias();

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
                            Categorias
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="adm.php">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-table"></i> Categorias
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <form name="form_categoria" method="post" action="incluir_categoria.class.php" onSubmit="return validar_categoria(this)"   >
                <div class="form-group">
                     <p>Adicione ou Remova uma Categoria no sistema. </p>
                </div>
                <div class="form-group">
                    <label>Digite um nome de uma Nova Categoria:</label>
                     <input  name="nome_categoria" class="form-control" placeholder="Entre com um nome de categoria">
                </div>
                
                <button type="submit" class="btn btn-default">Enviar</button>
                 <button type="reset" class="btn btn-default">Limpar</button>
                 </form>
                 <h1 class="page-header">
                            Relação de Categorias
                 </h1>
                 <div class="col-lg-5">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nome Categoria</th>
													<th>Editar</th>                                        
                                        <th>Excluir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                
                                while($linha = mysql_fetch_array($categorias)) {
                                	
                                		echo "<tr>";
                                			echo "<td>$linha[1]</td>";
                                			echo "<td><a href='adm.php?pg=6&id_categoria=$linha[0]&nome=$linha[1]' >
                                			<img src='imagens/editar_20.png' alt='editar' width='20' height='20'></a></td>";
                                			echo "<td><a href='excluir_categoria.class.php?id_categoria=$linha[0]' >
                                			<img src='imagens/excluir_20.png' alt='excluir' width='20' height='20'></a></td>";
                                		echo "</tr>";
                       
                                	}
                                	
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
</body>
</html>