<!DOCTYPE html>
<html>
	<title>PHP + SQL: Exemplo 1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./ppi-default.css">
	<body>
	<!-- Menu -->
	<div class="ppi-default-top">
	  <div class="ppi-default-bar ppi-default-white ppi-default-wide ppi-default-padding ppi-default-card-2">
	    <a href="index.php" class="ppi-default-bar-item ppi-default-button">PPI 1</a>
	    <!-- Float links -->
	    <div class="ppi-default-right ppi-default-hide-small">
	      <a href="#projects" class="ppi-default-bar-item ppi-default-button">Agenda</a>
	      <a href="#about" class="ppi-default-bar-item ppi-default-button">Sobre o trabalho</a>
	    </div>
	  </div>
	</div>
	<!-- Cabeçalho -->
	<header class="ppi-default-display-container ppi-default-content ppi-default-wide" style="max-width:1500px;" id="home">
	  <img class="imagem_aps" src="./images/logo_senac.png" alt="Architecture" width="1500" height="800">
	  <div class="ppi-default-display-middle ppi-default-margin-top ppi-default-center">
	    <h1 class="ppi-default-xxlarge ppi-default-text-white"><span class="ppi-default-padding ppi-default-black ppi-default-opacity-min"><b>BR</b></span> <span class="ppi-default-hide-small ppi-default-text-light-grey">Architects</span></h1>
	  </div>
	</header>

	<!-- Conteúdo -->
	<div class="ppi-default-content ppi-default-padding" style="max-width:1564px">
	<!-- Agenda -->
   	<div class="ppi-default-container ppi-default-padding-32" id="about">
	    <h3 class="ppi-default-border-bottom ppi-default-border-light-grey ppi-default-padding-16">Agenda</h3>
	    <p>

	    <?php
			header('Content-Type: text/html; charset=utf-8');
			require("conecta.inc.php");  //inclui o arquivo para conexão
			$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
			$resultado=mysqli_query($ok, "Select * from amigos;");
			print("<body bgcolor='white'><h1><center>Mostrando os amigos...</center></h1><p>");
			print("<table border='1' bordercolor='white' align='center'><tr><th class='border-h3' width='100'><b>Código </th>");
			print("<th class='border-h3' width='100'>Nome </th>");
			print("<th class='border-h3' width='200'>E-Mail </th>");
			print("<th class='border-h3' width='100'>Telefone </th>");
			print("<th class='border-h3' width='100'>Aniversário</b> </th>");
			print("<th class='border-h3'><b>Deletar</td><td class='border-h3'><b>Alterar</th></tr>");
			while ($linha=mysqli_fetch_array($resultado)) {
			   		$Codigo=$linha["codigo"];
			   		$Nome=$linha["nome"];
			   		$EMail=$linha["email"];
			   		$Telefone=$linha["telefone"];
			   		$Aniversario=$linha["aniversario"];
					$dia=substr($Aniversario,8);
					$mes=substr($Aniversario,5,-3);
					$ano=substr($Aniversario,0,-6);
			   		print("<tr><td><center>$Codigo </center></td>");
			   		print("<td>$Nome </td>");
			   		print("<td>$EMail </td>");
			   		print("<td>$Telefone </td>");
			   		print("<td>$dia/$mes/$ano </td>");  
					print("<td><a href='deletar.php?cod=$Codigo'>Deletar</a></td>");
					print("<td><a href='alterar.php?cod=$Codigo'>Alterar</a></td></tr>"); }
			print("</table>");
		?>
	<!-- Final do conteúdo-->
	</div>
		<!-- Rodapé -->
		<footer class="ppi-default-center ppi-default-blue ppi-default-padding-16">
		  <p>Curso de Análise e Desenvolvimentos de Sistemas</p>
		</footer>
	</body>
</html>
