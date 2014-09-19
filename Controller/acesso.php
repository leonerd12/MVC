<?php

require_once '../Model/Login.php';

$login = new Login();

$login_login = $_POST["login"];
$senha = $_POST["senha"];
$senha_login = md5($senha);

$login->autentica($login_login, $senha_login);


?>