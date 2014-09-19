<?php
include_once '../Visual/topo.php';

require_once '../Model/Comida.php';

$id = $_GET['id'];

$comida = new Comida();

$dados = $comida->listarUmaComida($id);
$row = $dados->fetch(PDO::FETCH_OBJ);
?>

<div class="container">
    <form class="form-group" role="form" method="post" action="upComida.php">
        <div class="form-group col-md-6 col-md-offset-3">
            <input type="hidden" name="id" value="<?= $row->id_comida ?>">
            <label for="exampleInputEmail1">Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome" value="<?= $row->nome ?>">
        </div>
        <div class="form-group col-md-6 col-md-offset-3">
            <label for="exampleInputEmail1">Tipo</label>
            <input type="text" class="form-control" name="tipo" placeholder="Tipo" value="<?= $row->tipo ?>">
        </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <button type="submit" class="btn btn-default">Enviar Dados</button>
            </div>
        </div>
    </form>
</div>
<?php include_once '../Visual/footer.php'; ?>

