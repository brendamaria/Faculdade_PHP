 <?php
	session_start();
	include_once("../conexao.php");

	$code = filter_input(INPUT_POST,'code', FILTER_SANITIZE_STRING);

	$result_usuario = "DELETE FROM e1_cliente WHERE COD = $code";

	$resultado_usuario = mysqli_query($conn, $result_usuario);

	if (mysqli_affected_rows($conn)){
		echo "<!DOCTYPE html>";
	    echo "<html lang='pt-br'>";
        echo "<head>";
        echo "<meta charset='UTF-8>";
        echo "<meta name='viewport' content='width=device-width'>";
        echo "<link rel='stylesheet' href='../css/reset.css'>";
        echo "<link rel='stylesheet' href='../css/style.css'>";
	    echo "<title>** SEGURADORA FACDF **</title>";
	    echo "</head>";
        echo "<body>";
        echo "<header>";
        echo "<div class='caixa'>";
        echo "<a href='../index.html'><img src='../img/logo_transparent.png'></a>";    
        echo "<nav>";  
        echo "<ul>";       
        echo "<li><a href='../index.html'>Home</a></li>";
        echo "<li><a href='clientes.html'>Clientes</a></li>";
        echo "<li><a href='contato.html'>Automóvel</a></li>";
        echo "<li><a href='contato.html'>Ocorrências</a></li>";
        echo "</ul>";
        echo "</nav>";
        echo "</div>";
        echo "</header>";
        echo "<main>";
        echo "<h1 style='font-size:3em; color:green; text-align:center;' type='text'>Usuario excluido com sucesso!</h1>";
        echo "<center>";
        echo "<a href='./clientes.html'> <img class='titulo-confirma' src='../img/voltar.png' width='20' height='20'> </a>";
        echo "</center>";
        echo "</main>";
        echo "<footer>";
        echo "<img src='../img/logo-branco.png'>";
        echo "<p class='copyright'>&copy; Copyright - Brenda Maria - 2021</p>";
        echo "</footer>";
	    echo "</body>";
	    echo "</html>";
	} else{
		echo "<!DOCTYPE html>";
	    echo "<html lang='pt-br'>";
        echo "<head>";
        echo "<meta charset='UTF-8>";
        echo "<meta name='viewport' content='width=device-width'>";
        echo "<link rel='stylesheet' href='../css/reset.css'>";
        echo "<link rel='stylesheet' href='../css/style.css'>";
	    echo "<title>** SEGURADORA FACDF **</title>";
	    echo "</head>";
        echo "<body>";
        echo "<header>";
        echo "<div class='caixa'>";
        echo "<a href='../index.html'><img src='../img/logo_transparent.png'></a>";    
        echo "<nav>";  
        echo "<ul>";       
        echo "<li><a href='../index.html'>Home</a></li>";
        echo "<li><a href='clientes.html'>Clientes</a></li>";
        echo "<li><a href='contato.html'>Automóvel</a></li>";
        echo "<li><a href='contato.html'>Ocorrências</a></li>";
        echo "</ul>";
        echo "</nav>";
        echo "</div>";
        echo "</header>";
        echo "<main>";
        echo "<h1 style='font-size:3em; color:green; text-align:center;' type='text'>Usuario não excluido!</h1>";
        echo "<center>";
        echo "<a href='./clientes.html'> <img class='titulo-confirma' src='../img/voltar.png' width='20' height='20'> </a>";
        echo "</center>";
        echo "</main>";
        echo "<footer>";
        echo "<img src='../img/logo-branco.png'>";
        echo "<p class='copyright'>&copy; Copyright - Brenda Maria - 2021</p>";
        echo "</footer>";
	    echo "</body>";
	    echo "</html>";
	}
?>
