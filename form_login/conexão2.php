<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$localhost = "localhost";
$usuario = "root";
$password = "";
$banco = "form_login";

try {

    // ORIENTADA A OBJETOS COM PDO
    $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $usuario, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Erro na conexão com o banco de dados: " . $e->getMessage();
    exit;
}









