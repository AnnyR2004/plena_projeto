<?php
session_start();

if (isset($_POST['usuario']) && !empty($_POST['usuario']) && 
    isset($_POST['password']) && !empty($_POST['password'])) {

    require 'conexão2.php';
    require 'usuario.class.php';

    $u = new Usuario();

    $usuario = addslashes($_POST['usuario']);
    $password = addslashes($_POST['password']);

    if ($u->login($usuario, $password) === true) {
        if (isset($_SESSION['usuario'])){
            header("Location: index.php");
        }else {
            header("Location:");
        }
    }else{
        header("Location: login.php");
    }
}
?>
