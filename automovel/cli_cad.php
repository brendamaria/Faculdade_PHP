<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/style.css">
	<title>** SEGURADORA FACDF **</title>
</head>


<body>

	<header>
		<div class="caixa">
			<a href='../index.html'><img src="../img/logo_transparent.png"></a>
			<nav>
				<ul>
					<li><a href="../index.html">Home</a></li>
					<li><a href="clientes.html">Clientes</a></li>
					<li><a href="contato.html">Automóvel</a></li>
					<li><a href="contato.html">Ocorrências</a></li>
				</ul>
			</nav>
		</div>

	</header>
	<main>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
		<script>
			jQuery(function($) {
				$("#placa").mask("999.999.999/99");
				$("#tel").mask("99.99999.9999");
				$("#rg").mask("9999999999");
			})
		</script>

		<?php
		if (isset($_SESSION['msg'])) {
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>

		<section class="cli_cad">
			<h3 class="titulo-principal">CADASTRAR</h3>
			<div class="conteudo-cad">
				<form method="post" action="cli_pro.php">

					<label for="cod">CÓDIGO:</label>
					<input type="text" id="cod" name="cod" placeholder="Digite seu código" class="input-padrao"><br>

					<label for="placa">PLACA:</label>
					<input type="text" id="placa" name="placa" placeholder="Digite seu nome" class="input-padrao"><br>

					<label for="cpf">RENAVAN:</label>
					<input type="text" id="cpf" name="cpf" placeholder="999.999.999/99" id="cpf" class="input-padrao"><br>

					<label for="rg">FABRICANTE:</label>
					<input type="text" id="rg" name="rg" placeholder="9999999999" id="rg" class="input-padrao"><br>

					<label for="tel">ANO:</label>
					<input type="text" id="tel" name="tel" placeholder="99.99999.9999" id="tel" class="input-padrao"><br>

					<label for="tel">MODELO:</label>
					<input type="text" id="tel" name="tel" placeholder="99.99999.9999" id="tel" class="input-padrao"><br>

					<a><button style="background: #069cc2; border-radius: 6px; padding: 10px; cursor: pointer; color: #fff; border: none; font-size: 16px; margin: 0 25px 50px 0;">Cadastrar</button></a>
					<a href='./clientes.html'> <img src='../img/voltar.png' width='20' height='20'> </a>
				</form>
			</div>
		</section>
	</main>


	<footer>
		<img src="../img/logo-branco.png">
		<p class="copyright">&copy; Copyright - Brenda Maria - 2021</p>
	</footer>

</body>

</html>