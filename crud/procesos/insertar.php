<?php
  require_once "../conexion.php";
  require_once "../metodos_crud.php";

  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];

  $datos = array($nombre, $apellido);
  $objeto = new metodos();
  if($objeto-> insertarDatosNombre($datos) == 1){
    header("Location:../index.php");
  }else{
    echo "Fallo al agregar";
  }
?>
