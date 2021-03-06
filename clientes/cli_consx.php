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
    <title> CONSULTA DE CLIENTES </title>
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

    <main>

        <h1 class="titulo-principal"> LISTA DE CLIENTES CADASTRADOS NA SEGURADORA</h1>

        <section class="form-centro">
            <?php
            $result_cliente = "SELECT cod,nome,cpf,rg,tel FROM e1_cliente";
            $resultado_cliente = mysqli_query($conn, $result_cliente);

            while ($row_cliente = mysqli_fetch_assoc($resultado_cliente)) {
                echo "CÓDIGO......:" . $row_cliente['cod'] . "<br>";
                echo "NOME........:" . $row_cliente['nome'] . "<br>";
                echo "CPF.........:" . $row_cliente['cpf'] . "<br>";
                echo "RG..........:" . $row_cliente['rg'] . "<br>";
                echo "TELEFONE....:" . $row_cliente['tel'] . "<br>";
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