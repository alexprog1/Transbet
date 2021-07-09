<?php
// Definições de host, usuário, senha e database
$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "BD_TRANSBET";

// Criando conexão com o banco de dados
$conn = mysqli_connect($host, $usuario, $senha, $bd);

// Verifica se existe erro na conexão e exibe caso exista
if(mysqli_connect_error()):
	echo "Falha na conexão: ".mysqli_connect_error();
endif;


// Iniciando Sessão
session_start();

// Botao enviar
if(isset($_POST['entrar'])):
	$erros = array();
	$login = mysqli_escape_string($conn, $_POST['login']);
	$senha = mysqli_escape_string($conn, $_POST['senha']);

	if (empty($login) or empty($senha)):
		$erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
	else:
		$sql = "SELECT login FROM usuarios WHERE login = '$login'";
		$resultado = mysqli_query($conn, $sql);


		if (mysqli_num_rows($resultado) > 0):
			$sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
			$resultado = mysqli_query($conn, $sql);

				if (mysqli_num_rows($resultado) == 1):
					$dados = mysqli_fetch_array($resultado);
					mysqli_close($conn);
					$_SESSION['logado'] = true;
					$_SESSION['id_usuario'] = $dados['id'];
					header('Location: painel.php');
				else:
					//$msg = $erros[] = "<li> Usuario e senha não conferem </li>";
					echo "<script>alert('Usuario e senha não conferem');</script>";
				endif;
		else:
			echo "<script>alert('Usuario inexistente');</script>";
			//$erros[] = "<li> Usuario inexistente </li>";
		endif;

	endif;
endif;

// Cria a instrução SQL que vai selecionar os dados
$query = "SELECT * FROM usuarios";

// Guarda a instrução SQL em uma variavel
$retorna_dados = mysqli_query($conn, $query);
?>