<?php
  require_once "clase_calculo.php";
  $calcular = new Calculadora();

  $_POST['valor1'];
  $_POST['valor2'];
  $_POST['opcion'];

  echo $calcular -> calcularDatos($_POST['valor1'], $_POST['valor2'],$_POST['opcion']);


?>
