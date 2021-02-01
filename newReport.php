<?php include('Header.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <div class="card card1" style="width: 100%;">
                <img src="../img/hppavilion.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Laptop Hp Pavilion 14-dw0001</h5>
                  <p class="card-text">Color plata con Num. de serie XXXXXX</p>
                  <a href="#" class="btn btn-primary">Ver Caracteristicas</a>
                  <a href="#" class="btn btn-primary">Crear reporte</a>
                </div>
              </div>
          </div>
          <div class="col-sm-12 col-md-8">
            <div class = "card card1">
                <div class="mb-3" style="margin:1rem;">
                    <label for="exampleFormControlTextarea1" class="form-label">Reporte</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                </div>
                <div class="mb-3" style="margin: 1rem;">
                    <label for="formFile" class="form-label">Subir foto del equipo</label>
                    <input class="form-control" type="file" id="formFile">
                    <button class="btn btn-primary" type="submit" style="width: 10rem;">Crear</button>
                    <button class="btn btn-primary" type="submit" style="width: 10rem; margin: 1rem;">Cancelar</button>
                </div>
            </div>
          </div>
        </div>
    </div>

<?php include('Footer.php'); ?>
