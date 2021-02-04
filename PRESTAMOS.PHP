<?php include('Header.php'); ?>


<?php include('db\GetData.php');?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Prestamos</h1>
        <div class="btn-toolbar mb-2 mb-md-0 ">
        </div>
      </div>
      <div class="table-responsive table-scroll ">
        <table class="table table-striped caption-top table-sm ">
          <caption>
            <?php if (isset($_COOKIE['TipoUser'])):?>
              <?php if ($_COOKIE['TipoUser'] == "admin"):?>
                <button type="button align-right" class="btn btn-success" data-bs-toggle="modal"
                  data-bs-target="#fin_prestamo_modal">
                  Finalizar Prestamo
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
              <th>Id_Prestamo</th>
              <th>N. Cuenta Alumno</th>
              <th>N. Serie Equipo</th>
              <th>Hora de inicio</th>
              <th>Hora de entrega</th>
              <th>Fecha</th>
              <th>Estado</th>
            </tr>
          </thead>
          <tbody>
        <!--Por cada prestamo dentro del arreglo $prestamos-->
        <?php foreach ($prestamos as $prestamo) : ?>
          <!-- Revisamos que el $prestamo actual no este vacio por que a veces se vuelve loca la DB-->
          <?php if (isset($prestamo)):?>
            <?php if($_COOKIE['TipoUser'] == "admin"):?>
              <tr>
                <td><?php echo $prestamo['id_prestamo'];?></td>
                <td><?php echo $prestamo['usuarioP'];?></td>
                <td><?php echo $prestamo['equipoP'];?></td>
                <td><?php echo $prestamo['h_inicio'];?></td>
                <td><?php echo $prestamo['h_entrega'];?></td>
                <td><?php echo $prestamo['fecha'];?></td>
                <td><?php echo $prestamo['estado'];?></td>
              </tr>
            <?php else:?>
              <?php if($prestamo['usuarioP']==$_COOKIE['NumCuenta']):?>
                <tr>
                  <td><?php echo $prestamo['id_prestamo'];?></td>
                  <td><?php echo $prestamo['usuarioP'];?></td>
                  <td><?php echo $prestamo['equipoP'];?></td>
                  <td><?php echo $prestamo['h_inicio'];?></td>
                  <td><?php echo $prestamo['h_entrega'];?></td>
                  <td><?php echo $prestamo['fecha'];?></td>
                  <td><?php echo $prestamo['estado'];?></td>
                </tr>
              <?php endif?>
            <?php endif?>
          <?php endif?>
        <?php endforeach?>
        </tbody>
        </table>
      </div>
    </main>

    <!-----------------Modal Terminar Prestamo-------------------->
    <div class="modal fade" id="fin_prestamo_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Añadir Usuario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Ingrese el ID del prestamos que desea finalizar 
            <form action="db\PostData.php" method="POST">
                <div>
                  <label ></label>
                  <input class="controls" name="Id_Prestamo" type="text" placeholder="Número de ID del Prestamo">
                </div><br>
                <button type="button" class="btn btn-secondary ml-1" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" name = "fin_prestamo" class="btn btn-primary ml-auto">Terminar</button>
            </form>
          </div>
        </div>
      </div>
    </div>

<?php include('Footer.php'); ?>
