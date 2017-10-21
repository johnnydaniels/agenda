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
	    <a href="#home" class="ppi-default-bar-item ppi-default-button">PPI 1</a>
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
	<img src="./images/friends.jpg" alt="Friends">
   	<div class="ppi-default-container ppi-default-padding-32" id="about">
	    <h3 class="ppi-default-border-bottom ppi-default-border-light-grey ppi-default-padding-16">Agenda</h3>
	    <p>Esta agenda fictícia é apenas para testes. O sistema utiliza CSS, PHP e MySQL.
	    </p>
	  </div>
    <div class="ppi-default-container">
    <table style="width: 40%">
	    <form action="inserir.php" method="GET" >
	 	<tr>
	 		<td colspan="4"><h3>Dados do contato</h3></td> 			
		</tr>
	 	<tr>
	 		<td>Nome:</th>
			<td><input name="nome" type="text"> </th>
		</tr>
		<tr>
	 		<td>E-mail:</th>
			<td><input name="mail" type="text"> </th>
		</tr>
		<tr>
	 		<td>Telefone:</th>
			<td><input name="fone" type="text"> </th>
		</tr>
	 	<tr>
	 		<td>Data de Nascimento:</th>
			<td><input type="date" name="aniver"></th>
		</tr>

		<tr>
	 		<td>Departamento:</th>
			<td><select name="depto">
				<option value="depto1">Departamento 1</option>
				<option value="depto2">Departamento 2</option>
				</select>
			</td>
		</tr>
	</table>
	</div>
	<tr>
		<td><input type="submit" name="enviar" value="Enviar"></td>	
	</tr>
		</form>
	</table>
	<!-- Final do conteúdo-->
	</div>
	<!-- Rodapé -->
		<footer class="ppi-default-center ppi-default-blue ppi-default-padding-16">
		  <p>Curso de Análise e Desenvolvimentos de Sistemas</p>
		</footer>
	</body>
</html>
