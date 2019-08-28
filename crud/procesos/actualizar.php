<?php

  require_once "../conexion.php";
  require_once "../metodos_crud.php";

  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $id = $_POST['id'];

  $datos = array($nombre, $apellido, $id);

  $objeto = new metodos();
  if($objeto-> actualizarDatosNombre($datos) == 1){
    header("Location:../index.php");
  }else{
    echo "Fallo al editar";
  }
?>
