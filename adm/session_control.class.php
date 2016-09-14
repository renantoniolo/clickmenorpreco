<?php
// ***********************************************************************************************************************
// * Empresa     	    	: Click Menor Preço Ltda
// * Script      	    	: session_control.class.php
// * Programador 	    	: Renan Toniolo Rocha
// * Linguagem   	    	: PHP / SQL
// * Objetivo	 			: Faz o controle da session no banco de dados
// * Observações			: Código implementado conforme referência encontada no site: http://phpsecurity.org/code/ch08-2
// * Data Criacao	    	: 20/04/2016
// * Ultima Atualizacao : 28/04/2016
// ************************************************************************************************************************

// importa esta class para fazer a conexao com o bd
include_once("bd_connection.class.php");

// instancio a classe que o controle de sessão na base de dados
$sessionControl = new session_control();


class session_control{
	
	
	// construtora da classe
	function session_control(){
		
		// abro a conexão com a base de dados
		$this->_open();
	
	}
	
	// método inultil, só para testar a orientação objeto ;)
	function _print(){
	
		echo "Class session_control ok.";	
	}

	function _open()
	{
   	global $_sess_db;
   	
   	// instancio minha class que faz comunicação com o banco de dados
   	 $_sess_db  = $bd = new bd_connection();
   	
   	// conecto na base de dados e retorno a conexão
   	//$_sess_db = $bd->conectar();
   	
	}

	function _close()
	{
    	global $_sess_db;
    
    	return mysql_close($_sess_db);
	}

	function _read($id)
	{
   	global $_sess_db;

    	$id = mysql_real_escape_string($id);

    	$sql = "SELECT data
            	FROM   SESSIONS
            	WHERE  id = '$id'";

    	if ($result = mysql_query($sql))
    	{
      	if (mysql_num_rows($result))
        	{
            $record = mysql_fetch_assoc($result);

            return $record['data'];
        	}
    	}

    	return '';
	}

	function _write($id, $data)
	{   
    	global $_sess_db;

    	$access = time();

    	$id = mysql_real_escape_string($id);
    	$access = mysql_real_escape_string($access);
    	$data = mysql_real_escape_string($data);

    	$sql = "REPLACE 
            	INTO    SESSIONS
            	VALUES  ('$id', '$access', '$data')";
	//echo $sql;
    	return mysql_query($sql);
	}

	function _destroy($id)
	{
    	global $_sess_db;
    
    	$id = mysql_real_escape_string($id);

    	$sql = "DELETE
            	FROM   SESSIONS
            	WHERE  id = '$id'";

    	return mysql_query($sql);
	}

	function _clean($max)
	{
    	global $_sess_db;
    
    	$old = time() - $max;
    	$old = mysql_real_escape_string($old);

    	$sql = "DELETE
            	FROM   SESSIONS
            	WHERE  access < '$old'";

    	return mysql_query($sql);
	}


}


?>