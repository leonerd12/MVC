<?php

require_once '../Model/Comida.php';

$nome = $_POST["nome"];
$tipo = $_POST["tipo"];

$comida = new Comida();

$comida->setNome($nome);
$comida->setTipo($tipo);
$insere = $comida->insert();

if($insere){
    echo '<script>
        alert("Cadastro Realizado.");
        location.href("formUsuario.php");
    </script>';
}


?>