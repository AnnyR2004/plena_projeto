<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>ARQUIVOS | PLENA CONTABILIDADE PÚBLICA © - Sistemas de Gestão</title>
    <meta name="description" content="LOGIN | Plena Contabilidade Pública © Usuários - Sistemas de Gestão">
    <meta name="author" content="© Grupo Medis">
    <meta name="keywords" content="sistemas, softwares">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <!-- CSS externo -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="shortcut icon" href="/form_login/img/pcp.jpg"/>
</head> 
<body>
<div class="container mt-3">
    
        <center>
            <img src="" width="130">
            <h6>ARQUIVOS</h6>
        </center>
        <div class = card mt-3>
            <h5 class="card-header">Adicionar Arquivo</h5>
            <div class="card-body">

                <form  method="post" action="processa.php" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <select class="form-select" name="categoria" required>
                                <option value="">Escolha a categoria</option>
                                <option value="publicacoes">📢 Publicações</option>
                                <option value="contratos">📄 Contratos</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" name="anexo" class="form-control" required>
                     </div>
                         <button type="submit" class="btn btn-warning btn-lg btn-block">Enviar</button>                
                </form>
            </div>
        </div>
        <div method="post" action="" class="card mt-3">
            <h5 class="card-header">Arquivos Disponíveis</h5>
            <div class="card-body">
                <div class="d-flex gap-5 bd-highlight mb-4">
                    <?php include 'lista_publicacoes.php';
                          include 'lista_contratos.php';
                          listPublicacoes();
                          listContratos();
                     ?>
            </div>
        </div>
    </div>
</body>
</html>