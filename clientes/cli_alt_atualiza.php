<?php
session_start();
include_once("../conexao.php");
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/style.css">
	<title>** ATUALIZAÇÃO DE DADOS DO CLIENTE **</title>
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

	<main class="main-cons1">
		<section class="pagina-padrao">
			<h3 class="titulo-principal">ATUALIZAÇÃO DE DADOS DO CLIENTE</h3>
			<div class="formulario">
				<?php
	
				$cod = $_POST['cod'];
				$nome = $_POST['nome'];
				$cpf = $_POST['cpf'];
				$rg = $_POST['rg'];
				$tel = $_POST['tel'];
	
				$result_cliente = "UPDATE e1_cliente SET cod='$cod',nome='$nome',cpf='$cpf',rg='$rg',tel='$tel' WHERE COD='$cod'";
				$resultado_cliente = mysqli_query($conn, $result_cliente);
				?>
	
				<form method="POST" name="Alterar_cliente" action="cli_alt_cons.php">
	
					<label> Fazer nova Alteração ?</label>
					<a><button style='background: #069cc2; border-radius: 6px; padding: 10px; cursor: pointer; color: #fff; border: none; font-size: 16px; margin: 0 25px 50px 0;'>Nova Atualização</button></a>
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