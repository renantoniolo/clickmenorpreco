<?
// ***********************************************************************************************************************
// * Empresa     	    		: Click Menor Preço Ltda
// * Script      	    			: msgm_excluir_associado.php
// * Programador 	    	: Renan Toniolo Rocha
// * Linguagem   	    	: PHP / HTML
// * Objetivo	 				: Exibe uma mensagem se deseja excluir o associado
// * Data Criacao	    	: 10/09/2016
// * Ultima Atualizacao : 10/09/2016
// ************************************************************************************************************************
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Excluir Associado</title>
<script>

var ret = confirm("Deseja excluir o Associado '<? echo $_GET['nome']; ?>' ?");
if (ret == true) { // ok, vamos excluir
    window.open('excluir_associado.class.php?id_associado=<? echo $_GET['id_associado']; ?>&excluir=true','_parent');
} else { // não vamos excluir
    window.open('adm.php?pg=5','_self');
}

</script>
</head>

<body>
</body>
</html>