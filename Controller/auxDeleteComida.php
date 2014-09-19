<?php include_once '../Visual/topo.php';?>

<form method="post" action="deleteComida.php">
    <input type="hidden" name="id" value="<?= $_GET['id']; ?>" >
    <label>Você deseja mesmo excluir sua conta?</label>
    <input type="submit" value="Sim" class="btn btn-danger" role="button">
    <a href="../View/listarComida.php" class="btn btn-primary" role="button">Não</a>
</form>
<?php include_once '../Visual/footer.php';?>