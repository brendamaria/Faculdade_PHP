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
    <title>** Consulta de cliente para alteração **</title>
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
            <section class="cli_cad">
                <h3 class="titulo-principal">Alteração de dados do cliente</h3>
                <?php
                    $cod = filter_input(INPUT_POST, 'cod', FILTER_SANITIZE_STRING);
                    $result_cliente = "SELECT cod,nome,cpf,rg,tel FROM e1_cliente WHERE COD='$cod'";
                    $resultado_cliente = mysqli_query($conn, $result_cliente);
                ?>
                <div class="formulario">
                    <form method="POST" name="Alterar_cliente" action="cli_alt_atualiza.php">
                        <?php
                            if ($row_cliente = mysqli_fetch_assoc($resultado_cliente)) {

                                echo "<Label for='cod'>CÓDIGO:</Label>
                                    <input class='input-padrao' id='cod' name='cod' type='number' placeholder='" . $row_cliente['cod'] . "'>";
                                echo "<Label for='nome'>NOME:</Label>
                                    <input class='input-padrao' id='nome' name='nome' type='text' placeholder='" . $row_cliente['nome'] . "'>";
                                echo "<Label for='cpf'>CPF:</Label>
                                    <input class='input-padrao' id='cpf' name='cpf' type='number' placeholder='" . $row_cliente['cpf'] . "'>";
                                echo "<Label for='rg'>RG:</Label>
                                    <input class='input-padrao' id='rg' name='rg' type='number' placeholder='" . $row_cliente['rg'] . "'>";
                                echo "<Label for='tel'>TELEFONE:</Label>
                                    <input class='input-padrao' id='tel' name='tel' type='number' placeholder='" . $row_cliente['tel'] . "'>";
                                echo "<a><button style='background: #069cc2; border-radius: 6px; padding: 10px; cursor: pointer; color: #fff; border: none; font-size: 16px; margin: 0 25px 50px 0;'>Atualizar</button></a>";
                                echo "<a href='./clientes.html'> <img src='../img/voltar.png' width='20' height='20'> </a>";
                            } else {
                                echo  "<h1 style='font-size:3em; color:red; text-align:center;' type='text'>Cliente não existe!!!!!</h1>";
                            }
                        ?>
                    </form>
                </div>
            </section>
            <footer>
		        <img src="../img/logo-branco.png">
		        <p class="copyright">&copy; Copyright - Brenda Maria - 2021</p>
	        </footer>
        </main>
    </body>

</html>