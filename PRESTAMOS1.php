<?php include('Header.php'); ?>
<?php include('db/GetData.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Prestamos</h1>
       
      </div>
      <?php if(isset($_COOKIE['id_Prestamo'])):?>
        <?php if($_COOKIE['id_Prestamo']=="EquipoNoDisponible"):?>
          <div class="row">
            <div class="col-12">
              <div class="alert alert-danger" role="alert">
               Ese equipo no esta disponible
              </div>
            </div>
          </div>
        <?php elseif ($_COOKIE['id_Prestamo']=="Fallo"):?>
          <div class="row">
            <div class="col-12">
              <div class="alert alert-danger" role="alert">
               Algo Salio mal
              </div>
            </div>
          </div>
        <?php else:?>
          <div class="row">
            <div class="col-12">
              <div class="alert alert-success" role="alert">
                Prestamo registrado con exito
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Id_Prestamo:</th>
                  <td><?php echo $prestamos[$_COOKIE['id_Prestamo']]['id_prestamo']?></td>
                </tr>
                <tr>
                  <th>Hora de inicio:</th>
                  <td><?php echo $prestamos[$_COOKIE['id_Prestamo']]['h_inicio']?></td>
                </tr>
                <tr>
                  <th>Hora de entrega:</th>
                  <td><?php echo $prestamos[$_COOKIE['id_Prestamo']]['h_entrega']?></td>
                </tr>
                <tr>
                  <th>Id_Equipo:</th>
                  <td><?php echo $prestamos[$_COOKIE['id_Prestamo']]['equipoP']?></td>
                </tr>
                <tr>
                  <th>Numero de cuenta:</th>
                  <td><?php echo $prestamos[$_COOKIE['id_Prestamo']]['usuarioP']?></td>
                </tr>
              </thead>
            </table>
          </div>
        <?php endif?>
      <?php else:?>
        <div></div>
      <?php endif?>
    </main>
    
<?php include('Footer.php'); ?>