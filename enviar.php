<html>

<head>

<title> </title>

</head>
<body>
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
?>
<?php
$to = "vendas@japastel.ind.br";
$subject = "$subject";
$message = "<strong>Nome</strong> $name <br /> <br /><strong> E-mail:</strong> $email <br /><br /><strong>Assunto:</strong> $subject<br /><br /> <strong>Mensagem:</strong> $message";
$header = "MIME-Version: 1.0\n";
$header .= "Content-type: text/html;charset=iso-8859-1\n";
$header .= "From: $email\n";
mail($to, $subject, $message, $header);
echo "<script> window.location.href = 'index.html'; </script>";
?>
</body>
</html>