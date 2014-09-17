<?php
include_once '../Visual/topo2.php';
?>

<form class="form-group" role="form" method="post" action="cadastroComida.php">
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Nome">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Tipo</label>
        <input type="text" class="form-control" name="tipo" placeholder="Tipo">
    </div>
    <div class="form-group">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-default">Enviar Dados</button>
        </div>
    </div>
</form>  
</body>
</html>
