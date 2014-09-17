<?php
include_once '../Visual/topo.php';
include_once '../Model/Usuario.php';

$usuario = new Usuario();

$lista = $usuario->listarUsuario();

?>

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading text-center">Usuários</div>
    <table class='table table-hover table-bordered table-condensed'>
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Login</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($dados = $lista->fetch(PDO::FETCH_OBJ)) : ?>
                <tr>
                    <td><?= $dados->id_user; ?></td>
                    <td><?= $dados->nome; ?></td>
                    <td><?= $dados->login; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>