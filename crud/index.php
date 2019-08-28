<?php
  require_once("conexion.php");
  require_once("metodos_crud.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/bc903b1abd.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a href="index.php" class="navbar-brand">POO PHP MYSQL CRUD</a>
      </div>
    </nav>
    <div class="container p-4">
      <div class="row">
        <div class="col-md-4">
          <div class="card card-body">
            <form action="procesos/insertar.php" method="post">
              <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Apellido</label>
                <input type="text" name="apellido" class="form-control" required>
              </div>
              <button class="btn btn-success btn-block">Agregar</button>
            </form>
          </div>
        </div>
        <div class="col-md-8">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Acciones</th>
              </tr>
            </thead>
          <?php
            $objeto = new metodos();
            $sql = "SELECT * FROM persona";
            $datos = $objeto ->mostrarDatos($sql);
            foreach($datos as $row){
            ?>
            <tr>
              <td><?php echo $row['nombre']; ?></td>
              <td><?php echo $row['apellido']; ?></td>
              <td>
                <a href="editar.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary">
                  <i class="fas fa-marker"></i>
                </a>
                <a href="procesos/eliminar.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">
                  <i class="fas fa-trash-alt"></i>
                </a>
              </td>
            </tr>
          <?php } ?>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
