<?php

require_once '../Model/Usuario.php';

$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$admin = $_POST["admin"];

$usuario = new Usuario();

$usuario->setNome($nome);
$usuario->setLogin($login);
$usuario->setSenha($senha);
$usuario->setAdmin($admin);

if ($usuario->insert() == NULL) {
    echo '<script>alert("Cadastro bem-sucedido.")</script>';
    echo '<script>window.location.replace("../View/index.php")</script>';
}else{
    echo '<script>alert("Cadastro mal-sucedido.")</script>';
    echo '<script>window.location.replace("../Controller/formUsuario.php")</script>';
}
?>