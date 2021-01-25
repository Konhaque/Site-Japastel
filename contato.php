<?php
function enviaMensagem() {
	$nome     =   $_POST['nome']; //pega os dados que foi digitado no ID name.
	$telefone  =   $_POST['telefone']; //pega os dados que foi digitado no ID telefone.
	$email    =   $_POST['email']; //pega os dados que foi digitado no ID email.
	$comentario  =   $_POST['comentario']; //pega os dados que foi digitado no ID message.

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers  = "From: kaiquesantos2021@gmail.com\r\n";
	$headers .= "Reply-To: $email\r\n";

	$corpo = "Formulário de contato enviado\n";
	$corpo .= "Nome: " . $nome . "\n";
	$corpo .= "Email: " . $email . "\n";
	$corpo .= "Telefone: " . $telefone . "\n";
	$corpo .= "Comentários: " . $comentario . "\n";
	$corpo = mb_convert_encoding($corpo, "ISO-8859-1","AUTO");
	$assunto = mb_convert_encoding('Contato '.$nome, "ISO-8859-1","AUTO");

	$email_to = 'kaiquesantos2021@gmail.com'; //substitua este email pelo seu email do seu site.

	$status = mail($email_to, $assunto, $corpo, $headers); //enviando o email.

	if($status) {
		echo "<script> alert('Formulário enviado com sucesso.'); </script>"; //verifica se foi enviado o email com sucesso.
	} else {
		echo "<script> alert('Falha ao enviar o Formulário.'); </script>"; //se houve algum erro de envio.
	}
	echo "<script> window.location.href = ''; </script>"; //aqui você coloca uma página que será redirecionada após o envio do formulário, dei um exemplo do meu site.
	return true;
}

if (!empty($_POST['nome'])) {
	enviaMensagem();
}
?>