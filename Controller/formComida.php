<?php
include_once '../Visual/topo.php';
include_once '../Visual/topo_session.php';
?>

<div class="container">
    <div class="row">
        <form class="form-group" role="form" method="post" action="cadastroComida.php">
            <div class="form-group col-sm-6 col-md-offset-3">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome">
            </div>
            <div class="form-group col-sm-6 col-md-offset-3">
                <label for="exampleInputEmail1">Tipo</label>
                <input type="text" class="form-control" name="tipo" placeholder="Tipo">
            </div>
            <div class="form-group">
                <div class="col-sm-6 col-md-offset-3">
                    <button type="submit" class="btn btn-default">Enviar Dados</button>
                </div>
            </div>
        </form>  
    </div>
</div>
<?php include_once '../Visual/footer.php'; ?>