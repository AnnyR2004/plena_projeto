<?php
// lista_publicacoes.php
session_start();

function listPublicacoes() {
    $path = __DIR__ . "/uploads/publicacoes/";  // caminho no servidor
    $webPath = "form_login/arquivo/uploads/publicacoes/"; // caminho para URL

    if (!is_dir($path)) {
       
        return;
    }

    $files = scandir($path);
    if (count($files) <= 2) {
        echo "<div class='alert alert-warning'>Nenhum arquivo encontrado.</div>";
        return;
    }

    echo "<di class='mb-4'>";
    echo "<h6 class='text-uppercase fw-bold text-secondary mt-5'>Publicações</h6>";
    echo "<ul class='list-group'>";

    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;
        $safeFile = htmlspecialchars($file, ENT_QUOTES, 'UTF-8');
        $filePath = $webPath . $safeFile;

        echo "<li class='list-group-item d-flex justify-content-between align-items-cente' gap-2 mt-2>
                <span>$safeFile</span>
                <div>
                    <a href='$filePath' target='_blank' class='btn btn-sm btn-primary me-2 '>Ver</a>
                    <a href='{$filePath}' class='btn btn-sm btn-success me-2' download>Baixar</a>
                    <form method='POST' class='d-inline' onsubmit='return confirm(\"Confirma exclusão de $safeFile?\");'>
                        <input type='hidden' name='delete' value='1'>
                        <input type='hidden' name='file' value='$safeFile'>
                        <input type='hidden' name='categoria' value='publicacoes'>
                        <button type='submit' class='btn btn-sm btn-danger'>Excluir</button>
                    </form>
                </div>
              </li>";
    }

    echo "</ul>";
    echo "</div>";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['categoria'] ?? '') === 'publicacoes') {
    $file = $_POST['file'] ?? '';
    $safeFile = basename($file);
    $filePath = __DIR__ . "/uploads/publicacoes/$safeFile";

    if (file_exists($filePath)) {
        unlink($filePath);
        header("Location: " . $_SERVER['PHP_SELF'] . "?deleted");
        exit;
    } else {
        echo "<div class='alert alert-warning'>Arquivo não encontrado.</div>";
    }
     listPublicacoes();
}
?>