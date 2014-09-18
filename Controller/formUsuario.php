<?php
include_once '../Visual/topo2.php';
?>
<div class="container">
    <div class="row">
        <form class="form-group" role="form" method="post" action="cadastroUsuario.php">
            <div class="form-group col-sm-6 col-md-offset-3">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
            </div>
            <div class="form-group col-sm-6 col-md-offset-3">
                <label for="exampleInputEmail1"><i class="fa fa-user"></i> Login</label>
                <input type="text" class="form-control" id="login" name="login" placeholder="Login">
            </div>
            <div class="form-group col-sm-6 col-md-offset-3">
                <label for="exampleInputPassword1"><i class="fa fa-lock"></i> Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
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
