<?php
include_once '../Visual/topo2.php';
?>
<div class="row">
<form class="form-group" role="form" method="post" action="../Model/acesso.php">
    <div class="form-group col-md-6 col-md-offset-3">
        <label for="exampleInputEmail1"><i class="fa fa-user"></i> Login</label>
        <input type="text" class="form-control" name="login" placeholder="Login" required>
    </div>
    <div class="form-group col-md-6 col-md-offset-3">
        <label for="exampleInputPassword1"><i class="fa fa-lock"></i> Senha</label>
        <input type="password" class="form-control" name="senha" placeholder="Senha" required>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
            <button type="submit" class="btn btn-default">Enviar Dados</button>
        </div>
    </div>
</form>	
</div>
</div>
<?php include_once '../Visual/footer.php'; ?>
