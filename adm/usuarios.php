<?php
// ***********************************************************************************************************************
// * Empresa     	    		: Click Menor Preço Ltda
// * Script      	    			: usuarios.php
// * Programador 	    	: Renan Toniolo Rocha
// * Linguagem   	    	: PHP / HTML
// * Objetivo	 				: Faz o cadastro/excluir uma novo usuario no sistema
// * Data Criacao	    	: 21/07/2016
// * Ultima Atualizacao : 20/08/2016
// ************************************************************************************************************************
// importa esta class para fazer a conexao com o bd
include_once("bd_connection.class.php");

$bd = new bd_connection();

$usuarios = $bd->buscarUsuariosCadastrados();

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
                            Usuários
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="adm.php">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-user"></i> Usuários
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <form name="form_cidades" method="post" action="incluir_usuario.class.php" onSubmit="return validar_usuario(this)"  >
                <div class="form-group">
                     <p>Adicione ou Remova um usuário do sistema. </p>
                </div>
                <div class="form-group">
                    <label>Digite um email para o novo usuário:</label>
                     <input name="email" class="form-control" placeholder="Entre com um email para o usuário">
                </div>
                <div class="form-group">
                    <label>Digite uma senha para este novo usuário:</label>
                     <input type="password" name="senha"  class="form-control" placeholder="Entre com uma senha" maxlength="10">
                </div>
                <div class="form-group">
                    <label>Confirme a senha para este novo usuário:</label>
                     <input type="password" name="senha_conf"  class="form-control" placeholder="Confirme a senha" maxlength="10">
                </div>
                
                <button type="submit" class="btn btn-default">Enviar</button>
                 <button type="reset" class="btn btn-default">Limpar</button>
                 </form>
                 <h1 class="page-header">
                            Relação de Usuários
                 </h1>
                 <div class="col-lg-5">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Email usuário</th>
                                        <th>Excluir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                
                                while($linha = mysql_fetch_array($usuarios)) {
                                	
                                		echo "<tr>";
                                			echo "<td>$linha[1]</td>";
                                			echo "<td><a href='excluir_usuario.class.php?id_usuario=$linha[0]' >
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