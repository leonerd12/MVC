<?php
include_once '../Visual/topo.php';
include_once '../Model/Comida.php';

$comida = new Comida();

$lista = $comida->listarComida();

?>

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading text-center">Comidas</div>
    <table class='table table-hover table-bordered table-condensed'>
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($comida = $lista->fetch(PDO::FETCH_OBJ)) : ?>
                <tr>
                    <td><?= $comida->id_comida; ?></td>
                    <td><?= $comida->nome; ?></td>
                    <td><?= $comida->tipo; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<center><a href="../Controller/formComida.php" class="btn btn-default" role="button">Incluir Comida</a></center>