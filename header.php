<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="vista\css\styles.css">
  <title></title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand mr-auto" href="#"><img src="img/logo_size_invert.jpg" height="50" width="50"></a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">Equipos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Prestamos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Ayuda</a>
          </li>
        </ul>
      </div>

      <a data-toggle="modal" href="#myModal" class="btn btn-dark btn-lg">Iniciar Sesión</a>
      <!--Boton Modal-->


      <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <!--Modal Iniciar Sesion-->
        <div class="modal-dialog modal-sm modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Seleccione una opción</h4>
              <!--Titulo del modal-->
            </div>
            <div class="modal-body">
              <br>

              <div class="row justify-content-center">
                <!--Botones del modal Principal-->
                <div class="col-sm-9">
                  <a data-toggle="modal" href="#iniciar_sesion" class="btn btn-success btn-block" data-dismiss="modal">
                    <h4>Iniciar Sesión</h4>
                  </a>
                </div>
              </div>
              <br>
              <div class="row justify-content-center">
                <div class="col-sm-9">
                  <a data-toggle="modal" href="#registrarse" class="btn btn-success btn-block" data-dismiss="modal">
                    <h4>Registrarse</h4>
                  </a>
                </div>
              </div>
              <br>
              <div class="row justify-content-center">
                <button type="button" class="col-sm-4 btn btn-danger btn-block" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">
                    <h4>Salir</h4>
                  </span>
                </button>
              </div>
              <br>
            </div>
          </div>
        </div>
      </div>

      <div class="modal" id="iniciar_sesion" data-backdrop="static">
        <div class="modal-dialog modal-sm modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Iniciar Sesión</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="container"></div>
            <div class="modal-body">
              <form>
                <br>
                <div class="row justify-content-center">
                  <div class="form-group col-sm-11">
                    <input type="text" class="form-control form-control-lg" id="exampleInputUser"
                      placeholder="Numero de cuenta">
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="form-group col-sm-11">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
                      placeholder="Contraseña">
                  </div>
                </div>
                <br>
                <div class="col-sm-11">
                  <button type="button" class="col-sm-7 btn btn-success" data-dismiss="modal" aria-label="Close">
                    <h4>Iniciar Sesión</h4>
                  </button>
                  <button type="button" class="col-sm-4 btn btn-danger" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                      <h4>Salir</h4>
                    </span>
                  </button>
                </div>
                <br>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="modal" id="registrarse" data-backdrop="static">
        <div class="modal-dialog modal-sm modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Registro de nuevo usuario</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="container"></div>
            <div class="modal-body">
              <div class="row justify-content-center">
                <div class="form-group col-sm-11">
                  <input type="text" class="form-control form-control-lg" id="exampleInputUser" placeholder="Nombre(s)">
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="form-group col-sm-11">
                  <input type="text" class="form-control form-control-lg" id="exampleInputUser"
                    placeholder="Apellido Paterno">
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="form-group col-sm-11">
                  <input type="text" class="form-control form-control-lg" id="exampleInputUser"
                    placeholder="Numero de cuenta">
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="form-group col-sm-11">
                    <select class="custom-select" id="inputGroupSelect01">
                        <div class="optgroup">
                            <option value="1">ICO</option>
                            <option value="2">Derecho</option>
                        </div>
                    </select>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="form-group col-sm-11">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
                    placeholder="Contraseña">
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-sm-11">
                  <button type="button" class="col-sm-7 btn btn-success" data-dismiss="modal" aria-label="Close">
                    <h4>Iniciar Sesión</h4>
                  </button>
                  <button type="button" class="col-sm-4 btn btn-danger" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                      <h4>Salir</h4>
                    </span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>