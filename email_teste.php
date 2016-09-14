<?php


$quebra_linha = "\n";
$emailsender="pesquisamenorpreco@clickmenorpreco.tempsite.ws";
$emailremetente    = "pesquisamenorpreco@clickmenorpreco.tempsite.ws";
// para que sera enviado
$emaildestinatario = "renantoniolo@gmail.com";
$assunto = "Procuro ";
$mensagemHTML = "Boa Tarde"; 

/* Montando o cabeçalho da mensagem */
$headers = "MIME-Version: 1.1".$quebra_linha;
$headers .= "Content-type: text/html; charset=iso-8859-1".$quebra_linha;
// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
$headers .= "From: ".$emailsender.$quebra_linha;
$headers .= "Return-Path: " . $emailsender . $quebra_linha;



if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix
    $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
    mail($emaildestinatario, $assunto, $mensagemHTML, $headers );
}


?>