<?php

require 'conexão2.php';

if(isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])){

    require_once'Usuario.class.php';
    $u = new Usuario();

    $listlogged = $u->logged($_SESSION['usuario']);
    $nomeusuario = $listlogged['usuario'];

}else{
    header("Location: login.php");
}
?>