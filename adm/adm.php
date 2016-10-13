<? session_start();
// ***********************************************************************************************************************
// * Empresa     	    		: Click Menor Preço Ltda
// * Script      	    			: adm.php
// * Programador 	    	: Renan Toniolo Rocha
// * Linguagem   	    	: PHP / SQL
// * Objetivo	 				: Faz a administração do site
// * Data Criacao	    	: 20/06/2016
// * Ultima Atualizacao : 28/06/2016
// ************************************************************************************************************************

// importa a classe para gerenciar a session na base de dados
include("session_control.class.php");

// Garbage Collection (limpa session lixo)
$sessionControl->_clean(3000);

$vet_retorno = explode("|", $sessionControl->_read(session_id()));

$usuario_logado = $vet_retorno [2];

if($sessionControl->_read(session_id()) != ''){

// pego a pagina que vai abrir
$pagina = $_GET["pg"];

?>

</html><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Renan Toniolo Rocha" >

    <title>Admin - Click Menor Preço</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="js/validacaoAdm.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="adm.php">Admin - Click Menor Preço</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $usuario_logado;  ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="deslogar.php"><i class="fa fa-fw fa-power-off"></i> Sair </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li <?php if($pagina ==  0 ){  echo"class='active'";  } ?>>
                        <a href="adm.php?pg=0"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                    <li <?php if($pagina == 1 ){  echo"class='active'";  } ?>>
                        <a href="adm.php?pg=1"><i class="fa fa-fw fa-bar-chart-o"></i> Associados</a>
                    </li>
                     <li <?php if($pagina == 5 ){  echo"class='active'";  } ?>>
                        <a href="adm.php?pg=5"><i class="fa fa-fw fa-bar-chart-o"></i> Lista Associados</a>
                    </li>
                    <li <?php if($pagina == 2 ){  echo"class='active'";  } ?>>
                        <a href="adm.php?pg=2"><i class="fa fa-fw fa-table"></i> Categorias</a>
                    </li>
                    <li <?php if($pagina == 3 ){  echo"class='active'";  } ?> >
                        <a href="adm.php?pg=3"><i class="fa fa-fw fa-edit"></i> Cidades</a>
                    </li>
                    <li <?php if($pagina == 4 ){  echo"class='active'";  } ?> >
                        <a href="adm.php?pg=4"><i class="fa fa-user"></i> Usuários</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
						<!-- /Conteudo Site -->
						<?php

							switch($pagina){

								case 0:
        							include_once("home.php") ;
        						break;

        						case 1:
        							include_once("associados.php") ;
        						break;

        						case 2:
        							include_once("categorias.php") ;
        						break;

        						case 3:
        							include_once("cidades.php") ;
        						break;

        						case 4:
        							include_once("usuarios.php") ;
        						break;

								case 5:
        							include_once("lista_associados.php") ;
        						break;

        						case 6:
        							include_once("editar_categoria.php") ;
        						break;

        						case 7:
        							include_once("editar_associado.php") ;
        						break;

        						default:
        							include_once("home.php") ;
        						break;

							} // fim do switch

						?>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
<?php
}
else{
?>
</html><!DOCTYPE html>
<html lang="en">
<head>
<title>Admin - Click Menor Preço</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
</body>
</html>
<?php
echo"<script>window.open('index.html','_self')</script>";
}
?>
