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
    <title>** CONSULTA VEÍCULO POR CÓDIGO **</title>
</head>

<body>
    <header>
        <div class="caixa">
            <a href='../index.html'><img src="../img/logo_transparent.png"></a>
            <nav>
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="clientes.html">Clientes</a></li>
                    <li><a href="../automovel/automovel.html">Automóvel</a></li>
                    <li><a href="../ocorrencias/ocorrencias.html">Ocorrências</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <main class="main-cons1">
        <h1 class="titulo-principal">Veículo Selecionado</h1>

        <section class="form-centro">
            <?php

            $cod = filter_input(INPUT_POST, 'cod', FILTER_SANITIZE_STRING);

            $result_veiculo = "SELECT cod,placa,renavan,fabricante,modelo,ano FROM e2_veiculos WHERE COD = $cod";
            $resultado_veiculo = mysqli_query($conn, $result_veiculo);

            if ($row_veiculo = mysqli_fetch_assoc($resultado_veiculo)) {
                echo "CÓDIGO......:" . $row_veiculo['cod'] . "<br>";
                echo "PLACA.......:" . $row_veiculo['placa'] . "<br>";
                echo "RENAVAM.....:" . $row_veiculo['renavan'] . "<br>";
                echo "FABRICANTE..:" . $row_veiculo['fabricante'] . "<br>";
                echo "MODELO......:" . $row_veiculo['modelo'] . "<br>";
                echo "ANO.........:" . $row_veiculo['ano'] . "<br>";
            } else {
                echo "<h1 class='texto-confirmacao-e'> Veículo não existe!!!!!</h1>";
            }
            ?>

            <a style="margin: 50%;" href="./cli_cons1.php"> <img src="../img/voltar.png" width="20" height="20"> </a>

        </section>

    </main>

    <footer>
        <img src="../img/logo-branco.png">
        <p class="copyright">&copy; Copyright - Brenda Maria - 2021</p>
    </footer>

</body>

</html>