<?php
  require_once("conexion.php");
  require_once("metodos_crud.php");

  $objeto = new conectar();
  $conexion = $objeto ->conexion();
  $id = $_GET['id'];
  $sql = "SELECT nombre,apellido FROM persona WHERE id = '$id'";
  $result = mysqli_query($conexion, $sql);
  $ver = mysqli_fetch_row($result);
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
            <form action="procesos/actualizar.php" method="post">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" value="<?php echo $ver[0];?>" class="form-control">
              </div>
              <div class="form-group">
                <label>Apellido</label>
                <input type="text" name="apellido" value="<?php echo $ver[1];?>" class="form-control">
              </div>
              <button class="btn btn-info btn-block">Editar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
