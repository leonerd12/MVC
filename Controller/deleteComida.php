<?php
include_once 'topo_session.php';
require_once 'Comida.php';

$id = $_POST["id"];

$comida = new Comida();

if($comida->delete($id) == NULL){
    header("location: ../View/listarComida.php");
}