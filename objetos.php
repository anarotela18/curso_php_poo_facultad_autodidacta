<?php

echo "<a href='index.php'>Inicio</a> <br/><br/>";

class MiClase{
  // mis atributos
  public $resultado = 0;

  // mis metodos
  public function miMetodo($v1, $v2){
     $this -> resultado = $v1 + $v2;
     return $this ->resultado;
  }
}

//instanciar o declarar un objeto
$miObjeto = new MiClase();

echo $miObjeto ->miMetodo(5,5);
?>
