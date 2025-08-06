<?php
// lista_contratos.php
function listContratos() {
    $path = __DIR__ . "/uploads/contratos/";
    if (!is_dir($path)) return;

    echo "<div class='mb-4'>";
    echo "<h6 class='text-uppercase fw-bold text-secondary mt-4'>Contratos</h6>";
    echo "<ul class='list-group'>";

    $files = scandir($path);
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;
        $filePath = "uploads/contratos/$file";
        $safeFile = htmlspecialchars($file, ENT_QUOTES, 'UTF-8');
        echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
                <span>{$safeFile}</span>
                <div>
                    <a href='{$filePath}' class='btn btn-sm btn-success me-2' download>Baixar</a>
                    <form method='POST' class='d-inline' onsubmit='return confirm(\"Confirma exclusão de {$safeFile}?\");'>
                        <input type='hidden' name='delete' value='1'>
                        <input type='hidden' name='file' value='{$safeFile}'>
                        <input type='hidden' name='categoria' value='contratos'>
                        <button type='submit' class='btn btn-sm btn-danger'>Excluir</button>
                    </form>
                </div>
              </li>";
    }

    echo "</ul>";
    echo "</div>";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['categoria'] ?? '') === 'contratos') {
    $file = $_POST['file'] ?? '';
    $safeFile = basename($file);
    $filePath = __DIR__ . "/uploads/contratos/$safeFile";

    if (file_exists($filePath)) {
        unlink($filePath);
        header("Location: " . $_SERVER['PHP_SELF'] . "?deleted=1");
        exit;
    } else {
        echo "<div class='alert alert-warning'>Arquivo não encontrado.</div>";
    }
    listContratos();
}
?>