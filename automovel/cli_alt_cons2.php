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
    <title>** Consulta de automóvel para alteração **</title>
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
            <section class="cli_cad">
                <h3 class="titulo-principal">Alteração de dados do automóvel</h3>
                <?php
                    $cod = filter_input(INPUT_POST, 'cod', FILTER_SANITIZE_STRING);

                    $result_veiculo = "SELECT cod,placa,renavan,fabricante,modelo,ano FROM e2_veiculos WHERE COD = $cod";
                    $resultado_veiculo = mysqli_query($conn, $result_veiculo);
                ?>
                <div class="formulario">
                    <form method="POST" name="Alterar_cliente" action="cli_alt_atualiza.php">
                        <?php
                            if ($row_veiculo = mysqli_fetch_assoc($resultado_veiculo)) {

                                echo "<Label for='cod'>CÓDIGO:</Label>
                                    <input class='input-padrao' id='cod' name='cod' type='number' placeholder='" . $row_veiculo['cod'] . "'>";
                                echo "<Label for='placa'>PLACA:</Label>
                                    <input class='input-padrao' id='placa' name='placa' type='text' placeholder='" . $row_veiculo['placa'] . "'>";
                                echo "<Label for='renavan'>RENAVAM:</Label>
                                    <input class='input-padrao' id='renavan' name='renavan' type='number' placeholder='" . $row_veiculo['renavan'] . "'>";
                                echo "<Label for='fabricante'>FABRICANTE:</Label>
                                    <input class='input-padrao' id='fabricante' name='fabricante' type='text' placeholder='" . $row_veiculo['fabricante'] . "'>";
                                echo "<Label for='modelo'>MODELO:</Label>
                                    <input class='input-padrao' id='modelo' name='modelo' type='text' placeholder='" . $row_veiculo['modelo'] . "'>";
                                echo "<Label for='ano'>ANO:</Label>
                                    <input class='input-padrao' id='ano' name='ano' type='number' placeholder='" . $row_veiculo['ano'] . "'>";
                                echo "<a><button style='background: #069cc2; border-radius: 6px; padding: 10px; cursor: pointer; color: #fff; border: none; font-size: 16px; margin: 0 25px 50px 0;'>Atualizar</button></a>";
                                echo "<a href='./automovel.html'> <img src='../img/voltar.png' width='20' height='20'> </a>";
                            } else {
                                echo  "<h1 class='texto-confirmacao-e' >Veículo não existe!!!!!</h1>";
                            }
                        ?>
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