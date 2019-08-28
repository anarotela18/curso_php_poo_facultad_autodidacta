<?php
  require_once "../conexion.php";
  require_once "../metodos_crud.php";

  $id = $_GET['id'];

  $objeto = new metodos();
  if($objeto -> eliminarDatosNombre($id) == 1){
    header("Location: ../index.php");
  }else{
    echo "fallo al eliminar";
  }
?>
