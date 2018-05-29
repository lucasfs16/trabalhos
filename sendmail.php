<?php

$to = "leandromolina.martinez@gmail.com";
$nome = $_REQUEST['nome'];
$assunto = "Contato pelo site";
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$mensagem = $_REQUEST['mensagem'];

	$info = "<strong> Mensagem de Contato</strong><br> ";
	$info .= "<br><strong> Nome: </strong> $nome";
	$info .= "<br><strong> E-mail: </strong> $email";
	$info .= "<br><strong> Telefone: </strong> $telefone";
	$info .= "<strong> Mensagem: </strong> $mensagem";

	$header ="Content-type: text/html; charset= utf-8\n";
	$header .="From: $email Reply-to $email\n";
	

mail($to,$assunto,$info,$header);
header ("location:index.php?msg.enviado");


?>
