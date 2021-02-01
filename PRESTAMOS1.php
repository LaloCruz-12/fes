<?php include('Header.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Prestamos</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id_Prestamo:</th>
            </tr>
          </thead>
          <thead>
            <tr>
              <th>Hora de inicio:</th>
            </tr>
          </thead>
          <thead>
            <tr>
              <th>Hora de entrega:</th>
            </tr>
          </thead>
          <thead>
            <tr>
              <th>Id_Equipo:</th>
            </tr>
          </thead>
          <thead>
            <tr>
              <th>Usuario:</th>
            </tr>
          </thead>
          <thead>
            <tr>
              <th>Numero de cuenta:</th>
            </tr>
          </thead>
        </table>
      </div>
    </main>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-danger me-md-2" type="button">Salir</button>
        <button class="btn btn-danger" type="button">Finalizar prestamo</button>
    </div>
<?php include('Footer.php'); ?>