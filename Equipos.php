<?php include 'header.php'; ?>

<?php include('db\GetData.php');?>
  <br>
  <div class="container">
    <div class="row contenedor">
      <div class="col-md-2">
        <nav class="navbar2 navbar-light ">
          <div class="container-fluid">
            <form class="d-flex">
              <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </nav>
      </div>

      <div class="col-md-10">
        <div class="col-md-12 table-scroll">
          <table class="table caption-top table-hover">
            <caption>Equipos
              <?php if (isset($_COOKIE['TipoUser'])):?>
                <?php if ($_COOKIE['TipoUser'] == "admin"):?>
                  <button type="button align-right" class="btn btn-success" data-bs-toggle="modal"
                    data-bs-target="#addEquipModal">
                    Añadir Equipo
                  </button>
                  <button type="button align-right" class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#deleteEquipModal">
                    Eliminar Equipo
                  </button>
                <?php elseif($_COOKIE['TipoUser'] == "Alumno"):?>
                  <button type="button align-right" class="btn btn-success" data-bs-toggle="modal"
                    data-bs-target="#newPrestamo">
                    Pedir Prestamo
                  </button>
                <?php else:?>
                  <div></div>
                <?php endif?>
              <?php else:?>
                <div></div>
              <?php endif?>
            </caption>
            <thead>
              <tr>
                <th scope="col">Estado</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">NumSerie</th>
                <th scope="col">Tipo</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($equipos as $equipo) : ?>

                <?php if (isset($equipo)): ?>
                  <tr>
                  <td><?php echo $equipo['Estado'] ?></td>
                  <td><?php echo $equipo['Marca'] ?></td>
                  <td><?php echo $equipo['Modelo'] ?></td>
                  <td><?php echo $equipo['NumSerie'] ?></td>
                  <td><?php echo $equipo['Tipo'] ?></td>
                  </tr>
                <?php endif?>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </nav>
  </div>
</div>

<!--------------Modales-------------------->

<!-------------------Modal Añadir Equipo----------------->
<div class="modal fade" id="addEquipModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir Equipo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="db\PostData.php" method="POST">
            <div>
                <label></label>
                <input class="controls" name="Estado" type="texts" placeholder="Estado">
            </div>
            <div>
                <label ></label>
                <input class="controls" name ="Marca" type="text" placeholder="Marca">
            </div>
            <div>
                <label ></label>
                <input class="controls" name="Modelo" type="text" placeholder="Modelo">
            </div>
            <div>
              <label  ></label>
              <input class="controls" name="NumSerie" type="text" placeholder="Numero de Serie">
            </div>
            <div>
              <label  ></label>
              <input class="controls" name="Tipo" type="text" placeholder="Tipo">
            </div><br>

            <button type="button" class="btn btn-secondary ml-1" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" name = "admin_save_equip"class="btn btn-primary ml-auto">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-----------------Modal Eliminar Equipo-------------------->
<div class="modal fade" id="deleteEquipModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Ingrese el numero de serie del equipo que se desea eliminar
        <form action="db\PostData.php" method="POST">
            <div>
              <label ></label>
              <input class="controls" name="NumSerie" type="text" placeholder="Número de Serie">
            </div><br>
            <button type="button" class="btn btn-secondary ml-1" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" name = "delete_equip" class="btn btn-primary ml-auto">Eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-----------------Modal de nuevo prestamo---------------------->
<div class="modal fade" id="newPrestamo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pedir Prestamo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="db\PostData.php" method="POST">
            <div>
                <label>Introduce el numero de serie del equipo que quieres solicitar</label>
                <input class="controls" name="NumSerie" type="texts" placeholder="Numero de serie">
            </div>
            <br>
            <div>
                <label >Introduzca la hora a la que se recogeria el equipo</label>
                <input class="controls" name ="Hora" type="time" placeholder="Marca">
            </div>
            <br>
            <div>
                <label >Por cuanto tiempo necesitaras el equipo</label>
                <input class="controls" name ="NumHoras" type="number" placeholder="Horas Maximo 3 Horas" min="1" max ="3">
            </div>
            <br>
            <button type="button" class="btn btn-secondary mt-1" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" name = "new_prestamo"class="btn btn-primary ml-auto">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
