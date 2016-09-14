<?php
// ***********************************************************************************************************************
// * Empresa     	    		: Click Menor Preço Ltda
// * Script      	    			: associados.php
// * Programador 	    	: Renan Toniolo Rocha
// * Linguagem   	    	: PHP / HTML
// * Objetivo	 				: Faz o cadastro de um novo associados no sistema
// * Data Criacao	    	: 21/07/2016
// * Ultima Atualizacao : 28/07/2016
// ************************************************************************************************************************
// importa esta class para fazer a conexao com o bd
include_once("bd_connection.class.php");

$bd = new bd_connection();

// busca as cidades cadastradas
$cidades = $bd->buscarCidadesCadastradas();

// busca as categorias cadastradas
$categorias = $bd->buscarCategorias();
// busca as categorias cadastradas 2
$categorias2 = $bd->buscarCategorias();

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
                            Associado
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="adm.php">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Associado
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <form name="form_associado" method="post" action="incluir_associado.class.php" onSubmit="return validar_associado(this)" >
                <div class="form-group">
                     <p>Adicione um novo associado no sistema. </p>
                </div>
                <div class="form-group">
                    <label>Nome:</label>
                     <input name="nome" class="form-control" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label>Razão Social:</label>
                     <input name="razao_social" class="form-control" placeholder="Razão Social">
                </div>
                <div class="form-group">
                    <label>CNPJ:</label>
                     <input name="cnpj" class="form-control" placeholder="CNPJ" maxlength="15">
                </div>
                <div class="form-group">
                    <label>Rua:</label>
                     <input name="rua" class="form-control" placeholder="Rua">
                </div>
                <div class="form-group">
                    <label>Número:</label>
                     <input name="numero" class="form-control" placeholder="Numero">
                </div>
                <div class="form-group">
                    <label>Complemento:</label>
                     <input name="complemento" class="form-control" placeholder="Complemento" maxlength="5">
                </div>
                <div class="form-group">
                    <label>Bairro:</label>
                     <input name="bairro" class="form-control" placeholder="Bairro">
                </div>
                <div class="form-group">
                    <label>Selecione uma Cidade:</label>
                       <select name="cidade" class="form-control">
                       <option  value="-">CIDADE</option>             
                      <?php 
								while($linha = mysql_fetch_array($cidades)){
									echo"<option  value='$linha[0]'>$linha[1]</option>";
								}                       
                       ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Telefone:</label>
                     <input name="telefone" class="form-control" placeholder="Telefone" size="10" maxlength="10">
                </div>
                <div class="form-group">
                    <label>WhatsApp:</label>
                     <input name="waths" class="form-control" placeholder="WathsApp" size="10" maxlength="10">
                </div>
                <div class="form-group">
                    <label>E-mail:</label>
                     <input name="email" class="form-control" placeholder="e-mail">
                </div>
                <div class="form-group">
                    <label>Selecione uma Categoria:</label>
                       <select name="categoria" class="form-control">
                       <option  value="-">CATEGORIA</option>            
                       <?php 
								while($linha = mysql_fetch_array($categorias)){
									echo"<option  value='$linha[0]'>$linha[1]</option>";
								}                       
                       ?>
                    </select>
                </div>
               <div class="form-group">
                    <label>Selecione uma Segunda Categoria:</label>
                       <select name="categoria2" class="form-control">
                       <option  value="-">CATEGORIA</option>            
                       <?php 
								while($linha = mysql_fetch_array($categorias2)){
									echo"<option  value='$linha[0]'>$linha[1]</option>";
								}                       
                       ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Observações:</label>
                    <textarea name="observacao" class="form-control" rows="3" ></textarea>
               </div>
                <button type="submit" class="btn btn-default">Enviar</button>
                 <button type="reset" class="btn btn-default">Limpar</button>
                 </form>
</body>
</html>