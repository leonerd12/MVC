<?php
include_once '../Visual/topo2.php';
?>

<form class="form-group" role="form" method="post" action="cadastroUsuario.php">
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Login</label>
        <input type="text" class="form-control" id="login" name="login" placeholder="Login">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputPassword1">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
    </div>
    <div class="form-group">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-default">Enviar Dados</button>
        </div>
    </div>
</form>  
</body>
</html>
