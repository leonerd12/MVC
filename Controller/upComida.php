<?php
include_once '../Visual/topo.php';
require_once '../Model/Comida.php';

$id = $_POST["id"];
$nome = $_POST["nome"];
$tipo = $_POST["tipo"];

$comida = new Comida();

$comida->setNome($nome);
$comida->setTipo($tipo);

if($comida->update($id)){
    echo '<html>
            <head>
                <meta charset="utf-8">        
            </head>
            <body>
                <script>alert("Atualização realizada.")</script>
                <script>window.location.replace("../View/listarComida.php)</script>
            </body>
          </html>';
}