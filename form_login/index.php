<?php
require 'verifica.php';

if(isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])): 
   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>USUÁRIOS | PLENA CONTABILIDADE PÚBLICA © - Sistemas de Gestão</title>
    <meta name="description" content="LOGIN | Plena Contabilidade Pública © Usuários - Sistemas de Gestão">
    <meta name="author" content="© Grupo Medis">
    <meta name="keywords" content="sistemas, softwares">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS externo -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/pcp.jpg"/>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ACESSO RESTRITO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ARQUIVOS
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"></a></li>
            <li><a class="dropdown-item" href="#">CONTRATOS</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/PLENA_PROJETO/form_login/arquivo/index.php">ADICIONAR ARQUIVOS</a></li>
          </ul>
        </li>
            </ul>
        <div class="d-flex form-inline mb-2 my-lg-0">
            <a class="navbar-brand me-2"><?php echo $nomeusuario; ?></a>
            <a class="btn btn-outline-success" type="submit" href="logaut.php" >Sair</a>
        </div>
        </div>
    </div>
    </div>
    </nav>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>

<?php
else:
    header("Location: login.php"); endif ?>