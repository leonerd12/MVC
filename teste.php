<?php

include './Model/Usuario.php';
include './Model/Comida.php';

$comida = new Comida();

//$comida->setNome("Macarrão");

$comida->delete(4);

?>