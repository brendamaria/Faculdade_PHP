<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/style.css">
	<title>CONSULTAR AUTOMÓVEL</title>
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

	<main class="main-cons1">
		<section class="pagina-padrao">
			<h3 class="titulo-principal"> CONSULTA CÓDIGO NO BANCO DE DADOS - AUTOMÓVEL</h3>
			<div class="formulario">
				<?php
				if (isset($_SESSION['msg'])) {
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
				?>
				<form method="POST" action="cli_alt_cons2.php">
					<label> CÓDIGO : </label>
					<input class="input-padrao-nb" id="cod" type="text" name="cod" placeholder="Digite o codigo do automóvel">
					<a href="cli_alt_cons2.php"><button style="background: #069cc2; border-radius: 6px; padding: 10px; cursor: pointer; color: #fff; border: none; font-size: 16px;">Consultar</button></a>
					<a href="./automovel.html"> <img src="../img/voltar.png" width="20" height="20"> </a>
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