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
                    <li><a href="../automovel/automovel.html">Automóveis</a></li>
                    <li><a href="ocorrencias.html">Ocorrências</a></li>
				</ul>
			</nav>
		</div>

	</header>

	<main>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
		<script>
			jQuery(function($) {
				$("#data").mask("99/99/9999");
				
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

					<label for="nr_ocor">NÚMERO DA OCORRÊNCIA:</label>
					<input type="text" id="nr_ocor" name="nr_ocor" placeholder="Digite o numero da ocorrencia" class="input-padrao">

					<label for="data">DATA:</label>
					<input type="text" id="data" name="data" placeholder="99/99/9999" class="input-padrao">

					<label for="local">LOCAL:</label>
					<input type="text" id="local" name="local" placeholder="Digite o local da ocorrencia" class="input-padrao">

					<label for="descricao">DESCRIÇÃO:</label>
					<textarea id="descricao" name="descricao" placeholder="Descreva a ocorrencia" rows="5" required></textarea>

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