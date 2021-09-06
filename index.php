<?php @session_start(); ?>
    <html>
    <head>
    <link rel="stylesheet" type="text/css" href="main.css" media="screen" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Acceso por LDAP</title>
    <body>
        <form method="post" action="control.php">
            <div class="card text-center form-card">
                <div class="card-body">
                    <h4 class="card-title">Ingreso</h4>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="usuario">Usuario</label>
                            <input  class="form-control" type="text" name="usuario" id="usuario" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="clave">Contraseña</label>
                            <input  class="form-control" type="password" name="clave" id="clave" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-color btn-block">Ingresar</button>
                </div>
            </div>
    </form>
    </body>
    </html>
<?php exit(); ?>