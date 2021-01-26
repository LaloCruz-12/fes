<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-4">
            <h3>Insertar datos en la base</h3>
            <form action="save.php" method="POST">
                <div class="form-group mb-4">
                    <input type="text" class = 'form-control' name ='Nombre' placeholder='Nombre'>
                </div>

                <div class="form-group mb-4">
                    <input type="text" class = 'form-control' name='ApPaterno' placeholder='Apellido Paterno'>
                </div>

                <div class="form-group mb-4">
                    <input type="text" class = 'form-control' name='Carrera' placeholder='Carrera'>
                </div>

                <div class="form-group mb-4">
                    <input type="text" class = 'form-control' name='NumCuenta' placeholder='Numero de Cuenta'>
                </div>

                <div class="form-group mb-4">
                    <input type="text" class = 'form-control' name = 'Contraseña' placeholder='Contraseña'>
                </div>

                <div class="form-group mb-4">
                    <button type = 'submit' name='save_data' class='btn btn-primary btn-block'>Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
      crossorigin="anonymous"></script>
</body>
</html>