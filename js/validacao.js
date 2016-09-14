// ***********************************************************************************************************************
// * Empresa     	    		: Click Menor Preço Ltda
// * Script      	    			: validar.js
// * Programador 	    	: Renan Toniolo Rocha
// * Linguagem   	    	: PHP / HTML
// * Objetivo	 				: Verifica se os campos do formulario estao preenchidos
// * Data Criacao	    	: 10/08/2016
// * Ultima Atualizacao : 20/08/2016
// ************************************************************************************************************************


function validar()
{
		
		if (document.forms[0].nome.value == "") 
			{ // verifica se o campo está vazio
			alert('Por favor, informe um Nome.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].nome.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			} 	
		// fim
		else if (document.forms[0].email.value == "") 
			{ // verifica se o campo está vazio
			alert('Por favor, informe um e-mail.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].email.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			} 
		// fim
		else if (document.forms[0].dd.value == "") 
			{ // verifica se o campo está vazio
			alert('Por favor, informe um código de área.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].dd.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			} 
		// fim
		else if (document.forms[0].telefone.value == "") 
			{ // verifica se o campo está vazio
			alert('Por favor, informe um Telefone.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].telefone.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			} 
		// fim
		else if (document.forms[0].cidade.value == "") 
			{ // verifica se o campo está vazio
			alert('Por favor, informe uma cidade.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].cidade.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			} 
		// fim
}

function validar_fale_conosco(){

	if (document.forms[0].nome.value == "") 
			{ // verifica se o campo está vazio
			alert('Por favor, informe um Nome.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].nome.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			} 	
		// fim
		else if (document.forms[0].email.value == "") 
			{ // verifica se o campo está vazio
			alert('Por favor, informe um e-mail.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].email.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			} 
		// fim
		else if (document.forms[0].assunto.value == "") 
			{ // verifica se o campo está vazio
			alert('Por favor, informe um Assunto.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].assunto.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			} 
		// fim
		else if (document.forms[0].text.value == "") 
			{ // verifica se o campo está vazio
			alert('Por favor, informe um Texto.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].texto.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			}

}


