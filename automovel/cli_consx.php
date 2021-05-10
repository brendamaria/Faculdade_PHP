<?php
session_start();
include_once("../conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <title> CONSULTA DE AUTOMÓVEIS </title>
</head>

<body>
    <header>
        <div class="caixa">
            <a href='../index.html'><img src="../img/logo_transparent.png"></a>
            <nav>
                <ul>
                    <li><a href="../index.html">Home</a></li>
					<li><a href="../clientes/clientes.html">Clientes</a></li>
					<li><a href="automovel.html">Automóveis</a></li>
					<li><a href="../ocorrencias/ocorrencias.html">Ocorrências</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>

        <h1 class="titulo-principal"> LISTA DE AUTOMÓVEIS CADASTRADOS NA SEGURADORA</h1>

        <section class="form-centro">
            <?php
            $result_veiculo = "SELECT cod,placa,renavan,fabricante,modelo,ano FROM e2_veiculos";
            $resultado_veiculo = mysqli_query($conn, $result_veiculo);

            while ($row_veiculo = mysqli_fetch_assoc($resultado_veiculo)) {
                echo "CÓDIGO......:" . $row_veiculo['cod'] . "<br>";
                echo "PLACA.......:" . $row_veiculo['placa'] . "<br>";
                echo "RENAVAM.....:" . $row_veiculo['renavan'] . "<br>";
                echo "FABRICANTE..:" . $row_veiculo['fabricante'] . "<br>";
                echo "MODELO......:" . $row_veiculo['modelo'] . "<br>";
                echo "ANO.........:" . $row_veiculo['ano'] . "<br>";
                echo "----------------------------------------<br>";
            }
            ?>
        </section>



        <a style="margin: 50%;" href="./cli_cons1.php"> <img src="../img/voltar.png" width="20" height="20"> </a>
    </main>

    <footer>
        <img src="../img/logo-branco.png">
        <p class="copyright">&copy; Copyright - Brenda Maria - 2021</p>
    </footer>

</body>

</html>