<?php

require_once '../Model/Comida.php';

$nome = $_POST["nome"];
$tipo = $_POST["tipo"];

$comida = new Comida();

$comida->setNome($nome);
$comida->setTipo($tipo);

if ($comida->insert() == NULL) {
    echo '<script>alert("Cadastro bem-sucedido.")</script>';
    echo '<script>window.location.replace("../View/listarComida.php")</script>';
}else{
    echo '<script>alert("Cadastro mal-sucedido.")</script>';
    echo '<script>window.location.replace("../Controller/formComida.php")</script>';
}

?>