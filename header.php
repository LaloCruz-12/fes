<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
  <title></title>
</head>

<body>

  <?php
  session_start();
  
  ?>


<!--NavBars Posibles-->
<!-------------------------------------------------------------------------------------------------------->
  <!--NavBars Si es administrador-->
  <?php if (isset($_COOKIE['TipoUser'])):?>
    <?php if ($_COOKIE['TipoUser'] == "admin"):?>
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand mr-auto" href="#"><img src="img/logo.png" width="65"></a>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" href="index.php">Inicio</a>
              <a class="nav-link" href="Equipos.php">Equipos</a>
              <a class="nav-link" href="Prestamos.php">Prestamos</a>
              <a class="nav-link" href="Usuarios.php">Usuarios</a>
              <a class="nav-link" href="#">Ayuda</a>
            </div>
          </div>

          <div class="col-sm-1">
            <button type="button" class="btn btn-dark btn-lg" data-bs-toggle="modal" data-bs-target="#Cerrar_Session">
            <?php echo $_COOKIE['TipoUser']?></button>
          </div>
        </div>
      </nav> 
    <!--------------------------------------------------------------------------------------------------->
    <!--NavBars Si es alumno-->
    <?php elseif ($_COOKIE['TipoUser'] == "Alumno"):?>
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand mr-auto" href="#"><img src="img/logo.png" width="65"></a>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" href="index.php">Inicio</a>
              <a class="nav-link" href="Equipos.php">Equipos</a>
              <a class="nav-link" href="Prestamos.php">Prestamos</a>
              <a class="nav-link" href="#">Ayuda</a>
            </div>
          </div>

          <div class="col-sm-1">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark btn-lg" data-bs-toggle="modal" data-bs-target="#Cerrar_Session">
            <?php echo $_COOKIE['TipoUser']?></button>
          </div>
        </div>
      </nav>
    <?php else:?>
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand mr-auto" href="#"><img src="img/logo.png" width="65"></a>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" href="index.php">Inicio</a>
              <a class="nav-link" href="Equipos.php">Equipos</a>
              <a class="nav-link" href="#">Ayuda</a>
            </div>
          </div>
          <div class="col-sm-1">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">Iniciar Sesi??n</button>
          </div>
        </div>
      </nav>
    <?php endif?>
<!------------------------------------------------------------------------------------>
<!--NavBars Si no ha iniciado sesion-->
  <?php else:?>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand mr-auto" href="#"><img src="img/logo.png" width="65"></a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="index.php">Inicio</a>
            <a class="nav-link" href="Equipos.php">Equipos</a>
            <a class="nav-link" href="#">Ayuda</a>
          </div>
        </div>
        <div class="col-sm-1">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-dark btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">Iniciar Sesi??n</button>
        </div>
      </div>
    </nav>
  <?php endif?>



<!----------Modales------------>
  <!-- Modal General de opciones -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><h3>Seleccione una Opci??n</h3></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true" aria-label="Close"></button>
        </div>
        <div class="modal-body justify-content-center"><br>
          <div class="row justify-content-center">
            <button type="button" class="btn btn-success btn-lg btn-block col-sm-5" data-bs-toggle="modal" data-bs-target="#Iniciar_Sesion"><h4>Iniciar Sesi??n</h4></button>
          </div><br>
          <div class="row justify-content-center">
            <button type="button" class="btn btn-success btn-lg btn-block col-sm-5" data-bs-toggle="modal" data-bs-target="#reg_user"><h4>Registrarse</h4></button>
          </div><br>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal De inicio de sesion-->
  <div class="modal fade" id="Iniciar_Sesion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesion</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="db\Login.php" method="POST"><br>
            <div class="row justify-content-center">
              <div class="form-group col-sm-8">
                <input type="text" class="form-control form-control-lg" name = "NumCuenta" id="exampleInputUser" placeholder="Numero de cuenta">
              </div>
            </div>
            <br>
            <div class="row justify-content-center">
              <div class="form-group col-sm-8">
                <input type="password" name = "password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Contrase??a">
              </div>
            </div><br>
            <div class="col-sm-8">
              <button type="submit" name = "log_in" class="col-sm-5 btn btn-success"><h4>Iniciar Sesi??n</h4></button>
              <button type="button" class="col-sm-3 btn btn-danger" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><h4>Salir</h4></span>
              </button>
            </div><br>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal de registro-->
  <div class="modal fade" id="reg_user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registrarse</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="db\PostData.php" method="POST">
                <div>
                    <label></label>
                    <input class="controls" name="Nombre" type="texts" placeholder="Nombre">
                </div>
                <div>
                    <label ></label>
                    <input class="controls" name ="ApPaterno" type="text" placeholder="Apellido paterno">
                </div>

                <div>

                    <label ></label>
                    <input class="controls" name="NumCuenta" type="text" placeholder="N??mero de cuenta">
                </div>
                <div>
                  <label class="controls" >Carrera</label>
                  <select class="controls" name="Carrera">

                    <option>ICO</option>

                    <option>Derecho</option>

                  </select>
                </div>
                <div>
                  <label  ></label>
                  <input class="controls" name="Contrase??a"type="password" placeholder="Contrase??a">
                </div>
                <button type="button" class="btn btn-secondary ml-1" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" name = "save_user" class="btn btn-primary ml-auto">Guardar</button>
            </form>
          </div>
        </div>
      </div>
    </div>

<!--Modal de cierre de sesion-->
  <div class="modal fade" id="Cerrar_Session" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detalles Sesion</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row justify-content-center">
            <h4>Se ha iniciado sesion con el numero de cuenta: <?php echo $_COOKIE['NumCuenta']?></h4>
            <form action="db\Login.php" method="POST"><br>
                <button type="submit" name = "log_out" class="col-sm-5 btn btn-danger"><h4>Cerrar Sesion</h4></button>
                </button>
              </div><br>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>