<?php

require_once 'Conexao.php';

class Comida {
    
    private $nome;
    private $tipo;
    
    public function __construct() {
        $conn = new Conexao();
        $this->conn = $conn->connect();
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    
    public function insert() {
        $stmt = $this->conn->prepare("INSERT INTO comidas(nome, tipo) VALUES (:nome, :tipo)");
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":tipo", $this->tipo);
        return $stmt->execute();
    }
    
    public function update($id) {
        $stmt = $this->conn->prepare("UPDATE comidas SET nome=:nome, tipo=:tipo WHERE id_comida = :id");
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":tipo", $this->tipo);
        return $stmt->execute();
    }
    
    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM comidas WHERE id_comida= :id");
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }

    public function listarComida() {
        $stmt = $this->conn->prepare("SELECT * FROM comidas ORDER BY id_comida");
        $stmt->execute();
        return $stmt;
    }
    
    public function listarUmaComida($id) {
        $stmt = $this->conn->prepare("SELECT * FROM comidas WHERE id_comida= :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt;
    }
}
