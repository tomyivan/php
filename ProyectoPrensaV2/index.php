<?php
session_start();

include_once 'Php/conexion.php';
include_once 'Php/UserModel.php';
include_once 'Php/UserController.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon"  href="img/icono boli ad.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <style>
            .container-md{
                width: 30%;
                border: 1px solid slategrey; 
                border-radius: 10px;
                margin-top: 5%;
            }
            img{
                margin: 5%;
            }
        </style>
        <title>Proyecto_Prensa</title>
    </head>
    <body>

        <div class="container-md">
            <div class="text-center">
                <img src="img/icono boli ad.png" width="40%" height="40%" class="rounded"/>
            </div>
            <form action=" " method="POST">
                <div class="mb-3">
                    <label  class="form-label">Nombre </label>
                    <input type="text" name="nombre" class="form-control"  placeholder="Juan Perez">
                </div>
                <div class="mb-3">
                    <label for="Contrasenia" class="form-label">Contraseña</label>
                    <input type="password" id="typepass" name="pass" class="form-control" >
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" onclick="Toggle()" id="contraseña">
                    <label class="form-check-label" for="Mcontraseña">Mostrar Contraseña</label>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <button  type="submit" name="submit" class="btn btn-primary">Ingresar</button>
                    </div>
                    <div class="col-auto">
                        <a class="btn btn-primary mb-3">Registrarse</a>
                    </div>
                </div>
            </form>
        </div>
       <script>
        function Toggle() {
            var temp = document.getElementById("typepass");
            if (temp.type === "password") {
                temp.type = "text";
            }
            else {
                temp.type = "password";
            }
        }
</script>
    </body>
</html>