<?php
// ***********************************************************************************************************************
// * Empresa     	    		: Click Menor Preço Ltda
// * Script      	    			: editar_associado.php
// * Programador 	    	: Renan Toniolo Rocha
// * Linguagem   	    	: PHP / HTML
// * Objetivo	 				: Faz a edição de um associados no sistema
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

// busca as categorias cadastradas
$categorias2 = $bd->buscarCategorias();

// pego o id do associado que quero editar
$id = $_GET["id"];

// busco o associado
$associado = $bd->buscarAssociado($id);

while($linha = mysql_fetch_array($associado)) {
	
	$id = $linha[0];
	$nome = $linha[1];
	$razao_social = $linha[2];
	$cnpj =$linha[3];
	$rua =$linha[4];
	$numero = $linha[5];
	$complemento = $linha[6];
	$bairro = $linha[7];
	$cidade = $linha[8];
	$telefone = $linha[9];
	$waths = $linha[10];
	$email = $linha[11];
	$categoria =$linha[12];
	$categoria2 =$linha[13];
	$observacao =$linha[14];
	
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
                            Editar Associado - <? echo $nome; ?>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="adm.php">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Editar Associado
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <form name="form_associado" method="post" action="editar_associado.class.php" onSubmit="return validar_associado(this)" >
                <div class="form-group">
                     <p>Edição um associado no sistema. </p>
                     <input name="id" type="hidden" value="<?php echo $id;?>" >
                </div>
                <div class="form-group">
                    <label>Nome:</label>
                     <input name="nome" class="form-control" placeholder="Nome" value="<?php echo $nome;?>">
                </div>
                <div class="form-group">
                    <label>Razão Social:</label>
                     <input name="razao_social" class="form-control" placeholder="Razão Social" value="<?php echo $razao_social;?>">
                </div>
                <div class="form-group">
                    <label>CNPJ:</label>
                     <input name="cnpj" class="form-control" placeholder="CNPJ" maxlength="15" value="<?php echo $cnpj;?>">
                </div>
                <div class="form-group">
                    <label>Rua:</label>
                     <input name="rua" class="form-control" placeholder="Rua" value="<?php echo $rua;?>">
                </div>
                <div class="form-group">
                    <label>Número:</label>
                     <input name="numero" class="form-control" placeholder="Numero" value="<?php echo $numero;?>">
                </div>
                <div class="form-group">
                    <label>Complemento:</label>
                     <input name="complemento" class="form-control" placeholder="Complemento" maxlength="5" value="<?php echo $complemento;?>">
                </div>
                <div class="form-group">
                    <label>Bairro:</label>
                     <input name="bairro" class="form-control" placeholder="Bairro" value="<?php echo $bairro;?>">
                </div>
                <div class="form-group">
                    <label>Selecione uma Cidade:</label>
                       <select name="cidade" class="form-control">
                       <option  value="-">CIDADE</option>             
                      <?php 
								while($linha = mysql_fetch_array($cidades)){
									if($cidade == $linha[0]) {
										echo"<option  value='$linha[0]' selected='selected' >$linha[1]</option>";
									}
									else echo"<option  value='$linha[0]'>$linha[1]</option>";
								}                       
                       ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Telefone:</label>
                     <input name="telefone" class="form-control" placeholder="Telefone" size="10" maxlength="10" value="<?php echo $telefone;?>">
                </div>
                <div class="form-group">
                    <label>WhatsApp:</label>
                     <input name="waths" class="form-control" placeholder="WathsApp" size="10" maxlength="10" value="<?php echo $waths;?>">
                </div>
                <div class="form-group">
                    <label>E-mail:</label>
                     <input name="email" class="form-control" placeholder="e-mail" value="<?php echo $email;?>" >
                </div>
                <div class="form-group">
                    <label>Selecione uma Categoria:</label>
                       <select name="categoria" class="form-control">
                       <option  value="-">CATEGORIA</option>            
                       <?php 
								while($linha = mysql_fetch_array($categorias)){
									if($categoria == $linha[0]) {
										echo"<option  value='$linha[0]' selected='selected'>$linha[1]</option>";
									}
									else echo"<option  value='$linha[0]'>$linha[1]</option>";
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
									if($categoria2 == $linha[0]) {
										echo"<option  value='$linha[0]' selected='selected'>$linha[1]</option>";
									}
									else echo"<option  value='$linha[0]'>$linha[1]</option>";
								}                       
                       ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Observações:</label>
                    <textarea name="observacao" class="form-control" rows="3" ><?php echo $observacao;?></textarea>
               </div>
                <button type="submit" class="btn btn-default">Salvar Alterações</button>

                 </form>
</body>
</html>