// ***********************************************************************************************************************
// * Empresa     	    		: Click Menor Preço Ltda
// * Script      	    			: validarAdm.js
// * Programador 	    	: Renan Toniolo Rocha
// * Linguagem   	    	: PHP / HTML
// * Objetivo	 				: Verifica se os campos do formulario estao preenchidos
// * Data Criacao	    	: 10/08/2016
// * Ultima Atualizacao : 20/08/2016
// ************************************************************************************************************************


function validar_associado()
{
		
		if (document.forms[0].nome.value == "") 
			{ // verifica se o campo está vazio
			alert('Por favor, informe um Nome.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].nome.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			} 	
		// fim
		else if (document.forms[0].cnpj.value == "") 
			{ // verifica se o campo está vazio
			alert('Por favor, informe um CNPJ.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].cnpj.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			} 
		// fim
		else if (document.forms[0].rua.value == "") 
			{ // verifica se o campo está vazio
			alert('Por favor, informe uma rua.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].rua.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			} 
		// fim
		else if (document.forms[0].numero.value == "") 
			{ // verifica se o campo está vazio
			alert('Por favor, informe um numero.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].numero.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			} 
		// fim
		else if (document.forms[0].bairro.value == "") 
			{ // verifica se o campo está vazio
			alert('Por favor, informe um bairro.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].bairro.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			} 
		// fim
		else if (document.forms[0].telefone.value == "") 
			{ // verifica se o campo está vazio
			alert('Por favor, informe um telefone.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].telefone.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			} 
		// fim
		else if (document.forms[0].waths.value == "") 
			{ // verifica se o campo está vazio
			alert('Por favor, informe um numero do wathsApp.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].waths.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			} 
		// fim
		else if (document.forms[0].email.value == "") 
			{ // verifica se o campo está vazio
			alert('Por favor, informe um email.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].email.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			} 
		// fim
		else if (document.forms[0].cidade.value == "-") 
			{ // verifica se o campo está vazio
			alert('Por favor, informe uma cidade.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].cidade.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			}
		// fim
		else if (document.forms[0].categoria.value == "-") 
			{ // verifica se o campo está vazio
			alert('Por favor, informe uma categoria.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].categoria.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			} 
			// fim
		
}

function validar_usuario(){

	if (document.forms[0].email.value == "") 
			{ // verifica se o campo está vazio
			alert('Por favor, informe um email.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].email.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			} 	
		// fim
		else if (document.forms[0].senha.value == "") 
			{ // verifica se o campo está vazio
			alert('Por favor, informe uma senha.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].senha.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			} 
		// fim
		else if (document.forms[0].senha.value != document.forms[0].senha_conf.value) 
			{ // verifica se o campo está vazio
			alert('As senhas não conferem.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].senha.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			}
			//fim

}

function validar_cidade(){

	if (document.forms[0].nome_cidade.value == "") 
			{ // verifica se o campo está vazio
			alert('Por favor, informe um nome para a Cidade.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].nome_cidade.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			} 	
		// fim
		else if (document.forms[0].estado.value == "-") 
			{ // verifica se o campo está vazio
			alert('Por favor, informe um estado.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].estado.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			} 
		// fim
		else if (document.forms[0].cod_area.value == "") 
			{ // verifica se o campo está vazio
			alert('Por favor, informe um Cod. Area.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].cod_area.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			} 

}

function validar_categoria(){

		if (document.forms[0].nome_categoria.value == "") 
			{ // verifica se o campo está vazio
			alert('Por favor, informe um nome para esta Categoria.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].nome_categoria.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			} 	
		// fim
		else if (document.forms[0].descricao.value == "-") 
			{ // verifica se o campo está vazio
			alert('Por favor, informe uma descricao.'); // mensagem exibida se o campo não for preenchido
			document.forms[0].descricao.focus(); // coloque esse linha no script fazendo referência ao formulário e ao campo com foco //	
			return false;
			} 
		// fim

}


