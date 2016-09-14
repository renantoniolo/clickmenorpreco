<?php
// ***********************************************************************************************************************
// * Empresa     	    		: Click Menor Preço Ltda
// * Script      	    			: home.php
// * Programador 	    	: Renan Toniolo Rocha
// * Linguagem   	    	: PHP / HTML
// * Objetivo	 				: Tela de boas vindas do sistema
// * Data Criacao	    	: 21/07/2016
// * Ultima Atualizacao : 28/07/2016
// ************************************************************************************************************************
// importa esta class para fazer a conexao com o bd
include_once("bd_connection.class.php");

$bd = new bd_connection();

//Buscar todos os Associados
$associados = $bd->buscarTodosAsssociados(10000,0);

// Busca as categorias
$categorias = $bd->buscarCategorias();

// Busca as cidades
$cidades = $bd->buscarCidadesCadastradas();


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>
<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Home <small>Click Menor Peço</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Home
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  Bem vindo <strong><?php echo $usuario_logado;  ?> </strong>. No momento o <b>Click Menor Preço</b> conta com
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo mysql_num_rows($associados);?></div>
                                        <div>Associados</div>
                                    </div>
                                </div>
                            </div>
                            <a href="adm.php?pg=5">
                                <div class="panel-footer">
                                    <span class="pull-left">+ Detalhes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo mysql_num_rows($categorias); ?></div>
                                        <div>Categorias</div>
                                    </div>
                                </div>
                            </div>
                            <a href="adm.php?pg=2">
                                <div class="panel-footer">
                                    <span class="pull-left">+ Detalhes </span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
						 <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo mysql_num_rows($cidades); ?></div>
                                        <div>Cidades</div>
                                    </div>
                                </div>
                            </div>
                            <a href="adm.php?pg=3">
                                <div class="panel-footer">
                                    <span class="pull-left">+ Detalhes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            
</body>
</html>