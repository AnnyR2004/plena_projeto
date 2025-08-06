<?php
require 'Arquivo.class.php';
$arquivo = new Arquivo();

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categoria = $_POST['categoria'];
    $arquivo = $_FILES['anexo'];

    // Verifica categoria válida
    if (!in_array($categoria, ['publicacoes', 'contratos'])) {
        die('Categoria inválida.');
    }

    // Verifica se arquivo foi enviado
    if ($arquivo && $arquivo['error'] === 0) {
        $pastaDestino = "uploads/$categoria/";
        if (!is_dir($pastaDestino)) {
            mkdir($pastaDestino, 0777, true);
        }

        $nomeOriginal = basename($arquivo['name'].'.pdf'); // Adiciona extensão .pdf
        $caminhoFinal = $pastaDestino . $nomeOriginal;

        if (move_uploaded_file($arquivo['tmp_name'], $caminhoFinal)) {
            header("Location: index.php?sucesso=1");
        } else {
            header("Location: index.php?erro=1");
        }
    } else {
        header("Location: index.php?erro=2");
    }
}
?>