<?php include('Header.php'); ?>
<!--  GetData.php nos da las tres variables que podemos usar de la base de datos -->
<!--  $usuarios contiene un arreglo con la informacion de la coleccion usuarios de la base de datos-->
<?php include('db\GetData.php');?>
<div class="row contenedor usuarios-main">

    <div class="col-md-2 ">

      <nav class="navbar2 navbar-light ">
        <div class="container-fluid">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </div>
    <div class="col-md-10 table-scroll">
      <table class="table caption-top table-hover">
        <caption>Usuarios
          <button type="button align-right" class="btn btn-success" data-bs-toggle="modal"
            data-bs-target="#add_user">
            Añadir Usuario
          </button>
          <button type="button align-right" class="btn btn-danger" data-bs-toggle="modal"
            data-bs-target="#deleteUserModal">
            Eliminar Usuario
          </button>
        </caption>
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Carrera</th>
            <th scope="col">No.cuenta</th>
          </tr>
        </thead>
        <tbody>
        <!--Por cada usuario dentro del arreglo $usuarios-->
        <?php foreach ($usuarios as $usuario) : ?>
          <!-- Revisamos que el $usuario actual no este vacio por que a veces se vuelve loca la DB-->
          <?php if (isset($usuario)):?>
            <tr>
              <td><?php echo $usuario['Nombre'];?></td>
              <td><?php echo $usuario['ApPaterno'];?></td>
              <td><?php echo $usuario['Carrera'];?></td>
              <td><?php echo $usuario['NumCuenta'];?></td>
            </tr>
          <?php endif?>
        <?php endforeach?>
        </tbody>
      </table>
    </div>
</div>


    <!-- Modal -->
    <div class="modal fade" id="add_user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <input class="controls" name="Nombre" type="texts" placeholder="Nombre">
                </div>
                <div>
                    <label ></label>
                    <input class="controls" name ="ApPaterno" type="text" placeholder="Apellido paterno">
                </div>

                <div>

                    <label ></label>
                    <input class="controls" name="NumCuenta" type="text" placeholder="Número de cuenta">
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
                  <input class="controls" name="Contraseña"type="password" placeholder="Contraseña">
                </div>

                <div>
                  <label class="controls" >Tipo de usuario</label>
                  <select class="controls" name = "TipoUsuario">

                    <option >Alumno</option>

                    <option>Administrador</option>

                  </select>
                </div>
                <button type="button" class="btn btn-secondary ml-1" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" name = "admin_save_user" class="btn btn-primary ml-auto">Guardar</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Delete User Modal -->
    <div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div>
              Porfavor ingrese el numero de cuenta del usuario que desea eliminar
            </div>
            <form action="db\PostData.php" method="POST">
                <div>
                    <label ></label>
                    <input class="controls" name="NumCuenta" type="text" placeholder="Número de cuenta">
                </div>
                <button type="button" class="btn btn-secondary ml-1" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" name = "delete_user"class="btn btn-danger ml-auto">Eliminar</button>
            </form>
          </div>
        </div>
      </div>
    </div>

<?php include('Footer.php');?>