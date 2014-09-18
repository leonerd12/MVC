<?php
include_once '../Visual/topo.php';
require_once 'Comida.php';

$comida = new Comida();

$comida->setNome($nome);
$comida->setTipo($tipo);

if($comida->update($id) == NULL){
    echo '<html>
            <head>
                <meta charset="utf-8">        
            </head>
            <body>
                <script>alert("Atualização realizada.")</script>
                <script>window.location.replace("../View/listarComida)</script>
            </body>
          </html>';
}