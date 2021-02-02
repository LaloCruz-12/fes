<?php include('Header.php'); ?>


<?php include('db\GetData.php');?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Prestamos</h1>
        <div class="btn-toolbar mb-2 mb-md-0 ">
        </div>
      </div>
      <div class="table-responsive table-scroll ">
        <table class="table table-striped table-sm ">
          <thead>
            <tr>
              <th>Id_Prestamo</th>
              <th>Hora de inicio</th>
              <th>Hora de entrega</th>
              <th>Fecha</th>
              <th>Estado</th>
            </tr>
          </thead>
          <tbody>
        <!--Por cada usuario dentro del arreglo $usuarios-->
        <?php foreach ($prestamos as $prestamo) : ?>
          <!-- Revisamos que el $usuario actual no este vacio por que a veces se vuelve loca la DB-->
          <?php if (isset($prestamo)):?>
            <tr>
              <td><?php echo $prestamo['id_prestamo'];?></td>
              <td><?php echo $prestamo['h_inicio'];?></td>
              <td><?php echo $prestamo['h_entrega'];?></td>
              <td><?php echo $prestamo['fecha'];?></td>
              <td><?php echo $prestamo['estado'];?></td>
            </tr>
          <?php endif?>
        <?php endforeach?>
        </tbody>
        </table>
      </div>
    </main>

<?php include('Footer.php'); ?>
