<?php 
// Importando dados do arquivo de conexão com o Mysql	
require_once('conexao.php');
?>

<!-- Iniciando o documento index -->
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">

        <!-- Informe ao navegador que o site está otimizado para celular -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <!-- Import Google Icon Font -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Import materialize.css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <!-- Titulo do Site -->
        <title>Transbet - Documentação Técnica Ti</title>
    </head>	
<body>
<center>
</br>
    <div class="wrapper">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;"> 
            <img class="mb-4" src="images/logo.png" alt="" width="407" height="82">
            <h1 class="h1 mb-3 font-weight-normal">Login</h1>
                <form class="form-signin text-center" action="" method="POST" >
                    <p><input class="form-control" type="text" id="login" name="login" placeholder="Username" required autofocus>
                    <input class="form-control" type="password" id="senha" name="senha"   placeholder="Password" required autofocus></p>
                    <p><button class="btn btn-lg btn-primary btn-block" type="submit" name="entrar" value="Entrar" id="entrar" class="btn btn-primary btn-block btn-large">Iniciar Sessão</button></p>
                    <a class="teal-text" href="recuperar.php">><b> Esqueceu a senha?</b></a>
                    <p class="mt-5 mb-3 text-muted">&copy; 2021 - Transbet - TIC</p>
                </form>
        </div>
    </div>
</center>

    <!-- JavaScript no final do corpo para carregamento otimizado -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>