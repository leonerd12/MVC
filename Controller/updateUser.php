<?php
session_start();

include_once '../Visual/topo.php';

require_once '../Model/Usuario.php';

$id = $_SESSION["id"];

$usuario = new Usuario();

$dados = $usuario->listarUmUsuario($id);
$row = $dados->fetch(PDO::FETCH_OBJ);
?>
<div class="container">
    <div class="row">
        <form class="form-group" role="form" method="post" action="upUsuario.php">
            <div class="form-group col-sm-6 col-md-offset-3">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?= $row->nome ?>">
            </div>
            <div class="form-group col-sm-6 col-md-offset-3">
                <label for="exampleInputEmail1"><i class="fa fa-user"></i> Login</label>
                <input type="text" class="form-control" id="login" name="login" placeholder="Login" value="<?= $row->login ?>">
            </div>
            <div class="form-group col-sm-6 col-md-offset-3">
                <label for="exampleInputPassword1"><i class="fa fa-lock"></i> Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" value="">
            </div>
            <div class="form-group col-sm-6 col-md-offset-3 checkbox">
                <label>
                    <input type="checkbox" name="admin" <?php
                    if ($row->admin)
                        echo 'checked';
                    ?> >
                    Você quer mandar no site? Se sim, marque a caixinha.
                </label>
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
