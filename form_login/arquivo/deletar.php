<?php
session_start();

$categoria = $_POST['categoria'] ?? '';
$arquivo = $_POST['file'] ?? '';

// Caminho base (relativo ao deletar.php)
$pasta = __DIR__ . "/uploads/$categoria/";

// Validação de categoria (pastas existentes)
$categoriasValidas = ['publicacoes', 'contratos'];
if (!in_array($categoria, $categoriasValidas)) {
    $_SESSION['msg_erro'] = "Categoria inválida.";
    header('Location: index.php');
    exit;
}

// Caminho absoluto do arquivo
$caminho = $pasta . basename($arquivo);

// Verifica se arquivo existe e tenta excluir
if (file_exists($caminho)) {
    if (unlink($caminho)) {
        $_SESSION['msg_sucesso'] = "Arquivo excluído com sucesso.";
    } else {
        $_SESSION['msg_erro'] = "Erro ao excluir o arquivo.";
    }
} else {
    $_SESSION['msg_erro'] = "Arquivo não encontrado.";
}

header('Location: index.php');
exit;
