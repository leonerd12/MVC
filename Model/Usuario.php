<?php

require_once 'Conexao.php';

class Usuario {
    private $conn;
    private $nome;
    private $login;
    private $senha;
    private $comidas;
    
    public function __construct() {
        $conn = new Conexao();
        $this->conn = $conn->connect();
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setSenha($senha) {
        $senha_md5 = md5($senha);
        $this->senha = $senha_md5;
    }

    public function addComida($param) {
        $this->comidas[] = $param;
    }

    public function insert() {
        $stmt = $this->conn->prepare("INSERT INTO usuarios(nome, login, senha) VALUES (:nome, :login, :senha)");
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":login", $this->login);
        $stmt->bindParam(":senha", $this->senha);
        $stmt->execute();
    }

    public function update($id) {
        $stmt = $this->conn->prepare("UPDATE usuarios SET nome=:nome, login=:login, senha=:senha WHERE id_user = :id");
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":login", $this->login);
        $stmt->bindParam(":senha", $this->senha);
        $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM usuarios WHERE id_user=:id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function listarUsuario() {
        $stmt = $this->conn->prepare("SELECT * FROM usuarios ORDER BY id_user");
        $stmt->execute();
        return $stmt;
    }
}
