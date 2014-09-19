<?php
include_once '../Visual/topo.php';
require_once '../Model/Usuario.php';

$id = $_SESSION["id"];
$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$admin = $_POST["admin"];

$usuario = new Usuario();

$usuario->setNome($nome);
$usuario->setLogin($login);
$usuario->setAdmin($admin);

if($senha){
    $usuario->setSenha($senha);
}else{
    $dados = $usuario->listarUmUsuario($id);
    $row = $dados->fetch(PDO::FETCH_OBJ);
    $senha = $row->senha;
    $usuario->setSenhaSemMD5($senha);
}

$update = $usuario->update($id);
var_dump($update);
if($update){
    echo '<html>
            <head>
                <meta charset="utf-8">        
            </head>
            <body>
                <script>alert("Atualização realizada.")</script>
                <script>window.location.replace("../View/listarComida.php)</script>
            </body>
          </html>';
}else{
    
}