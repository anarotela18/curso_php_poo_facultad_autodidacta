<?php

echo "<a href='index.php'>Inicio</a> <br/><br/>";

class RetornoDatos{
  //tipo String
  //tipo Entero
  //tipo Arreglo
  //tipo json
  public function retornaString($edad){
    if($edad > 18){
      return "Es mayor de edad";
    }else{
      return "NO es mayor de edad";
    }
  }

  public function retornaEntero($valor){
    if($valor > 0){
      return 1;
    }else{
      return 0;
    }
  }

  public function retornaArreglo($ciclos){
    $datos = array();
    for ($i=0; $i < $ciclos ; $i++) {
      $datos[$i] = $i;
    }
    return $datos;
  }

  public function retornaJson(){
    $arr = array(
      "hdd" => 500,
      "pantalla" => 21,
      "ram" => 8
      );
    return json_encode($arr);
  }
}
$miObjeto = new RetornoDatos;

var_dump($miObjeto ->retornaString(20));
echo "<br>";
var_dump($miObjeto -> retornaEntero(-1));
echo "<br>";
var_dump($miObjeto ->retornaArreglo(10));
echo "<br>";
var_dump($miObjeto->retornaJson());
?>
