<?php
session_start(); // Inicia a sessão

if (isset($_SESSION['usuario'])) {
    echo "Bem-vindo, " . $_SESSION['usuario'] . "!";
} else {
    echo "Usuário não autenticado.";
}
?>

<html>
    <head>
        <meta charset="UTF-8"/> 
        <title>Tela de HOME</title>
        <link rel="stylesheet" href="/site/css/home.css">
    </head>
    <body>
    <header>
        <nav class="menu">
            <ul>
                <li><a href="home.php">Início</a></li>
                <li><a href="../html/cadastro-produto.html">Cadastro de Produtos</a></li>
                <li><a href="logout.php">Sair</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Olá, seja bem vindo!</h1>
        <br/>
        <hr/>
        <h2>Página inicial do nosso site.</h2>
    </main>
    </body>
</html>