<html>
<head>
<title>Dados do amigo inseridos!</title>
<meta charset="UTF-8" />
</head>
<body>
<?php
	$nome=$_GET['nome'];
	$mail=$_GET['mail'];
	$fone=$_GET['fone'];
	$aniver=$_GET['aniver'];

	if ($nome=="" or $mail=="" or $fone=="" or $aniver=="")
		print("Faltou preencher algum campo...");
	else
	{
		require("conecta.inc.php");
		$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
		print("Inserindo o amigo:<p>");
		mysqli_query($ok, "insert into amigos (nome, email, telefone, aniversario) values ('$nome', '$mail', '$fone', '$aniver')") or die ("Não é possível inserir amigo!");
		print("Amigo inserido com sucesso: <b>$nome</b>");
	}
?>
<p><a href="mostra_db.php">Mostrar</a>
</body>
</html>