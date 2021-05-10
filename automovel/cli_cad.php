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
					<li><a href="../clientes/clientes.html">Clientes</a></li>
					<li><a href="automovel.html">Automóvel</a></li>
					<li><a href="../ocorrencias/ocorrencias.html">Ocorrências</a></li>
				</ul>
			</nav>
		</div>

	</header>

	<main>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
		<script>
			jQuery(function($) {
				$("#placa").mask("ABC-9999");
				$("#renavan").mask("99999999999");
				$("#placa").mask("aaa-9999");
				$("#ano").mask("9999");
			})
		</script>

		<?php
		if (isset($_SESSION['msg'])) {
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>

		<section class="cli_cad">
			<h3 class="titulo-principal">Cadastrar</h3>
			<div class="formulario">
				<form method="post" action="cli_pro.php">

					<label for="cod">CÓDIGO:</label>
					<input type="text" id="cod" name="cod" placeholder="Digite seu código" class="input-padrao">

					<label for="placa">PLACA:</label>
					<input type="text" id="placa" name="placa" placeholder="ABC-9999" class="input-padrao">

					<label for="renavan">RENAVAM:</label>
					<input type="text" id="renavan" name="renavan" placeholder="99999999999" class="input-padrao">

					<label for="fabricante">FABRICANTE:</label>
					<input type="text" id="fabricante" name="fabricante" placeholder="Digite o fabricante do veículo" class="input-padrao">

					<label for="ano">ANO:</label>
					<input type="text" id="ano" name="ano" placeholder="9999" class="input-padrao">

					<label for="modelo">MODELO:</label>
					<input type="text" id="modelo" name="modelo" placeholder="Digite o modelo do veículo" class="input-padrao">

					<a><button style="background: #069cc2; border-radius: 6px; padding: 10px; cursor: pointer; color: #fff; border: none; font-size: 16px; margin: 0 25px 50px 0;">Cadastrar</button></a>
					<a href="./automovel.htm"> <img src="../img/voltar.png" width='20' height='20'> </a>
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