<html>
<head>
<title>Dados a deletar do amigo!</title>
<meta charset="UTF-8" />
</head>
<body>
<?php
	$cod=$_GET['cod'];
	require("conecta.inc.php");
	$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
	$result=mysqli_query($ok, "select * from amigos where codigo='$cod'") or die ("Não é possível retornar dados do amigo!");
	$linha=mysqli_fetch_array($result);
	$Codigo=$linha["codigo"];
	$Nome=$linha["nome"];
	$EMail=$linha["email"];
	$Telefone=$linha["telefone"];
	$Aniversario=$linha["aniversario"];
	print("<h3>Deletando o amigo:</h3><p>");
	print("Código: $Codigo<br>");
   	print("Nome: <b>$Nome</b><br>");
   	print("E-Mail: $EMail<br>");
   	print("Telefone: $Telefone<br>");
   	print("Aniversário: $Aniversario");
?>
<form action="confirma_deletar.php" method="get">
<input type="hidden" name="cod_del" value="<?php print($Codigo)?>">
<br><input type="submit" value="Deletar Dados">
</form>
<p><a href="mostra_db.php">Cancelar e voltar</a>
</body>
</html>