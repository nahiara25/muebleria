<?php
session_start();
if($_SERVER ["REQUEST_METHOD"] == "POST"){
if(($_POST ['usuario']=="micaela") && ($_POST ['contrasenia']=="sistema")){

$_SESSION ['usuario']="ok";
$_SESSION ['nombreUsuario']="micaela";
    header('Location:inicio.php');
} else{
    $mensaje="Error: El usuario y la contrasenia son incorrectos";
}
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="CSS/bootstrap.min.css"/>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            </div>   <!-- Segun chat gpt no se cierra aca -->

            <div class="col-md-4">
                <br> <br>
                <div class="card">
                    <div class="card-header">
                        Iniciar secion
                    </div>

                    <div class="card-body">
                        <form method="POST">
                        <div class = "form-group">
                        <label for="exampleInputEmail1">Usuario</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="usuario" aria-describedby="emailHelp" placeholder="Ingrese Usuario">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="contrasenia" placeholder="Ingrese Contraseña">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Ingresar Administrador</button>
                        </form>
                        
                        
                    </div>

                </div>
            </div>

        </div>
    </div>

</body>
</html>
