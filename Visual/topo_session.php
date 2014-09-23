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

<?php
session_start();

if (!$_SESSION["admin"]):
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
        </head>
        <body>
            <script>
                alert("Você não tem autorização para esse tipo de serviço.");
                location.href = "../View/inicial.php";
            </script>
        </body>
    </html>

<?php endif; ?>
