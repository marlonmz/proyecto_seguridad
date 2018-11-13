<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>SB Admin - Start Bootstrap Template</title>
        <!-- Bootstrap core CSS-->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template--> 
        <link href="css/sb-admin.css" rel="stylesheet">
    </head>
    <body class="bg-dark">
        <div class="container">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header">FORMULARIO REGISTRO:</div>
                <div class="card-body">
                    <form method="post" action="" autocomplete="off"> 
                        <?php include('errors.php'); ?>
                        <div class="form-group">
                            <label for="username">Usuario</label>
                            <input class="form-control"  type="text" name="username">
                        </div>
                        <div class="form-group">
                            <label for="email">E-Mail</label>
                            <input class="form-control"  type="mail" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input class="form-control"  type="password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="password_comf">Confirmar Contraseña</label>
                            <input class="form-control"  type="password" name="password_comf">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" name="login_user"><span class=""></span> REGISTRAR</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    </body>
</html>