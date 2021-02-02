<?php include 'Header.php'; ?>

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
              <button type="button align-right" class="btn btn-success" data-bs-toggle="modal"
                data-bs-target="#addEquipModal">
                Añadir Equipo
              </button>
              <button type="button align-right" class="btn btn-danger" data-bs-toggle="modal"
                data-bs-target="#deleteEquipModal">
                Eliminar Equipo
              </button>
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
              <?php foreach ($equipos as $equipos) : ?>

                <?php if (isset($equipos)): ?>
                  <tr>
                  <td><?php echo $equipos['Estado'] ?></td>
                  <td><?php echo $equipos['Marca'] ?></td>
                  <td><?php echo $equipos['Modelo'] ?></td>
                  <td><?php echo $equipos['NumSerie'] ?></td>
                  <td><?php echo $equipos['Tipo'] ?></td>
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

<div class="modal fade" id="addEquipModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir Usuario</h5>
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



<?php include 'Footer.php'; ?>
