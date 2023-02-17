<?php

if(isset($_POST['email'])) && !empty($_POST['email']){

$nome = addslashes($_POST['name']);
$sobrenome = addslashes($_POST['sobrenome']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);

$to = "monitor01@klebsoncordeiro.site" && "monitor02@klebsoncordeiro.site";
$subject = "Monitor - Curso de Bio";
$body = "Nome: ".$nome."\r\n".
"Sobrenome: ".$sobrenome."\r\n".
"email: ".$email."\r\n".
"telefone: ".$telefone."\r\n".
$header = "monitor01@klebsoncordeiro.site" && "monitor02@klebsoncordeiro.site"."\r\n"
."Reply-To".$email."\e\n"
."X=Mailer:php/".phpversion();
if(mail($to,$subject,$body,$header)){
  echo("Email enviado com sucesso");
}else{
  echo("O Email não pode ser enviado");
}
}
?>