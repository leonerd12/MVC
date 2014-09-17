<?php
require_once 'Conexao.php';

abstract class Crud {
   public function __construct() {
        $conn = new Conexao();
        $this->conn = $conn->connect();
    }
}
