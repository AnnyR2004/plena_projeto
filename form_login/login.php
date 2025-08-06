<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>LOGIN | PLENA CONTABILIDADE PÚBLICA © USUÁRIOS - Sistemas de Gestão</title>
    <meta name="description" content="LOGIN | Plena Contabilidade Pública © Usuários - Sistemas de Gestão">
    <meta name="author" content="© Grupo Medis">
    <meta name="keywords" content="sistemas, softwares">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS externo -->
    <link rel="stylesheet" href="style.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/pcp.jpg"/>
</head>

<body>
    <div id="container">
        <div class="Logo">
            <a href="/PLENA_PROJETO/inicio.html" target="_blank">
                <img src="img/pcp.jpg" alt="Plena Contabilidade Pública" title="© 2021 PLENA CONTABILIDADE PÚBLICA">
            </a>
        </div>

        <div class="login">
            <h1>ACESSO</h1>
            <form action="logar.php" method="POST" id="Login">
                <input type="text" name="usuario" id="inputusuario" placeholder="Usuário" maxlength="30" required> 
                <input type="password" name="password" id="inputpassword" placeholder="Senha" maxlength="15" required> 
                <input type="submit" class="botao-animado" id="btEntrar" value="Entrar">
                
            </form>
            <input type="button" class="botao-animado" id="btVoltar" value="Voltar" onclick="window.history.back();">
        </div>
    </div>
</body>
</html>
