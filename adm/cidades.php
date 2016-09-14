<?php
// ***********************************************************************************************************************
// * Empresa     	    		: Click Menor Preço Ltda
// * Script      	    			: cidades.php
// * Programador 	    	: Renan Toniolo Rocha
// * Linguagem   	    	: PHP / HTML
// * Objetivo	 				: Faz o cadastro de uma nova cidade no sistema
// * Data Criacao	    	: 21/07/2016
// * Ultima Atualizacao : 28/07/2016
// ************************************************************************************************************************
// importa esta class para fazer a conexao com o bd
include_once("bd_connection.class.php");

$bd = new bd_connection();

$cidades = $bd->buscarCidadesCadastradas();

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
                            Cidades
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="adm.php">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Cidades
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <form name="form_cidades" method="post" action="incluir_cidade.class.php" onSubmit="return validar_cidade(this)"  >
                <div class="form-group">
                     <p>Adicione ou Remova uma Cidade no sistema. </p>
                </div>
                <div class="form-group">
                    <label>Digite um nome para a cidade:</label>
                     <input name="nome_cidade" class="form-control" placeholder="Entre com um nome de cidade">
                </div>
                <div class="form-group">
                    <label>Selecione um Estado:</label>
                        <select name="estado" class="form-control">
                        <option  value="-">-----</option>                 
                          <option  value="AC">Acre - AC</option>
								<option  value="AL">Alagoas - AL</option>
								<option  value="AP">Amapá - AP</option>
								<option  value="AM">Amazonas - AM</option>
								<option  value="BA">Bahia  - BA</option>
								<option  value="CE">Ceará - CE</option>
								<option  value="DF">Distrito Federal  - DF</option>
								<option  value="ES">Espírito Santo - ES</option>
								<option  value="GO">Goiás - GO</option>
								<option  value="MA">Maranhão - MA</option>
								<option  value="MT">Mato Grosso - MT</option>
								<option  value="MS">Mato Grosso do Sul - MS</option>
								<option  value="MG">Minas Gerais - MG</option>
								<option  value="PA">Pará - PA</option>
								<option  value="PB">Paraíba - PB</option>
								<option  value="PR">Paraná - PR</option>
								<option  value="PE">Pernambuco - PE</option>
								<option  value="PI">Piauí - PI</option>
								<option  value="RJ">Rio de Janeiro - RJ</option>
								<option  value="RN">Rio Grande do Norte - RN</option>
								<option  value="RS">Rio Grande do Sul - RS</option>
								<option  value="RO">Rondônia - RO</option>
								<option  value="RR">Roraima - RR</option>
								<option  value="SC">Santa Catarina - SC</option>
								<option  value="SP">São Paulo - SP</option>
								<option  value="SE">Sergipe - SE</option>
								<option  value="TO">Tocantins - TO</option>
                      </select>
                </div>
                <div class="form-group">
                    <label>Digite um Código de Área para a Cidade:</label>
                     <input name="cod_area" class="form-control" placeholder="Código de área" size="10" maxlength="2">
                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
                 <button type="reset" class="btn btn-default">Limpar</button>
                 </form>
                 <h1 class="page-header">
                            Relação de Cidades
                 </h1>
                 <div class="col-lg-6">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Cidade / UF</th>
                                        <th>Código Área</th>
                                        <th>Excluir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                
                                while($linha = mysql_fetch_array($cidades)) {
                                	
                                		echo "<tr>";
                                			echo "<td>".$linha[1]." - ".$linha[2]."</td>";
                                			echo "<td>$linha[3]</td>";
                                			echo "<td><a href='excluir_cidade.class.php?id_cidade=$linha[0]' >
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