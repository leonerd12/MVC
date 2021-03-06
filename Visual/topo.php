<?php
session_start();

if (!$_SESSION['acessou']):
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
        </head>
        <body>
            <script>
                alert("Você não pode acessar os dados sem estar logado.");
                location.href = "../View/index.php";
            </script>
        </body>
    </html>

<?php endif; ?>

<!DOCTYPE html>
<html>
    <head>
        <title>M2 Smart</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../Visual/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../Visual/css/font-awesome.min.css">
    </head>
    <body>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="../Visual/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../Visual/js/bootstrap.min.js"></script>        
        <header>
            <nav class="navbar navbar-default navbar-static-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="inicial.php"><i class="fa fa-home"></i> Home</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="../View/listarComida.php"><i class="fa fa-table"></i> Tabela de Comidas</a></li>
                    </ul>
                    <ul class="nav navbar-nav ">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Perfil<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="../Controller/updateUser.php">Editar Perfil</a>
                                <li><a href="../Controller/logout.php"><i class="fa fa-remove"></i> Sair</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container">

