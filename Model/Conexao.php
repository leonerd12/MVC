<?php

class Conexao {

    public function connect() {
        try {            
            return new PDO("pgsql:host=localhost dbname=banco_mvc","leonardo","vidanova");
        }
        catch(PDOException $e) {
            echo "erro ao connectar: ".$e->getMessage();
        }
    }
}