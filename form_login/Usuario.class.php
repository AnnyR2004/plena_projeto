<?php
class Usuario {
    
    public function login($usuario, $password) {
        global $pdo;

        $sql ="SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":usuario", $usuario);
        $sql->bindValue(":password", MD5($password)); //
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();

            $_SESSION['usuario'] = $dado['usuario'];

            return true;
      }else{
            return false;
      }
    }
    public function logged($usuario) {
        global $pdo;

        $array = array();
        $sql = "SELECT * FROM usuarios WHERE usuario = :usuario";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":usuario", $usuario);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }   
        return $array;
    }
}
?>
