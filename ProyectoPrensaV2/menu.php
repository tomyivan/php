<div class="row">
                <nav class="navbar navbar-dark bg-primary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="./Registrar.php">
                            <img src="img/icono boli ad.png" alt="Logo" width="40" height="34" class="d-inline-block align-text-top">
                            Bolivision
                        </a>
                        <div class="logoUsuario">
                            <li class="nav-item dropdown" style="list-style: none">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                    <img src="img/person-circle.svg" alt="Logo" width="40" height="34" class="d-inline-block align-text-top"> <?php  echo $_SESSION['nombre'];?>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" >
                                    <li><a class="dropdown-item" href="index.php" style="padding-right: 0px"><img src="img/box-arrow-in-right.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"> Salir</a></li>
                                </ul>
                            </li>

                        </div>
                    </div>
                </nav>
            </div>