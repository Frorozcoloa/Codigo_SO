<?php include("seguridad.php"); ?>
    <html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <title>Bienvenido al sistema</title>
    </head>
    <body>
        <div class="container">
            <div class="d-flex flex-row justify-content-center alig-items-center">
                <h5 aling="center">Hola! <?php echo $_SESSION["user"]; ?></h5>
            </div>
        </div>
    </body>
    </html>