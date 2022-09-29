<?php include_once 'php/renumerar.php';
 include_once 'php/ActualizarHora.php';
  include_once 'php/SelectList.php';

?>            
           <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
  <a class="navbar-brand" href="Escaloneta.php">
                            <img src="img/icono boli ad.png" alt="Logo" width="40" height="34" class="d-inline-block align-text-top">
                            Bolivision
                        </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <?php include_once 'modalAddEdit.php';?>
        </li>
 
        <li><?php include_once 'ModalRecuperarDatos.php';?></li>
      </ul>
      <span class="navbar-text">
      <li class="nav-item dropdown" style="list-style: none">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                    <img src="img/person-circle.svg" alt="Logo" width="40" height="34" class="d-inline-block align-text-top"> <?php  echo $_SESSION['nombre'];?>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" >
                                    <li><a class="dropdown-item" href="./index.php" style="padding-right: 0px"><img src="img/box-arrow-in-right.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"> Salir</a></li>
                                </ul>
                            </li>

      </span>
    </div>
  </div>
</nav>