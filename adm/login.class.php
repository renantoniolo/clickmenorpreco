<?php session_start(); 

// ***********************************************************************************
// * Empresa     	    	: Click Menor Preço Ltda
// * Script      	    		: login.class.php
// * Programador 	    : Renan Toniolo Rocha
// * Linguagem   	    	: PHP / SQL
// * Objetivo	 			: Verifica se o usuário exite
// * Data Criacao	    	: 27/05/2016
// * Ultima Atualizacao : 29/05/2016
// ***********************************************************************************
include_once("bd_connection.class.php");

include_once("session_control.class.php");


$user = $_POST["user"];
$password = $_POST["password"];

//instancia a classe de login
$l = new login($user, $password);

class login{
	
	// variaveis globais
	var $user;
	var $password;
	var $sessionControl;

	function login($_user, $_password){
		
		// recebemos os dados para login
		$this->user = $_user;
		$this->password = $_password;
		
		// instancia a classe que faz a sessao
		$this->sessionControl = new session_control();
		
		// vamos logar no site
		$this->logar();
	
	} 
	
	
	function logar(){
	
		$bd = new bd_connection();

		$sql = $bd->login($this->user,$this->password);
		
		if(mysql_num_rows($sql) > 0){ // estamos logados?
		
			// estamos logados!
			//pegamos a data e hora 
			$data_hora = date("d-m-Y H:i:s");
			
			// pego os valores vindo da base de dados
			while($linha = mysql_fetch_array($sql)){
			
					$id =$linha[0];
					$email = $linha[1]; 			
			}
			
			//criamos a sessao
			$this->sessionControl->_write(session_id(),$data_hora."|".$id."|".$email);
			
			// acessamos o adm
			echo"<script>window.open('adm.php','_self')</script>";
		}		
		else {
			
			// exibe a mensagem e volta para a tela de login
			echo"<script>window.alert('Usuario ou senha invalidos.')</script>";
			echo"<script>window.open('index.html','_self')</script>";
			
		}
		
	} 

}


?>