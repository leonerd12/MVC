<?php

session_start();

require_once 'Conexao.php';

class Login {

    private $db;
    
    public function __construct() {
        $conn = new Conexao();
        $this->db = $conn->connect();
    }

    public function autentica($login_login, $senha_login) {
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE login = :login");
        $stmt->bindParam(":login", $login_login);
        $stmt->execute();
        
        $dados = $stmt->fetch(PDO::FETCH_OBJ);
        $senha_banco = $dados->senha;

        if ($senha_login == $senha_banco) {
            $_SESSION['acessou'] = TRUE;
            header("location: ../View/inicial.php");
        } else {
            echo '<script>alert("Dados incorretos")</script>';
            header("location: ../View/index.php");
        }
    }

}

class Logout {

    public function sair() {
        unset($_SESSION['acessou']);
        header("location: ../View/index.php");
    }

}
?>

