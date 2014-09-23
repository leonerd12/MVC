<?php
include_once '../Visual/topo_session.php';
require_once '../Model/Comida.php';

$id = $_POST["id"];

$comida = new Comida();
$delete = $comida->delete($id);

if($delete == NULL){
    header("location: ../View/listarComida.php");
}