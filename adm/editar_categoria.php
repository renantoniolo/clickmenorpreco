<?php
// ***********************************************************************************************************************
// * Empresa     	    		: Click Menor Preço Ltda
// * Script      	    			: editar_categoria.php
// * Programador 	    	: Renan Toniolo Rocha
// * Linguagem   	    	: PHP / HTML
// * Objetivo	 				: Faz a edição de categoria no sistema
// * Data Criacao	    	: 21/07/2016
// * Ultima Atualizacao : 28/07/2016
// ************************************************************************************************************************

// Recebe os valores
$id = $_GET["id_categoria"];
$nome = $_GET["nome"];


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
                            Editar Categoria - <?php echo $nome; ?>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="adm.php">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-table"></i> Editar Categoria
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <form name="form_categoria" method="post" action="editar_categoria.class.php" onSubmit="return validar_categoria(this)"   >
                <div class="form-group">
                     <p>Edite uma Categoria no sistema. </p>
                </div>
                <div class="form-group">
                    <label>Edite o nome da Categoria:</label>
                    <input name="id" type="hidden" value="<?php echo $id; ?>" >
                     <input  name="nome_categoria" class="form-control" placeholder="Entre com um nome de categoria" value="<?php echo $nome; ?>" >
                </div>
                
                <button type="submit" class="btn btn-default">Salvar Alteração</button>
         
                 </form>
</body>
</html>